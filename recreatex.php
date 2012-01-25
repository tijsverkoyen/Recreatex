<?php

/**
 * Recreatex class
 *
 * This source file can be used to communicate with Recreatex (http://www.syx.nl/en/products/recreatex)
 *
 * The class is documented in the file itself. If you find any bugs help me out and report them. Reporting can be done by sending an email to php-recreatex-bugs[at]verkoyen[dot]eu.
 * If you report a bug, make sure you give me enough information (include your code).
 *
 * License
 * Copyright (c), Tijs Verkoyen. All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products derived from this software without specific prior written permission.
 *
 * This software is provided by the author "as is" and any express or implied warranties, including, but not limited to, the implied warranties of merchantability and fitness for a particular purpose are disclaimed. In no event shall the author be liable for any direct, indirect, incidental, special, exemplary, or consequential damages (including, but not limited to, procurement of substitute goods or services; loss of use, data, or profits; or business interruption) however caused and on any theory of liability, whether in contract, strict liability, or tort (including negligence or otherwise) arising in any way out of the use of this software, even if advised of the possibility of such damage.
 *
 * @author			Tijs Verkoyen <php-recreatex@verkoyen.eu>
 * @version			1.0.0
 *
 * @copyright		Copyright (c), Tijs Verkoyen. All rights reserved.
 * @license			BSD License
 */
class Recreatex
{
	// internal constant to enable/disable debugging
	const DEBUG = true;

	// URL for the api
	const ENDPOINT = '/webshop.svc';

	// image endpoint URL
	const REST_IMAGE_URL = '/WebShopImageService.svc';

	// document endpoint URL
	const REST_DOCUMENT_URL = '/WebShopDocumentService.svc';

	// soap URL
	const SOAP_URL = 'http://www.recreatex.be/webshop/v1.1/IWebShop';

	// current version
	const VERSION = '1.0.0';


	/**
	 * A cURL instance
	 *
	 * @var	resource
	 */
	private $curl;

	/**
	 * The port to use.
	 *
	 * @var	int
	 */
	private $port;

	/**
	 * The server to use.
	 *
	 * @var	string
	 */
	private $server;

	/**
	 * The service context
	 *
	 * @var	array
	 */
	private $serviceContext;

	/**
	 * The timeout
	 *
	 * @var	int
	 */
	private $timeOut = 10;

	/**
	 * The user agent
	 *
	 * @var	string
	 */
	private $userAgent;

// class methods
	/**
	 * Default constructor
	 *
	 * @param string[optional] $server	The server to use.
	 * @param int[optional] $port		The port whereon the server is operating.
	 */
	public function __construct($server = null, $port = null)
	{
		if($server !== null) $this->setServer($server);
		if($port !== null) $this->setPort($port);
	}

	/**
	 * Destructor
	 */
	public function __destruct()
	{
		// is the connection open?
		if($this->curl !== null)
		{
			// close connection
			curl_close($this->curl);

			// reset
			$this->curl = null;
		}
	}

	/**
	 * Callback-method for elements in the return-array
	 *
	 * @param mixed $input The value.
	 * @param string $key The key.
	 * @param DOMElement $XML The root-element.
	 */
	private static function arrayToXML(&$input, $key, $XML)
	{
		// skip attributes
		if($key == '@attributes') return;

		// create element
		$element = new DOMElement($key);

		// append
		$XML->appendChild($element);

		// no value? just stop here
		if($input === null) return;

		// is it an array and are there attributes
		if(is_array($input) && isset($input['@attributes']))
		{
			// loop attributes
			foreach((array) $input['@attributes'] as $name => $value) $element->setAttribute($name, $value);

			// remove attributes
			unset($input['@attributes']);

			// reset the input if it is a single value
			if(count($input) == 1)
			{
				// get keys
				$keys = array_keys($input);

				// reset
				$input = $input[$keys[0]];
			}
		}

		// the input isn't an array
		if(!is_array($input))
		{
			// a string?
			if(is_string($input))
			{
				// characters that require a cdata wrapper
				$illegalCharacters = array('&', '<', '>', '"', '\'');

				// default we dont wrap with cdata tags
				$wrapCdata = false;

				// find illegal characters in input string
				foreach($illegalCharacters as $character)
				{
					if(stripos($input, $character) !== false)
					{
						// wrap input with cdata
						$wrapCdata = true;

						// no need to search further
						break;
					}
				}

				// check if value contains illegal chars, if so wrap in CDATA
				if($wrapCdata) $element->appendChild(new DOMCdataSection($input));

				// just regular element
				else $element->appendChild(new DOMText($input));
			}

			// regular element
			else $element->appendChild(new DOMText($input));
		}

		// the value is an array
		else
		{
			if(!empty($input)) ksort($input);

			// init var
			$isNonNumeric = false;

			// loop all elements
			foreach($input as $index => $value)
			{
				// non numeric string as key?
				if(!is_numeric($index))
				{
					// reset var
					$isNonNumeric = true;

					// stop searching
					break;
				}
			}

			// is there are named keys they should be handles as elements
			if($isNonNumeric) array_walk($input, array('Recreatex', 'arrayToXML'), $element);

			// numeric elements means this a list of items
			else
			{
				// handle the value as an element
				foreach($input as $value)
				{
					if(is_array($value)) array_walk($value, array('Recreatex', 'arrayToXML'), $element);
				}
			}
		}
	}

