<?php

/**
 * Recreatex class
 *
 * This source file can be used to communicate with Recreatex (http://www.syx.nl/en/products/recreatex, v1.6.1)
 *
 * The class is documented in the file itself. If you find any bugs help me out and report them. Reporting can be done by sending an email to php-recreatex-bugs[at]verkoyen[dot]eu.
 * If you report a bug, make sure you give me enough information (include your code).
 *
 * Changelog since 1.0.0
 * - Support for 1.6
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
 * @author Tijs Verkoyen <php-recreatex@verkoyen.eu>
 * @version 1.1.0
 * @copyright Copyright (c), Tijs Verkoyen. All rights reserved.
 * @license BSD License
 */
class Recreatex
{
	// internal constant to enable/disable debugging
	const DEBUG = false;

	// URL for the api
	const ENDPOINT = '/webshop.svc';

	// image endpoint URL
	const REST_IMAGE_URL = '/WebShopImageService.svc';

	// document endpoint URL
	const REST_DOCUMENT_URL = '/WebShopDocumentService.svc';

	// soap URL
	const SOAP_URL = 'http://www.recreatex.be/webshop/v1.6/IWebShop';

	// current version
	const VERSION = '1.0.0';

	/**
	 * A cURL instance
	 *
	 * @var resource
	 */
	private $curl;

	/**
	 * The port to use.
	 *
	 * @var int
	 */
	private $port;

	/**
	 * The server to use.
	 *
	 * @var string
	 */
	private $server;

	/**
	 * The service context
	 *
	 * @var array
	 */
	private $serviceContext;

	/**
	 * The timeout
	 *
	 * @var int
	 */
	private $timeOut = 10;

	/**
	 * The user agent
	 *
	 * @var string
	 */
	private $userAgent;

	// class methods
	/**
	 * Default constructor
	 *
	 * @param string[optional] $server 	The server to use.
	 * @param int[optional] $port 		The port whereon the server is operating.
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
	 * @param mixed $input			The value.
	 * @param string $key string	The key.
	 * @param array $data			Some data.
	 */
	private static function arrayToXML(&$input, $key, $data)
	{
		$XML = $data[0];
		$removeNullKeys = (bool) $data[1];
		$sort = (bool) $data[2];

		// skip attributes
		if($key == '@attributes') return;

		if($removeNullKeys && is_null($input)) return;

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
			// boolean
			if(is_bool($input)) $element->appendChild(new DOMText(($input) ? 'true' : 'false'));

			// integer
			elseif(is_int($input)) $element->appendChild(new DOMText($input));

			// floats
			elseif(is_double($input)) $element->appendChild(new DOMText($input));
			elseif(is_float($input)) $element->appendChild(new DOMText($input));

			// a string?
			elseif(is_string($input))
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

			// fallback
			else
			{
				if(self::DEBUG)
				{
					echo 'Unknown type';
					var_dump($input);
					exit();
				}

				$element->appendChild(new DOMText($input));
			}
		}

		// the value is an array
		else
		{
			if(!empty($input) && $sort) ksort($input);

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
			if($isNonNumeric) array_walk($input, array('Recreatex', 'arrayToXML'), array($element, $removeNullKeys, $sort));

			// numeric elements means this a list of items
			else
			{
				// handle the value as an element
				foreach($input as $value)
				{
					if(is_array($value)) array_walk($value, array('Recreatex', 'arrayToXML'), array($element, $removeNullKeys, $sort));
				}
			}
		}
	}

	/**
	 * Build the paging parameter
	 *
	 * @param int $page						The page to retrieve.
	 * @param int $size						The number of items per page.
	 * @param string[optional] $sortOn		The field to sort on.
	 * @param bool[optional] $sortAscending	Should we sort ascending?
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
	 * @param array[optional] $return	Just a placeholder.
	 * @param int[optional] $i			A internal counter.
	 * @return mixed
	 */
	private function decodeResponse($item, $return = null, $i = 0)
	{
		// @later	decode attributes (revalidateBasket)

		$base64Keys = array('Bytes');
		$floatKeys = array('Price', 'Stock', 'Cost', 'Amount', 'IncassoCost', 'Dx', 'Dy', 'X', 'Y', 'UnitPrice');
		$integerKeys = array('AvailableSeats', 'Sequence', 'Available', 'Blocked', 'Locked', 'Option', 'Reserved', 'Quantity');
		$imageKeys = array('Image');
		$fullImageUrlsKeys = array('ImageUri', 'ImageUrl');
		$timestampKeys = array('From', 'Until', 'SalesFrom', 'SalesUntil');
		$arrayKeys = array('Subcategories', 'Blocks', 'Rows', 'Seats', 'BasketItems', 'Items');

		if($item instanceof SimpleXMLElement)
		{
			foreach($item as $key => $value)
			{
				// images
				if(in_array($key, $imageKeys))
				{
					if(isset($value->Bytes) && (string) $value->Bytes != '' && isset($value->ContentType))
					{
						$return[$key]['Bytes'] = (string) $value->Bytes;
						$return[$key]['ContentType'] = (string) $value->ContentType;
					}
					else $return[$key] = null;
				}

				// empty
				elseif(isset($value['nil']) && (string) $value['nil'] === 'true') $return[$key] = null;

				// empty
				elseif(isset($value[0]) && (string) $value == '')
				{
					if(in_array($key, $arrayKeys))
					{
						foreach($value as $row)
						{
							$return[$key][] = self::decodeResponse($row);
						}
					}

					else $return[$key] = self::decodeResponse($value, null, 1);
				}

				else
				{
					// arrays
					if(in_array($key, $arrayKeys))
					{
						foreach($value as $row)
						{
							$return[$key][] = self::decodeResponse($row);
						}
					}

					// base64
					elseif(in_array($key, $base64Keys)) $return[$key] = base64_decode((string) $value);

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
						$return['ImageFullUrl'] = null;
						if((string) $value != '')
						{
							$return['ImageFullUrl'] = $this->getServer();
							if($this->getPort() != 80 || $this->getPort() != 443) $return['ImageFullUrl'] .= ':' . $this->getPort();
							$return['ImageFullUrl'] .= self::REST_IMAGE_URL . '/' . (string) $value;
						}
					}

					// add an extra item with the value converted to a UNIX-timestamp
					if(in_array($key, $timestampKeys))
					{
						$return[$key . 'Timestamp'] = (int) strtotime((string) $value);
					}

				}
			}
		}

		else throw new RecreatexException('invalid item');

		return $return;
	}

	/**
	 * Make the call
	 *
	 * @param string $method					The method to be called.
	 * @param array[optional] $data				The data to pass.
	 * @param bool[optional] $includeContext	Should we include the context, if available.
	 * @param bool[optional] $overruleKey		The method is wrapped, but for several methods this can't be done automatically.
	 * @param bool[optional] $removeNullValues	Should null values be removed from the XML?
	 * @param bool[optional] $sort				Should the passed data be sorted?
	 * @return mixed
	 */
	private function doCall($method, $data = null, $includeContext = true, $overruleKey = null, $removeNullValues = false, $sort = true)
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
		$root->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
		$root->setAttribute('xmlns:xsd', 'http://www.w3.org/2001/XMLSchema');
		$root->setAttribute('xmlns', 'http://www.recreatex.be/webshop/v1.6/');
		$XML->appendChild($root);

		// create body
		$body = $XML->createElement('soap:Body');
		$root->appendChild($body);

		// grab the service context?
		$serviceContext = $this->getServiceContext();

		// should we overrule the root-key?
		if($overruleKey) $realData = array($overruleKey => $data);
		else $realData = array($method => $data);

		// do we have a service context?
		if($includeContext && !empty($serviceContext))
		{
			if(isset($serviceContext['division_id'])) $realData['Context']['DivisionId'] = $serviceContext['division_id'];
			if(isset($serviceContext['language'])) $realData['Context']['Language'] = $serviceContext['language'];
			if(isset($serviceContext['shop_id'])) $realData['Context']['ShopId'] = $serviceContext['shop_id'];
		}

		// SOAP expects the parameters in alphabetical order
		ksort($realData);

		// build XML
		array_walk($realData, array('Recreatex', 'arrayToXML'), array($body, $removeNullValues, $sort));

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
	 * Get the useragent that will be used.
	 * Our version will be prepended to yours.
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
	 * @param string $server
	 */
	public function setServer($server)
	{
		$this->server = (string) $server;
	}

	/**
	 * Set the service context
	 *
	 * @param string[optional] $divisionId	The divisionId, no clue..
	 * @param string[optional] $language	The language to use, I have no idea what the possible languages are.
	 * @param string[optional] $shopId		The id of your shop.
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

// authentication
	/**
	 * Authenticates a user.
	 *
	 * @param string $username	The login for the user.
	 * @param string $password	The password for the user.
	 * @return array
	 */
	public function authenticateUser($username, $password)
	{
		// build the body
		$data['Password'] = (string) $password;
		$data['Username'] = (string) $username;

		// make the call
		$response = $this->doCall('AuthenticateUser', $data, true, 'Credentials');

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
	 * Save a person
	 *
	 * @param string[optional] $id				The unique ID of the person, will be empty while creating a person.
	 * @param string[optional] $code			The unique code for the person.
	 * @param array[optional] $name				The name details for a person. The array should have the keys below:
	 * 												- string First		firstname of the person.
	 * 												- string Middle	middlename of the person.
	 * 												- string Last		lastname of the person.
	 * @param array[optional] $address			The address details of the person. The array should have the keys below:
	 * 												- string Street		The street.
	 * 												- string Number		The housenumber.
	 * 												- string Box		The boxnumber.
	 * 												- string ZipCode	The zip code.
	 * 												- string Town		The town
	 * 												- string Country	The country, use ISO-codes.
	 * @param array[optional] $settings			The settings for the person.
	 * 												- bool SubscribeMailingList		Is the person subscribed on the newsletter?
	 * 												- array Subcategories			An array of subcategories, each item can have the keys below:
	 * 													- array Category
	 * 														- string Code
	 * 														- string Id
	 * 														- string Name
	 * 													- string CategoryId
	 * 													- string Code
	 * 													- string Id
	 * 													- string Name
	 * 												- array PriceGroups				An array of person price groups, each item can have the keys below:
	 * 													- string Id
	 * 													- string Type				Possible values are: PlaceReservations, Ticketing, Entries, Sales, Rental, Wellness
	 * 													- array PriceGroup
	 * 														- string Id
	 * 														- string Name
	 * 														- string Type
	 * 													- string StartDate
	 * 													- string EndDate
	 * 													- string Weekday			Possible values are: EveryDay, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday
	 * 													- string From
	 * 													- string Till
	 * @param string[optional] $email			The emailaddress of the person.
	 * @param string[optional] $birthdate		The birthdate of the person.
	 * @param string[optional] $gender			The gender of the person. Possible values are: male, female, unknown.
	 * @param string[optional] $language		The language of the person, use ISO-codes.
	 * @param string[optional] $picture			The base64-data of the picture.
	 * @param string[optional] $phone			The phone number of the person.
	 * @param string[optional] $cellPhone		The cell phone number of the person.
	 * @param string[optional] $bankAccount		The bankaccount of the person.
	 * @param string[optional] $nationalNumber	The national number of the person.
	 * @param string[optional] $comments		The comments for the person.
	 * @param array[optional] $credential		The credentials of the person.
	 * 												- string Username	The username.
	 * 												- string Password	The password.
	 * @param array[optional] $relations		The relations of the person.
	 * 												- array From
	 * 												- string Id
	 * 												- array To
	 * @param string[optional] $activationId
	 * @param string[optional] $resetPasswordId
	 * @param bool[optional] $activationId
	 * @return array
	 */
	public function savePerson($id = null, $code = null, $name = array(), $address = array(), $settings = array(), $email = null, $birthdate = null, $gender = null, $language = null, $picture = null, $phone = null, $cellPhone = null, $bankAccount = null, $nationalNumber = null, $comments = null, $credential = array(), $relations = array(), $activationId = null, $resetPasswordId = null, $isBlocked = null)
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
			if(isset($settings['Subcategories']))
			{
				foreach($settings['Subcategories'] as $subcategory) $data['Settings']['Subcategories'][] = array('Subcategory' => $subcategory);
			}
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
			foreach($relations as $relation) $data['Relations'][] = $relation;
		}
		if($activationId !== null) $data['ActivationId'] = (string) $activationId;
		if($resetPasswordId !== null) $data['ResetPasswordId'] = (string) $resetPasswordId;
		if($isBlocked !== null) $data['IsBlocked'] = (bool) $isBlocked;

		// make the call
		$response = $this->doCall('SavePerson', $data, true, 'Person');

		// validate
		if(!isset($response->SavePersonResult)) throw new RecreatexException('Invalid response.');

		// decode response
		$return = self::decodeResponse($response->SavePersonResult[0]);

		// validate
		if(isset($return['ValidationResults']['ValidationResult']['Message']))
		{
			throw new RecreatexException($return['ValidationResults']['ValidationResult']['Message']);
		}

		// return
		return $return['Person'];
	}

	/**
	 * Save a person
	 *
	 * @param array $object	An existing person.
	 * @return array
	 */
	public function savePersonByObject($object)
	{
		// make the call
		$response = $this->doCall('SavePerson', $object, true, 'Person', true);

		// validate
		if(!isset($response->SavePersonResult)) throw new RecreatexException('Invalid response.');

		// decode response
		$return = self::decodeResponse($response->SavePersonResult[0]);

		// validate
		if(isset($return['ValidationResults']['ValidationResult']['Message']))
		{
			throw new RecreatexException($return['ValidationResults']['ValidationResult']['Message']);
		}

		// return
		return $return['Person'];
	}

	/**
	 * Find price groups
	 *
	 * @param string[optional] $id
	 * @param string[optional] $type
	 * @return array
	 */
	public function findPriceGroups($id = null, $type = null)
	{
		// build the data
		$data = array();
		if($id !== null) $data['Id'] = (string) $id;
		if($type !== null) $data['Type'] = (string) $type;

		$overruleKey = null;
		if(!empty($data)) $overruleKey = 'PriceGroupSearchCriteria';

		// make the call
		$response = $this->doCall('FindPriceGroups', $data, true, $overruleKey);

		// validate
		if(!isset($response->PriceGroups)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->PriceGroups->PriceGroup as $row) $return[] = self::decodeResponse($row);

		// return
		return $return;
	}

	/**
	 * Save person price groups
	 *
	 * @param string[optional] $id			The ID of the person.
	 * @param string[optional] $username	The username of the person.
	 * @param string[optional] $email		The email of the person.
	 * @param array $priceGroups			The priceGroups to store.
	 * @return array
	 */
	public function savePersonPriceGroups($id = null, $username = null, $email = null, array $priceGroups)
	{
		$data = array();
		if($id !== null) $data['Id'] = (string) $id;
		if($username !== null) $data['UserName'] = (string) $username;
		if($email !== null) $data['Email'] = (string) $email;
		$data['Settings']['PriceGroups'] = array();
		foreach($priceGroups as $priceGroup)
		{
			$data['Settings']['PriceGroups'][] = array('PriceGroup' => $priceGroup);
		}

		// make the call
		$response = $this->doCall('SavePersonPriceGroups', $data, true, 'Person');

		// validate
		if(!isset($response->SavePersonResult)) throw new RecreatexException('Invalid response.');

		// validate
		if(isset($response->SavePersonResult->ValidationResults->ValidationResult->Message))
		{
			throw new RecreatexException((string) $response->SavePersonResult->ValidationResults->ValidationResult->Message);
		}

		// return
		return self::decodeResponse($response->SavePersonResult->Person[0]);
	}

	/**
	 * List the categories
	 *
	 * @return array
	 */
	public function listCategories()
	{
		// make the call
		$response = $this->doCall('ListCategories');

		// validate
		if(!isset($response->Categories)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->Categories->Category as $row) $return[] = self::decodeResponse($row);

		// return
		return $return;
	}

	/**
	 * Save person subcategories
	 *
	 * @param string[optional] $id			The id of the person.
	 * @param string[optional] $username	The username of the person.
	 * @param string[optional] $email		The email of the person.
	 * @param array $subcategories			The subcategories that need to be stored.
	 * @return array
	 */
	public function savePersonSubcategories($id = null, $username = null, $email = null, array $subcategories)
	{
		$data = array();
		if($id !== null) $data['Id'] = (string) $id;
		if($username !== null) $data['UserName'] = (string) $username;
		if($email !== null) $data['Email'] = (string) $email;
		$data['Settings']['Subcategories'] = array();
		foreach($subcategories as $category)
		{
			$data['Settings']['Subcategories'][] = array('Subcategory' => $category);
		}

		// make the call
		$response = $this->doCall('SavePersonSubcategories', $data, true, 'Person');

		// validate
		if(!isset($response->SavePersonResult)) throw new RecreatexException('Invalid response.');

		// return
		return self::decodeResponse($response->SavePersonResult->Person[0]);
	}

	/**
	 * Retrieve the password for a user
	 *
	 * @param string $username		The username
	 * @return array
	 */
	public function forgotPassword($username)
	{
		// make the call
		$response = $this->doCall('ForgotPassword', (string) $username, true, 'Login');

		// validate
		if(!isset($response->ForgotPasswordResult)) throw new RecreatexException('Invalid response.');

		// decode response
		$return = self::decodeResponse($response->ForgotPasswordResult[0]);

		// return
		return $return;
	}

	/**
	 * Find a person
	 *
	 * @param string[optional] $id					The unique ID of the persion you want.
	 * @param string[optional] $username			The username of the user you want.
	 * @param string[optional] $email
	 * @param string[optional] $activationId
	 * @param string[optional] $resetPasswordId
	 * @param string[optional] $nationalNumber
	 * @param bool[optional] $isBlocked
	 * @param array[optional] $includes
	 * 													- bool Categories
	 * 													- bool PriceGroups
	 * @param array[optional] $paging				Paging criteria, see Recreatex::buildPagingParameter().
	 * @return array
	 */
	public function findPerson($id = null, $username = null, $email = null, $activationId = null, $resetPasswordId = null, $nationalNumber = null, $isBlocked = null, array $includes = array('Categories' => true, 'PriceGroups' => true), $paging = null)
	{
		// build body
		$data = array();
		if($id !== null) $data['Id'] = (string) $id;
		if($username !== null) $data['UserName'] = (string) $username;
		if($email !== null) $data['Email'] = (string) $email;
		if($activationId !== null) $data['ActivationId'] = (string) $activationId;
		if($resetPasswordId !== null) $data['ResetPasswordId'] = (string) $resetPasswordId;
		if($nationalNumber !== null) $data['NationalNumber'] = (string) $nationalNumber;
		if($isBlocked !== null) $data['IsBlocked'] = (bool) $isBlocked;
		if(!empty($includes))
		{
			foreach($includes as $key => $value) $data['Includes'][$key] = (bool) $value;
		}
		if($paging != null) $data['Paging'] = $paging;

		// make the call
		$response = $this->doCall('FindPerson', $data, true, 'Criteria');

		// validate
		if(!isset($response->FindPersonResult)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->FindPersonResult->Person as $row) $return[] = self::decodeResponse($row);

		// return
		return $return;
	}