	/**
	 * Build the paging parameter
	 *
	 * @param int $page							The page to retrieve.
	 * @param int $size							The number of items per page.
	 * @param string[optional] $sortOn			The field to sort on.
	 * @param bool[optional] $sortAscending		Should we sort ascending?
	 * @return array
	 */
	public static function buildPagingParameter($page, $size, $sortOn = null, $sortAscending = false)
	{
		// init var
		$return = array();

		$return['PageIndex'] = (int) $page;
		$return['PageSize'] = (int) $size;

		if($sortOn !== null)
		{
			$return['Sorting']['IsAscending'] = (bool) $sortAscending;
			$return['Sorting']['PropertyName'] = (string) $sortOn;
		}

		// return
		return $return;
	}

	/**
	 * Decode the response
	 *
	 * @param SimpleXMLElement $item	The item to decode.
	 * @param array[optional] $return	A placeholder.
	 * @param int[optional] $i			A counter.
	 * @return mixed
	 */
	private function decodeResponse($item, $return = null, $i = 0)
	{
		$base64Keys = array('Bytes');
		$floatKeys = array('Price', 'Stock', 'Cost');
		$integerKeys = array('AvailableSeats');
		$fullImageUrlsKeys = array('ImageUri', 'ImageUrl');
		$timestampKeys = array('From', 'Until', 'SalesFrom', 'SalesUntil');

		if($item instanceof SimpleXMLElement)
		{
			foreach($item as $key => $value)
			{
				// empty
				if(isset($value['nil']) && (string) $value['nil'] === 'true') $return[$key] = null;

				// empty
				elseif(isset($value[0]) && (string) $value == '')
				{
					$return[$key] = self::decodeResponse($value, null, 1);
				}

				else
				{
					// base64
					if(in_array($key, $base64Keys)) $return[$key] = base64_decode((string) $value);

					// booleans
					elseif((string) $value == 'true') $return[$key] = true;
					elseif((string) $value == 'false') $return[$key] = false;

					// floats
					elseif(in_array($key, $floatKeys)) $return[$key] = (float) $value;

					// integers
					elseif(in_array($key, $integerKeys)) $return[$key] = (int) $value;

					// fallback to string
					else $return[$key] = (string) $value;

					// add an extra item with the full image url
					if(in_array($key, $fullImageUrlsKeys))
					{
						Spoon::dump($key);

						// add full url
						$item['ImageFullUrl'] = ($item['ImageUri'] != '') ? $this->getServer() . self::REST_IMAGE_URL . '/' . $item['ImageUri'] : null;
					}

					// add an extra item with the value converted to a UNIX-timestamp
					if(in_array($key, $timestampKeys))
					{
						$return[$key . 'Timestamp'] = (int) strtotime((string) $value);
					}

				}
			}
		}

		else
		{
			throw new RecreatexException('invalid item');
		}

		return $return;
	}