// expositions
	/**
	 * Find expositions.
	 *
	 * @param string[optional] $expositionId		If provided, ID of the specififiek exposition to return.
	 * @param string[optional] $namePattern			If provided, only items matching the pattern will be returned.
	 * @param int[optional] $from					If provided only items that start after this date will be returned.
	 * @param int[optional] $until					If provided only items that start before this date will be returned.
	 * @param string[optional] $expositionTypeId	If provided only items from this type will be returned.
	 * @param string[optional] $audienceId			If provided only items for this audience will be returned.
	 * @param array[optional] $includes				Key-value-array with the properties to include, possible keys are:
	 * 													- bool ImageUrl
	 * 													- bool Image
	 * @return array
	 */
	public function findExpositions($expositionId = null, $namePattern = null, $from = null, $until = null, $expositionTypeId = null, $audienceId = null, array $includes = array())
	{
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

		// make the call
		$response = $this->doCall('FindExpositions', $data, true, 'ExpositionSearchCriteria');

		// validate
		if(!isset($response->Expositions)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->Expositions->Exposition as $row) $return[] =  self::decodeResponse($row);

		// return
		return $return;
	}

	/**
	 * List expositions periods
	 *
	 * @param string[optional] $expositionId
	 * @param string[optional] $from
	 * @param string[optional] $until
	 * @param array[optional] $paging				The paging criteria, see Recreatex::buildPagingParameter().
	 * @return array
	 */
	public function listExpositionPeriods($expositionId = null, $from = null, $until = null, $paging = null)
	{
		$data = array();
		if($expositionId !== null) $data['ExpositionId'] = (string) $expositionId;
		if($from !== null) $data['From'] = (string) $from;
		if($until !== null) $data['Until'] = (string) $until;
		if(!empty($paging)) $data['Paging'] = $paging;

		// make the call
		$response = $this->doCall('ListExpositionPeriods', $data);

		// validate
		if(!isset($response->ExpositionPeriods)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->ExpositionPeriods->ExpositionPeriod as $row) $return[] = self::decodeResponse($row);

		// return
		return $return;
	}

	/**
	 * Find exposition types
	 *
	 * @param string[optional] $audienceId
	 * @param string[optional] $expositionTypeId
	 * @param string[optional] $namePattern
	 * @param array[optional] $includes
	 * @param array[optional] $paging				The paging criteria, see Recreatex::buildPagingParameter().
	 * @return array
	 */
	public function findExpositionTypes($audienceId = null, $expositionTypeId = null, $namePattern = null, array $includes = array('ImageUrl' => true, 'Image' => false), $paging = null)
	{
		// build the data
		$data = array();
		if($audienceId !== null) $data['AudienceId'] = (string) $audienceId;
		if($expositionTypeId !== null) $data['ExpositionTypeId'] = (string) $expositionTypeId;
		if($namePattern !== null) $data['NamePattern'] = (string) $namePattern;
		if(!empty($includes))
		{
			foreach($includes as $key => $value) $data['Includes'][$key] = (bool) $value;
		}
		if(!empty($paging)) $data['Paging'] = $paging;

		$overruleKey = null;
		if(!empty($data)) $overruleKey = 'ExpositionTypeSearchCriteria';

		// make the call
		$response = $this->doCall('FindExpositionTypes', $data, true, $overruleKey);

		// validate
		if(!isset($response->ExpositionTypes)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->ExpositionTypes->ExpositionType as $row) $return[] = self::decodeResponse($row);

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
		foreach($response->ExpositionTypes->ExpositionType as $row) $return[] = self::decodeResponse($row);

		// return
		return $return;
	}

	/**
	 * List audiences
	 *
	 * @return array
	 */
	public function listAudiences()
	{
		// make the call
		$response = $this->doCall('ListAudiences');

		// validate
		if(!isset($response->Audiences)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->Audiences->Audience as $row) $return[] = self::decodeResponse($row);

		// return
		return $return;
	}

// activities
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
		foreach($response->ActivityTypes->ActivityType as $row) $return[] = self::decodeResponse($row);

		// return
		return $return;
	}

	/**
	 * Find activities
	 *
	 * @param string[optional] $id
	 * @param string[optional] $typeId
	 * @param int[optional] $ageFrom
	 * @param int[optional $ageTo
	 * @param string[optional $keyword
	 * @param string[optional $periodFrom
	 * @param string[optional $periodUntil
	 * @param string[optional $personId
	 * @param array[optional] $includes
	 * 												- bool DayParts
	 * 												- bool Image
	 * 												- bool ImageUrl
	 * 												- bool Options
	 * 												- bool Price
	 * 												- bool Type
	 * @param array[optional] $paging			Paging criteria, see Recreatex::buildPagingParameter().
	 */
	public function findActivities($id = null, $typeId = null, $ageFrom = null, $ageTo = null, $keyword = null, $periodFrom = null, $periodUntil = null, $personId = null, array $includes = array(), $paging = null)
	{
		// build body
		$data = array();
		if($id !== null) $data['ActivityId'] = (string) $id;
		if($typeId !== null) $data['ActivityTypeId'] = (string) $typeId;
		if($ageFrom !== null) $data['AgeFrom'] = (int) $ageFrom;
		if($ageTo !== null) $data['AgeTo'] = (int) $ageTo;
		if($keyword !== null) $data['Keyword'] = (string) $keyword;
		if($periodFrom !== null && $periodUntil !== null)
		{
			$data['Period']['From'] = (string) $periodFrom;
			$data['Period']['Until'] = (string) $periodUntil;
		}
		if($personId !== null) $data['PersonId'] = (string) $personId;
		if(!empty($includes))
		{
			foreach($includes as $key => $value) $data['Includes'][$key] = (bool) $value;
		}
		if($paging != null) $data['Paging'] = $paging;

		$overruleKey = null;
		if(!empty($data)) $overruleKey = 'ActivitySearchCriteria';

		// make the call
		$response = $this->doCall('FindActivities', $data, true, $overruleKey);

		// validate
		if(!isset($response->Activities)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->Activities->Activity as $row) $return[] = self::decodeResponse($row);

		// return
		return $return;
	}