	/**
	 * Make the call
	 *
	 * @param string $method					The method to be called.
	 * @param array[optional] $data				The data.
	 * @param bool[optional] $includeContext	Should we include the context, if available.
	 * @param bool[optional] $overruleKey		Each method is wrapped, but for several methods this can't be done automatically.
	 * @return mixed
	 */
	private function doCall($method, $data = null, $includeContext = true, $overruleKey = null)
	{
		/**
		 * I know there is an PHP SOAP extension, but it can't handle requests with multiple message parts.
		 * So this is my own SOAP-client implementation.
		 */

		// init XML
		$XML = new DOMDocument('1.0', 'utf-8');

		// set some properties
		$XML->preserveWhiteSpace = false;
		$XML->formatOutput = true;

		// create root element
		$root = $XML->createElement('soap:Envelope');
		$root->setAttribute('xmlns:soap', 'http://schemas.xmlsoap.org/soap/envelope/');
		$root->setAttribute('xmlns', 'http://www.recreatex.be/webshop/v1.1/');
		$XML->appendChild($root);

		// create body
		$body = $XML->createElement('soap:Body');
		$root->appendChild($body);

		// grab the service context?
		$serviceContext = $this->getServiceContext();

		// do we have a service context?
		if($includeContext && !empty($serviceContext))
		{
			// create the context
			$context = $XML->createElement('Context');

			if(isset($serviceContext['division_id'])) $context->appendChild($XML->createElement('DivisionId', $serviceContext['division_id']));
			if(isset($serviceContext['language'])) $context->appendChild($XML->createElement('Language', $serviceContext['language']));
			if(isset($serviceContext['shop_id'])) $context->appendChild($XML->createElement('ShopId', $serviceContext['shop_id']));

			// append the content
			$body->appendChild($context);
		}

		// sort the data
		if(!empty($data)) ksort($data);

		// should we overrule the root-key?
		if($overruleKey) $realData = array($overruleKey => $data);

		else $realData = array($method => $data);

		// build XML
		array_walk($realData, array('Recreatex', 'arrayToXML'), $body);

		// store the body
		$body = $XML->saveXML();

		// build headers
		$headers = array(
			'Content-Type: text/xml; charset=utf-8',
			'Content-Length: ' . mb_strlen($body),
			'SOAPAction: "' . self::SOAP_URL . '/' . (string) $method . '"'
		);

		// set options
		$options[CURLOPT_URL] = $this->getServer() . self::ENDPOINT;
		if($this->getPort() != 0) $options[CURLOPT_PORT] = $this->getPort();
		$options[CURLOPT_USERAGENT] = $this->getUserAgent();
		$options[CURLOPT_RETURNTRANSFER] = true;
		$options[CURLOPT_TIMEOUT] = (int) $this->getTimeOut();
		$options[CURLOPT_HTTP_VERSION] = CURL_HTTP_VERSION_1_1;
		$options[CURLOPT_HTTPHEADER] = $headers;
		$options[CURLOPT_POST] = true;
		$options[CURLOPT_POSTFIELDS] = $body;

		// init
		$this->curl = curl_init();

		// set options
		curl_setopt_array($this->curl, $options);

		// execute
		$response = curl_exec($this->curl);
		$headers = curl_getinfo($this->curl);

		// fetch errors
		$errorNumber = curl_errno($this->curl);
		$errorMessage = curl_error($this->curl);

		// error?
		if($errorNumber != '')
		{
			// internal debugging enabled
			if(self::DEBUG)
			{
				echo '<pre>';
				var_dump(htmlentities($response));
				var_dump($this);
				echo '</pre>';
			}

			throw new RecreatexException($errorMessage, $errorNumber);
		}

		// init vars
		$search = array(
			'<s:', '</s:',
			' z:', ' i:',
			' xmlns:s="http://schemas.xmlsoap.org/soap/envelope/"',
			' xmlns="http://www.recreatex.be/webshop/v0.5/"',
			' xmlns:i="http://www.w3.org/2001/XMLSchema-instance"',
			' xmlns:z="http://schemas.microsoft.com/2003/10/Serialization/"'
		);
		$replace = array(
			'<', '</',
			' ', ' ',
			'',
			'',
			'',
			''
		);

		/**
		 * Because SimpleXML really sucks and it can't handle namespaced attributes, it fucks up the returned data.
		 * We return the XML response, and each method will be responsable to return the data in a decent way.
		 */
		// convert it
		$response = str_replace($search, $replace, $response);
		$response = @simplexml_load_string($response);

		// validate
		if($response === false)
		{
			// internal debugging enabled
			if(self::DEBUG)
			{
				echo '<pre>';
				var_dump($headers);
				var_dump(htmlentities($response));
				var_dump($this);
				echo '</pre>';
			}

			// throw exception
			throw new RecreatexException('Invalid response.');
		}

		// validate
		if(isset($response->Body->Fault))
		{
			// internal debugging enabled
			if(self::DEBUG)
			{
				echo '<pre>';
				var_dump(htmlentities($body));
				var_dump($response);
				var_dump($headers);
				var_dump($this);
				echo '</pre>';
			}

			// message
			$message = (string) $response->Body->Fault->faultstring;

			// throw exception
			throw new RecreatexException($message);
		}

		// return the direct response if it is available
		if(isset($response->Body->{$method . 'Response'})) return $response->Body->{$method . 'Response'};

		// return the response
		return $response->Body;
	}