// articles
	/**
	 * Find articles.
	 *
	 * @param string[optional] $id					The id of the article.
	 * @param string[optional] $groupId				The id of the group wherin the article is located.
	 * @param string[optional] $namePattern			If provided only articles that match the pattern will be returned.
	 * @param string[optional] $buyerId				If provided only articles that are relevant for this user will be returned.
	 * @param string[optional] $stockLocationId		The id of the stocklocation
	 * @param string[optional] $articleType			The type of articles, possible values are: Sale, Rental, All.
	 * @param string[optional] $articleCategoryId
	 * @param string[bool] $includeDetail
	 * @param array[optional] $includes				Key-value-array with the properties to include, possible keys are:
	 * 													- bool Price
	 * 													- bool ImageUrl
	 * 													- bool Image
	 * 													- bool Group
	 * @param array[optional] $paging				The paging criteria, see Recreatex::buildPagingParameter().
	 * @return array
	 */
	public function findArticles($id = null, $groupId = null, $namePattern = null, $buyerId = null, $stockLocationId = null, $articleType = null, $articleCategoryId = null, $includeDetail = null, array $includes = array('Price' => true, 'ImageUrl' => true, 'Image' => false, 'Group' => false), $paging = null)
	{
		// build the data
		$data = array();
		if($groupId !== null) $data['ArticleGroupId'] = (string) $groupId;
		if($id !== null) $data['ArticleId'] = (string) $id;
		if($articleCategoryId !== null) $data['ArticleCategoryId'] = (string) $articleCategoryId;
		if($namePattern !== null) $data['NamePattern'] = (string) $namePattern;
		if($buyerId !== null) $data['BuyerId'] = (string) $buyerId;
		if($stockLocationId !== null) $data['StockLocationId'] = (string) $stockLocationId;
		if($articleType !== null) $data['ArticleTypes'] = (string) $articleType;
		if($includeDetail !== null) $data['IncludeDetail'] = (bool) $includeDetail;
		if(!empty($includes))
		{
			foreach($includes as $key => $value) $data['Includes'][$key] = (bool) $value;
		}
		if(!empty($paging)) $data['Paging'] = $paging;

		$overruleKey = null;
		if(!empty($data)) $overruleKey = 'ArticleSearchCriteria';

		// make the call
		$response = $this->doCall('FindArticles', $data, true, $overruleKey);

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
	 * Find article categories
	 *
	 * @param string[optional] $id					The id of the category.
	 * @param string[optional] $namePattern			If provided only category that match the pattern will be returned.
	 * @param array[optional] $paging				The paging criteria, see Recreatex::buildPagingParameter().
	 * @return array
	 */
	public function findArticleCategories($id = null, $namePattern = null, $paging = null)
	{
		// build the data
		$data = array();
		$data['ArticleCategoryId'] = $id;
		$data['NamePattern'] = $namePattern;
		if(!empty($paging)) $data['Paging'] = $paging;

		// make the call
		$response = $this->doCall('FindArticleCategories', $data, true, 'ArticleCategorySearchCriteria');

		// validate
		if(!isset($response->ArticleCategories)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->ArticleCategories->ArticleGroup as $row) $return[] = self::decodeResponse($row);

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
		$data['ArticleTypes'] = (string) $articleType;
		$data['IncludeImage'] = (bool) $includeImage;
		$data['IncludeImageUrl'] = (bool) $includeImageUrl;

		// make the call
		$response = $this->doCall('ListArticleGroups', $data, true, 'ArticleGroupSearchCriteria');

		// validate
		if(!isset($response->ArticleGroups)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->ArticleGroups->ArticleGroup as $row)
		{
			$return[] = self::decodeResponse($row);
		}

		// return
		return $return;
	}

// culture events
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
		foreach($response->CultureActivities->CultureActivity as $row) $return[] = self::decodeResponse($row);

		// return
		return $return;
	}

	/**
	 * Not implemented
	 */
	public function listCultureEventCategories()
	{
		throw new RecreatexException('Not implemented');
	}

	/**
	 * Find culture events.
	 *
	 * @param string[optional] $cultureEventId		If provided only this item will be returned.
	 * @param string[optional] $name				If provided only items matching the pattern will be returned.
	 * @param int[optional] $from					If provided only items that start after this date will be returned.
	 * @param int[optional] $until					If provided only items that start before this date will be returned.
	 * @param string[optional] $cultureActivityId	If provided only items within this activityid will be returned.
	 * @param array[optional] $includes				Key-value-array with the properties to include, possible keys are:
	 * 													- bool Image
	 * 													- bool ImageUri
	 * 													- bool Options
	 * @param array[optional] $paging				The paging criteria, see Recreatex::buildPagingParameter().
	 * @return array
	 */
	public function findCultureEvents($eventId = null, $activityId = null, $name = null, $from = null, $until = null, $includes = array('Image' => true, 'ImageUri' => true, 'Options' => true), $paging = null)
	{
		// build the data
		$data = array();
		if($eventId !== null) $data['CultureEventId'] = (string) $eventId;
		if($name !== null) $data['Name'] = (string) $name;
		if($from !== null) $data['From'] = date('c', (int) $from);
		if($until !== null) $data['Until'] = date('c', (int) $until);
		if($activityId !== null) $data['CultureActivityId'] = (string) $activityId;
		if($paging !== null) $data['Paging'] = $paging;
		if(!empty($includes))
		{
			foreach($includes as $key => $value) $data['Includes'][$key] = (bool) $value;
		}

		// make the call
		$response = $this->doCall('FindCultureEvents', $data, true, 'CultureEventSearchCriteria');

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

			// @todo something wierd with Ref...
			// if(isset($row->CultureActivity))
			// {
			// // stored
			// if(isset($row->CultureActivity['Ref']) && isset($cultureActivitiesStore[(string) $row->CultureActivity['Ref']]))
			// {
			// $activity = $cultureActivitiesStore[(string) $row->CultureActivity['Ref']];
			// }
			// else
			// {
			// // build activity
			// $activity['Id'] = (string) $row->CultureActivity->Id;
			// $activity['Code'] = (string) $row->CultureActivity->Code;
			// $activity['Description'] = (string) $row->CultureActivity->Description;
			// $cultureActivitiesStore[(string) $row->CultureActivity['Id']] = $activity;
			// }
			// // add
			// $item['CultureActivity'] = $activity;
			// }

			// add
			$return[] = $item;
		}

		// return
		return $return;
	}

	/**
	 * List the halls
	 *
	 * @return array
	 */
	public function listHalls()
	{
		// make the call
		$response = $this->doCall('ListHalls');

		// validate
		if(!isset($response->Halls)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->Halls->Hall as $row) $return[] = self::decodeResponse($row);

		// return
		return $return;
	}

	/**
	 * Get the hall seating
	 *
	 * @param string $id	The id of the hall.
	 * @return array
	 */
	public function getHallSeating($id)
	{
		// make the call
		$response = $this->doCall('GetHallSeating', (string) $id, true, 'HallId');

		// validate
		if(!isset($response->Hall)) throw new RecreatexException('Invalid response.');

		// return
		return self::decodeResponse($response->Hall[0]);
	}

	/**
	 * Get seat allocations
	 *
	 * @param string $id	The id of the hall.
	 * @return array
	 */
	public function getSeatAllocations($id)
	{
		$data['HallId'] = (string) $id;

		// make the call
		$response = $this->doCall('GetSeatAllocations', $data);

		// validate
		if(!isset($response->Overview)) throw new RecreatexException('Invalid response.');

		// return
		return self::decodeResponse($response->Overview[0]);
	}

	/**
	 * Find culture reseverations
	 *
	 * @param string $personId
	 * @param string[optional] $cultureEventId
	 * @param string[optional] $cultureEventReservationId
	 * @param string[optional] $from
	 * @param string[optional] $until
	 * @param array[optional] $paging						Paging criteria, see Recreatex::buildPagingParameter().
	 * @return array
	 */
	public function findCultureReservations($personId, $cultureEventId = null, $cultureEventReservationId = null, $from = null, $until = null, $paging = null)
	{
		// build the data
		$data = array();
		$data['PersonId'] = (string) $personId;
		if($cultureEventId !== null) $data['CultureEventId'] = (string) $cultureEventId;
		if($cultureEventReservationId !== null) $data['CultureEventReservationId'] = (string) $cultureEventReservationId;
		if($from !== null) $data['From'] = date('c', (int) $from);
		if($until !== null) $data['Until'] = date('c', (int) $until);
		if($paging != null) $data['Paging'] = $paging;

		$overruleKey = null;
		if(!empty($data)) $overruleKey = 'CultureReservationSearchCriteria';

		// make the call
		$response = $this->doCall('FindCultureReservations', $data, true, $overruleKey);

		// validate
		if(!isset($response->CultureReservations)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->CultureReservations->CultureReservation as $row) $return[] = self::decodeResponse($row);

		// return
		return $return;
	}

// basket
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
		foreach($response->PaymentMethods->BasketPaymentMethod as $row) $return[] = self::decodeResponse($row);

		// return
		return $return;
	}

	/**
	 * Validate the basket
	 *
	 * @param string $customerId	ID of the buyer.
	 * @param array $items			The items that will be validated as an array, each item can have the keys below:
	 * 									- ...
	 * @param array $payments		The payment methods used.
	 * 									- float Amount				The amount that was payed.
	 * 									- string Currency			The curreny used to pay.
	 * 									- string PaymentMethodId	The ID of the payment method.
	 * @param float $price			Total of the order.
	 * @return array
	 */
	public function validateBasket($customerId, array $items, array $payments, $price)
	{
		// build body
		$data = array();
		$data['CustomerId'] = (string) $customerId;
		$data['Price'] = (float) $price;

		// add items
		foreach($items as $row) $data['Items'][] = array('BasketItem' => $row);

		if(!empty($payments))
		{
			foreach($payments as $row) $data['Payments'][] = array('BasketPayment' => $row);
		}

		// make the call
		$response = $this->doCall('ValidateBasket', $data, true, 'Basket');

		// validate
		if(!isset($response->ValidateBasketResult)) throw new RecreatexException('Invalid response.');

		// return
		return self::decodeResponse($response->ValidateBasketResult[0]);
	}

	/**
	 * Not implemented
	 *
	 * @throws RecreatexException
	 */
	public function validateBasketItem()
	{
		throw new RecreatexException('Not implemented');
	}

	/**
	 * Checkout the basket
	 *
	 * @param string $customerId	The id of the buyer.
	 * @param array $items			The items that will be validated as an array, each item can have the keys below:
	 * 									- ?
	 * @param array $payments		The used payment methods.
	 * 									- float Amount				The amount that was payed.
	 * 									- string Currency			The curreny used to pay.
	 * 									- string PaymentMethodId	The ID of the payment method.
	 * @param float $price			Total of the order.
	 * @return array
	 */
	public function checkoutBasket($customerId, array $items, array $payments, $price)
	{
		// build body
		$data = array();
		$data['CustomerId'] = (string) $customerId;
		$data['Price'] = (float) $price;

		// add items
		foreach($items as $row) $data['BasketItems'][] = array('BasketItem' => $row);

		if(!empty($payments))
		{
			foreach($payments as $row) $data['Payments'][] = array('BasketPayment' => $row);
		}

		// make the call
		$response = $this->doCall('CheckoutBasket', $data, true, 'Basket');

		// validate
		if(!isset($response->CheckoutBasketResult)) throw new RecreatexException('Invalid response.');

		// return
		return self::decodeResponse($response->CheckoutBasketResult[0]);
	}

	/**
	 * Lock the basket items.
	 *
	 * @param array $basket		Items that will be locked, each item can have the keys below:
	 * 								- @attributes
	 * 								- Quantity
	 * 								- Article
	 * 							@remark; make sure the keys are in the correct order.
	 * @return array
	 */
	public function lockBasketItems(array $basket)
	{
		// build body
		$data = array();
		foreach($basket as $row) $data[] = $row;

		// make the call
		$response = $this->doCall('LockBasketItems', $data, true, 'BasketItems', false, false);

		// validate
		if(!isset($response->LockBasketResult)) throw new RecreatexException('Invalid response.');

		$return = self::decodeResponse($response->LockBasketResult[0]);

		// validate
		if(isset($return['ValidationResults']['ValidationResult']['Message']))
		{
			throw new RecreatexException($return['ValidationResults']['ValidationResult']['Message']);
		}

		// return
		return $return;
	}

	/**
	 * Lock the basket items.
	 *
	 * @param array $lockTickets	Locks that will be cleared, each item can have the keys below:
	 * 									- string ExpirationTime		The expire time.
	 * 									- string Id					The id of the lock.
	 * @return bool
	 */
	public function unlockBasketItems(array $lockTickets)
	{
		// build body
		$data = array();
		foreach($lockTickets as $row) $data[] = $row;

		// make the call
		$response = $this->doCall('UnlockBasketItems', $data, true, 'LockTickets');

		// return
		return true;
	}

	/**
	 * Recalculate the basket
	 *
	 * @param array $basket
	 * @return array
	 */
	public function reCalculateBasket(array $basket)
	{
		// build body
		$data = array();
		foreach($basket as $row) $data['Items'][] = $row;

		// make the call
		$response = $this->doCall('ReCalculateBasket', $data, true, 'Basket', false, false);

		// validate
		if(!isset($response->Basket)) throw new RecreatexException('Invalid response.');

		// return
		return self::decodeResponse($response->Basket[0]);
	}

	/**
	 * Lock the basket items.
	 *
	 * @param array $lockTickets	Locks that will be cleared, each item can have the keys below:
	 * 									- string Id					The id of the lock.
	 * @return array
	 */
	public function extendLockPeriod(array $lockTickets)
	{
		// build body
		$data = array();
		foreach($lockTickets as $row) $data[] = $row;

		// make the call
		$response = $this->doCall('UnlockBasketItems', $data, true, 'LockTickets');

		// return
		return true;
	}
}

/**
 * Recreatex Exception class
 *
 * @author Tijs Verkoyen <php-recreatex@verkoyen.eu>
 */
class RecreatexException extends Exception
{}