	/**
	 * Get the port
	 *
	 * @return int
	 */
	public function getPort()
	{
		return (int) $this->port;
	}

	/**
	 * Get the server.
	 *
	 * @return string
	 */
	public function getServer()
	{
		return (string) $this->server;
	}

	/**
	 * Get the service context
	 *
	 * @return null|array
	 */
	public function getServiceContext()
	{
		return $this->serviceContext;
	}

	/**
	 * Get the timeout that will be used
	 *
	 * @return int
	 */
	public function getTimeOut()
	{
		return (int) $this->timeOut;
	}

	/**
	 * Get the useragent that will be used. Our version will be prepended to yours.
	 * It will look like: "PHP Recreatex/<version> <your-user-agent>"
	 *
	 * @return string
	 */
	public function getUserAgent()
	{
		return (string) 'PHP Recreatex/' . self::VERSION . ' ' . $this->userAgent;
	}

	/**
	 * Set the port to use
	 *
	 * @param int $port
	 */
	public function setPort($port)
	{
		$this->port = $port;
	}

	/**
	 * Set the server
	 *
	 * @param string $server	The server to use.
	 */
	public function setServer($server)
	{
		$this->server = (string) $server;
	}

	/**
	 * Set the service context
	 *
	 * @param string[optional] $divisionId		The divisionId, no clue..
	 * @param string[optional] $language		The language to use, I have no idea what the possible languages are.
	 * @param string[optional] $shopId			The id of your shop.
	 */
	public function setServiceContext($divisionId = null, $language = null, $shopId = null)
	{
		$this->serviceContext = array();
		$this->serviceContext['division_id'] = ($divisionId !== null) ? $divisionId : null;
		$this->serviceContext['language'] = ($language !== null) ? (string) $language : null;
		$this->serviceContext['shop_id'] = ($shopId !== null) ? (string) $shopId : null;
	}

	/**
	 * Set the timeout
	 * After this time the request will stop. You should handle any errors triggered by this.
	 *
	 * @param int $seconds	The timeout in seconds.
	 */
	public function setTimeOut($seconds)
	{
		$this->timeOut = (int) $seconds;
	}

	/**
	 * Set the user-agent for you application
	 * It will be appended to ours, the result will look like: "PHP Recreatex/<version> <your-user-agent>"
	 *
	 * @param string $userAgent	Your user-agent, it should look like <app-name>/<app-version>.
	 */
	public function setUserAgent($userAgent)
	{
		$this->userAgent = (string) $userAgent;
	}

// webservice methods
	/**
	 * Check if the service is available.
	 *
	 * @return bool
	 */
	public function isAvailable()
	{
		// make the call
		$response = $this->doCall('IsAvailable', null, false);

		// validate
		if(!isset($response->IsAvailableResult)) throw new RecreatexException('Invalid response.');

		// return
		return (bool) ((string) $response->IsAvailableResult == 'true');
	}

	/**
	 * Authenticates a user.
	 *
	 * @param string $login		The login for the user.
	 * @param string $password	The password for the user.
	 * @return array
	 */
	public function authenticateUser($login, $password)
	{
		// build the body
		$data['Credentials']['Login'] = (string) $login;
		$data['Credentials']['Password'] = (string) $password;

		// make the call
		$response = $this->doCall('AuthenticateUser', $data);

		// validate
		if(!isset($response->AuthenticationResult)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();
		$return['Error'] = (string) $response->AuthenticationResult->Error;
		$return['HasSucceeded'] = (bool) ((string) $response->AuthenticationResult->HasSucceeded == 'true');
		$return['PersonId'] = ($return['HasSucceeded']) ? (string) $response->AuthenticationResult->PersonId : null;

		// return
		return $return;
	}

	/**
	 *
	 * @param string[optional] $id					The unique ID of the person, will be empty while creating a person.
	 * @param string[optional] $code				A unique code for the person.
	 * @param array[optional] $name					The name details for a person. The array should have the keys below:
	 * 			- string First		firstname of the person.
	 * 			- string Middle	middlename of the person.
	 * 			- string Last		lastname of the person.
	 * @param array[optional] $address				The address details of the person. The array should have the keys below:
	 * 			- string Street	the street.
	 * 			- string Number	the housenumber.
	 * 			- string Box		the boxnumber.
	 * 			- string ZipCode	the zip code.
	 * 			- string Town		the town
	 * 			- string Country	the country, use ISO-codes.
	 * @param array[optional] $settings				Extra settings for the person.
	 * 			- bool subscribe_mailing_list	is the person subscribed on the newsletter?
	 * @param string[optional] $email				The emailaddress of the person.
	 * @param string[optional] $birthdate			The birthdate of the person.
	 * @param string[optional] $gender				The gender of the person. Possible values are: male, female, unknown.
	 * @param string[optional] $language			The language of the person, use ISO-codes.
	 * @param string[optional] $picture				The base64-data of the picture.
	 * @param string[optional] $phone				The phone number of the person.
	 * @param string[optional] $cellPhone			The cell phone number of the person.
	 * @param string[optional] $bankAccount			The bankaccount of the person.
	 * @param string[optional] $nationalNumber		The national number of the person.
	 * @param string[optional] $comments			The comments for the person.
	 * @param array[optiona] $credential			The credentials of the person.
	 * 			- Username			the username.
	 * 			- Password			the password.
	 * @param array[optional] $relations			The relations of the person.
	 * 			-
	 * @return array
	 */
	public function savePerson($id = null, $code = null, $name = array(), $address = array(), $settings = array(), $email = null, $birthdate = null, $gender = null, $language = null, $picture = null, $phone = null, $cellPhone = null, $bankAccount = null, $nationalNumber = null, $comments = null, $credential = array(), $relations = array())
	{
		// build the body
		$data = array();
		if($id !== null) $data['Id'] = (string) $id;
		if($code !== null) $data['Code'] = (string) $code;
		if(!empty($name))
		{
			if(isset($name['First'])) $data['Name']['First'] = (string) $name['First'];
			if(isset($name['Middle'])) $data['Name']['Middle'] = (string) $name['Middle'];
			if(isset($name['Last'])) $data['Name']['Last'] = (string) $name['Last'];
		}
		if(!empty($address))
		{
			if(isset($address['Street'])) $data['Address']['Street'] = (string) $address['Street'];
			if(isset($address['Number'])) $data['Address']['Number'] = (string) $address['Number'];
			if(isset($address['Box'])) $data['Address']['Box'] = (string) $address['Box'];
			if(isset($address['ZipCode'])) $data['Address']['ZipCode'] = (string) $address['ZipCode'];
			if(isset($address['Town'])) $data['Address']['Town'] = (string) $address['Town'];
			if(isset($address['Country'])) $data['Address']['Country'] = (string) $address['Country'];
		}
		if(!empty($settings))
		{
			if(isset($settings['SubscribeMailingList'])) $data['Settings']['SubscribeMailingList'] = (bool) $settings['SubscribeMailingList'];
		}
		if($email !== null) $data['Email'] = (string) $email;
		if($birthdate !== null) $data['BirthDate'] = (string) $birthdate;
		if($gender !== null) $data['Gender'] = (string) $gender;

		if($language !== null) $data['Language'] = (string) $language;
		if($picture !== null) $data['Picture'] = (string) $picture;
		if($phone !== null) $data['Phone'] = (string) $phone;
		if($cellPhone !== null) $data['CellPhone'] = (string) $cellPhone;
		if($bankAccount !== null) $data['BankAccount'] = (string) $bankAccount;
		if($nationalNumber !== null) $data['NationalNumber'] = (string) $nationalNumber;
		if($comments !== null) $data['Comments'] = (string) $comments;
		if(!empty($credential))
		{
			if(isset($credential['Password'])) $data['Credential']['Password'] = (string) $credential['Password'];
			if(isset($credential['Username'])) $data['Credential']['Username'] = (string) $credential['Username'];
		}
		if(!empty($relations))
		{
			// not used
		}

		// make the call
		$response = $this->doCall('SavePerson', $data, true, 'Person');

		// validate
		if(!isset($response->SavePersonResult)) throw new RecreatexException('Invalid response.');

		// decode response
		$return = self::decodeResponse($response->SavePersonResult[0]);

		// return
		return $return;
	}

	/**
	 * Save a person
	 *
	 * @param array $object		The existing person.
	 * @return array
	 */
	public function savePersonByObject($object)
	{
		// @todo	fix the data automagically..

		// make the call
		$response = $this->doCall('SavePerson', array('Person' => $object), true);

		// validate
		if(!isset($response->SavePersonResult)) throw new RecreatexException('Invalid response.');

		// decode response
		$return = self::decodeResponse($response->SavePersonResult[0]);

		// return
		return $return;
	}

	/**
	 * Find a person
	 *
	 * @param string[optional] $id			The unique ID of the persion you want.
	 * @param string[optional] $username	The username of the user you want.
	 * @param string[opional] $email
	 * @param array[optional] $includes
	 * @param array[optional] $paging		The paging criteria, see Recreatex::buildPagingParameter().
	 * @return array
	 */
	public function findPerson($id = null, $username = null, $email = null, array $includes = array(), $paging = null)
	{
		// build body
		$data = array();
		if($id !== null) $data['Criteria']['Id'] = (string) $id;
		if($username !== null) $data['Criteria']['UserName'] = (string) $username;
		if($email !== null) $data['Criteria']['Email'] = (string) $email;
		if($paging != null) $data['Criteria']['Paging'] = $paging;
		if(!empty($includes))
		{
			foreach($includes as $key => $value) $data['Criteria']['Includes'][$key] = (bool) $value;
		}

		// make the call
		$response = $this->doCall('FindPerson', $data);

		// validate
		if(!isset($response->FindPersonResult)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->FindPersonResult->Person as $row)
		{
			// build item
			$return[] = self::decodeResponse($row);
		}

		// return
		return $return;
	}

	/**
	 * List all the activity types
	 *
	 * @return array
	 */
	public function listActivityTypes()
	{
		// make the call
		$response = $this->doCall('ListActivityTypes');

		// validate
		if(!isset($response->ActivityTypes)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->ActivityType as $row)
		{
			// build item
			$item = array();
			$item['Id'] = (string) $row->Id;
			$item['Code'] = (string) $row->Code;
			$item['Name'] = (string) $row->Name;

			// add
			$return[] = $item;
		}

		// return
		return $return;
	}

	/**
	 * Get a list of article groups
	 *
	 * @param string[optional] $articleType		Define the type of articles to retrieve. Possible values are: Sale, Rental, All.
	 * @param bool[optional] $includeImage		Include the image.
	 * @param bool[optional] $includeImageUrl	Include the url of the image.
	 * @return array
	 */
	public function listArticleGroups($articleType = 'Sale', $includeImage = false, $includeImageUrl = true)
	{
		// validate
		$allowedArticleTypes = array('Sale', 'Rental', 'All');
		if(!in_array($articleType, $allowedArticleTypes)) throw new RecreatexException('Invalid articletype (' . $articleType . '), allowed values are: ' . implode(', ', $allowedArticleTypes) . '.');

		// build the data
		$data = array(
			'ArticleTypes' => (string) $articleType,
			'IncludeImage' => (bool) $includeImage,
			'IncludeImageUrl' => (bool) $includeImageUrl,
		);

		// make the call
		$response = $this->doCall('ListArticleGroups', array('ArticleGroupSearchCriteria' => $data));

		// validate
		if(!isset($response->ArticleGroups)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->ArticleGroups->ArticleGroup as $row)
		{
			// decode the response
			$item = self::decodeResponse($row);

			// add full url
			if($includeImageUrl) $item['ImageFullUrl'] = ($item['ImageUrl'] != '') ? $this->getServer() . self::REST_IMAGE_URL . '/' . $item['ImageUrl'] : null;

			// add
			$return[] = $item;
		}

		// return
		return $return;
	}

	/**
	 * Find articles.
	 *
	 * @param string[optional] $articleGroupId	If provided only articles from this group will be returned.
	 * @param string[optional] $namePattern		If provided only articles that match the pattern will be returned.
	 * @param string[optional] $buyerId			If provided only articles that are relevant for this user will be returned.
	 * @param string[optional] $articleType		The type of articles, possible values are: Sale, Rental, All.
	 * @param array[optional] $includes			A key-value-array with the properties to include, possible keys are: Price, ImageUrl, Image, Group.
	 * @param array[optional] $paging				The paging criteria, see Recreatex::buildPagingParameter().
	 * @param array[optional] $articles			A list containing related articles (not used).
	 * @return array
	 */
	public function findArticles($articleGroupId = null, $namePattern = null, $buyerId = null, $articleType = 'All', array $includes = array(), $paging = null, $articles = null)
	{
		// validate
		$allowedArticleTypes = array('Sale', 'Rental', 'All');
		if(!in_array($articleType, $allowedArticleTypes)) throw new RecreatexException('Invalid articletype (' . $articleType . '), allowed values are: ' . implode(', ', $allowedArticleTypes) . '.');

		// build the data
		$data = array();
		if($articleGroupId !== null) $data['ArticleGroupId'] = (string) $articleGroupId;
		if($namePattern !== null) $data['NamePattern'] = (string) $namePattern;
		if($buyerId !== null) $data['BuyerId'] = (string) $buyerId;
		$data['ArticleTypes'] = (string) $articleType;
		if(!empty($includes))
		{
			foreach($includes as $key => $value) $data['Includes'][$key] = (bool) $value;
		}
		if(!empty($paging)) $data['Paging'] = $paging;
		if(!empty($articles)) $data['Articles'] = $articles;

		// paging or includes?
		if(isset($data['Paging']) || isset($data['Includes'])) $data = array('ArticleSearchCriteria' => $data);

		// make the call
		$response = $this->doCall('FindArticles', $data);

		// validate
		if(!isset($response->Articles)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->Articles->Article as $row)
		{
			// build item
			$item = self::decodeResponse($row);

			// add full url
			$item['ImageFullUrl'] = ($item['ImageUrl'] != '') ? $this->getServer() . self::REST_IMAGE_URL . '/' . $item['ImageUrl'] : null;

			// add
			$return[] = $item;
		}

		// return
		return $return;
	}

	/**
	 * Get a list of exposition types
	 *
	 * @return array
	 */
	public function listExpositionTypes()
	{
		// make the call
		$response = $this->doCall('ListExpositionTypes');

		// validate
		if(!isset($response->ExpositionTypes)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->ExpositionTypes->ExpositionType as $row)
		{
			// build item
			$item = array();
			$item['Id'] = (string) $row->Id;
			$item['Name'] = (string) $row->Name;
			$item['Description'] = (isset($row->Description['nil'])) ? null : (string) $row->Description;

			// add
			$return[] = $item;
		}

		// return
		return $return;
	}

	/**
	 * Find expositions.
	 *
	 * @param string[optional] $expositionId		If provided, ID of the specififiek exposition to return.
	 * @param string[optional] $namePattern			If provided, only items matching the pattern will be returned.
	 * @param int[optional] $from					If provided only items that start after this date will be returned.
	 * @param int[optional] $until					If provided only items that start before this date will be returned.
	 * @param string[optional] $expositionTypeId	If provided only items from this type will be returned.
	 * @param string[optional] $audienceId			If provided only items for this audience will be returned.
	 * @param array[optional] $includes				A key-value-array with the properties to include, possible keys are: ImageUrl, Image.
	 * @return array
	 */
	public function findExpositions($expositionId = null, $namePattern = null, $from = null, $until = null, $expositionTypeId = null, $audienceId = null, array $includes = array())
	{
		throw new RecreatexException('Implement me when there are expositions.');

		// build the data
		$data = array();
		if($expositionId !== null) $data['ExpositionId'] = (string) $expositionId;
		if($namePattern !== null) $data['NamePattern'] = (string) $namePattern;
		if($from !== null) $data['From'] = date('c', (int) $from);
		if($until !== null) $data['Until'] = date('c', (int) $until);
		if($expositionTypeId !== null) $data['ExpositionTypeId'] = (string) $expositionTypeId;
		if($audienceId !== null) $data['AudienceId'] = (string) $audienceId;
		if(!empty($includes))
		{
			foreach($includes as $key => $value) $data['Includes'][$key] = (bool) $value;
		}
		$data = array('ExpositionSearchCriteria' => $data);

		// make the call
		$response = $this->doCall('FindExpositions', $data);
	}

	/**
	 * List the periods for an exposition.
	 *
	 * @param string $expositionId		The ID of the exposition.
	 * @param array[optional] $paging	The paging criteria, see Recreatex::buildPagingParameter().
	 * @return array
	 */
	public function listExpositionPeriods($expositionId, $paging = null)
	{
		throw new RecreatexException('Not implemented', 500);
	}

	/**
	 * Validate the basket
	 *
	 * @param string $customerId	The ID of the buyer.
	 * @param array $items			The items that will be validated as an array, each item can have the keys below:
	 * 			- Id (string)			The ID of the item.
	 * 			- Quantity (int)		The number of items.
	 * 			- DivisionId (string)	The dvision the item belongs to.
	 * @param array $payments		The payment methods used.
	 * 			- Amount (float)			The amount that was payed.
	 * 			- Currency (string)			The curreny used to pay.
	 * 			- PaymentMethodId (string)	The ID of the payment method.
	 * @param float $price			The total of the order.
	 * @return array
	 */
	public function validateBasket($customerId, array $items, array $payments, $price)
	{
		// build body
		$data = array();
		$data['CustomerId'] = (string) $customerId;
		$data['Price'] = (float) $price;

		// add items
		foreach($items as $row) $data['Items'][] = array('Item' => $row);
		foreach($payments as $row) $data['Payments'] = array('Payment' => $row);

		// make the call
		$response = $this->doCall('ValidateBasket', array('ValidateBasket' => $data));

		// validate
		if(!isset($response->ValidateBasketResult)) throw new RecreatexException('Invalid response.');

		// return
		return self::decodeResponse($response->ValidateBasketResult[0]);
	}

	public function checkoutBasket($customerId, array $items, array $payments, $price)
	{
		// build body
		$data = array();
		$data['CustomerId'] = (string) $customerId;
		$data['Items'] = $items;
		$data['Paymenst'] = $payments;
		$data['Price'] = (float) $price;

		// make the call
		$response = $this->doCall('CheckoutBasket', array('Basket' => $data));

		// validate
		if(!isset($response->CheckoutBasketResult)) throw new RecreatexException('Invalid response.');

		// return
		return self::decodeResponse($response->CheckoutBasketResult[0]);
	}

	public function lockBasketItems()
	{
		throw new RecreatexException('Not implemented', 500);
	}

	public function unlockBasketItems()
	{
		throw new RecreatexException('Not implemented', 500);
	}

	/**
	 * List the payment methods.
	 *
	 * @return array
	 */
	public function listPaymentMethods()
	{
		// make the call
		$response = $this->doCall('ListPaymentMethods', array('ListPaymentMethods' => null));

		// validate
		if(!isset($response->PaymentMethods)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->PaymentMethods->BasketPaymentMethod as $row)
		{
			// build item
			$return[] = self::decodeResponse($row);
		}

		// return
		return $return;
	}

	/**
	 * Lists the CultureActivities for the active division.
	 *
	 * @return array
	 */
	public function listCultureActivities()
	{
		// make the call
		$response = $this->doCall('ListCultureActivities');

		// validate
		if(!isset($response->CultureActivities->CultureActivity)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->CultureActivities->CultureActivity as $row)
		{
			// build item
			$return[] = self::decodeResponse($row);
		}

		// return
		return $return;
	}

	/**
	 * Find culture events.
	 *
	 * @param string[optional] $cultureEventId		If provided only this item will be returned.
	 * @param string[optional] $name				If provided only items matching the pattern will be returned.
	 * @param int[optional] $from					If provided only items that start after this date will be returned.
	 * @param int[optional] $until					If provided only items that start before this date will be returned.
	 * @param string[optional] $cultureActivityId	If provided only items within this activityid will be returned.
	 * @param array[optional] $paging				The paging criteria, see Recreatex::buildPagingParameter().
	 * @param array[optional] $includes				A key-value-array with the properties to include, possible keys are: ImageUrl, ImageUr, Options.
	 * @return array
	 */
	public function findCultureEvents($cultureEventId = null, $name = null, $from = null, $until = null, $cultureActivityId = null, $paging = null, $includes = array())
	{
		// build the data
		$data = array();
		if($cultureEventId !== null) $data['CultureEventId'] = (string) $cultureEventId;
		if($name !== null) $data['Name'] = (string) $name;
		if($from !== null) $data['From'] = date('c', (int) $from);
		if($until !== null) $data['Until'] = date('c', (int) $until);
		if($cultureActivityId !== null) $data['CultureActivityId'] = (string) $cultureActivityId;
		if($paging !== null) $data['Paging'] = $paging;
		if(!empty($includes))
		{
			foreach($includes as $key => $value) $data['Includes'][$key] = (bool) $value;
		}
		$data = array('CultureEventSearchCriteria' => $data);

		// make the call
		$response = $this->doCall('FindCultureEvents', $data);

		// validate
		if(!isset($response->CultureEvents)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();
		$cultureActivitiesStore = array();
		$hallsStore = array();

		// loop
		foreach($response->CultureEvents->CultureEvent as $row)
		{
			// build item
			$item = self::decodeResponse($row);

			// @todo	something wierd with Ref nzo...

// 			if(isset($row->CultureActivity))
// 			{
// 				// stored
// 				if(isset($row->CultureActivity['Ref']) && isset($cultureActivitiesStore[(string) $row->CultureActivity['Ref']]))
// 				{
// 					$activity = $cultureActivitiesStore[(string) $row->CultureActivity['Ref']];
// 				}
// 				else
// 				{
// 					// build activity
// 					$activity['Id'] = (string) $row->CultureActivity->Id;
// 					$activity['Code'] = (string) $row->CultureActivity->Code;
// 					$activity['Description'] = (string) $row->CultureActivity->Description;

// 					$cultureActivitiesStore[(string) $row->CultureActivity['Id']] = $activity;
// 				}

// 				// add
// 				$item['CultureActivity'] = $activity;
// 			}


			// add
			$return[] = $item;
		}

		// return
		return $return;


	}
}

/**
 * Recreatex Exception class
 *
 * @author	Tijs Verkoyen <php-recreatex@verkoyen.eu>
 */
class RecreatexException extends Exception
{
}
