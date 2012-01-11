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
	 * Build the XML we will send.
	 *
	 * @param mixed $data
	 * @param string[optional] $xml
	 * @return string
	 */
	public static function buildXML($data, $xml = '')
	{
		// if it isn't an array it is just a single key
		if(!is_array($data)) return '<' . (string) $data . ' />';

		// loop all keys
		foreach($data as $key => $value)
		{
			// no value;
			if(empty($value)) $xml .= '<' . $key . ' />';

			else
			{
				// start
				$xml .= '<' . $key . '>';

				// if it is an array we should call ourself
				if(is_array($value)) $xml = self::buildXML($value, $xml);

				// a boolean
				elseif(is_bool($value))
				{
					if($value) $xml .= 'true';
					else $xml .= 'false';
				}

				elseif(is_int($value)) $xml .= (string) $value;


				// a string?
				elseif(is_string($value)) $xml .= $value;

				else
				{
					Spoon::dump('GODVER');
				}

				// end
				$xml .= '</' . $key . '>';
			}
		}

		// return
		return $xml;
	}

	/**
	 * Make the call
	 *
	 * @param string $method					The method to be called.
	 * @param array[optional] $parameters		The parameters.
	 * @return mixed
	 */
	private function doCall($method, $data = '', $includeContext = true)
	{
		/**
		 * I know there is an PHP SOAP extension, but it can't handle requests with multiple message parts.
		 * So this is my own SOAP-client implementation.
		 */
		// create body
		$body = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
		$body .= '<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns="http://www.recreatex.be/webshop/v1.1/">' . "\n";
		$body .= '	<soap:Body>' . "\n";

		// grab the service context?
		$serviceContext = $this->getServiceContext();

		// do we have a service context?
		if($includeContext && !empty($serviceContext))
		{
			$body .= '		<Context>' . "\n";

			// add the service context fields
			if(isset($serviceContext['division_id'])) $body .= '			<DivisionId>' . $serviceContext['division_id'] . '</DivisionId>' . "\n";
			if(isset($serviceContext['language'])) $body .= '			<Language>' . $serviceContext['language'] . '</Language>' . "\n";
			if(isset($serviceContext['shop_id'])) $body .= '			<ShopId>' . $serviceContext['shop_id'] . '</ShopId>' . "\n";

			$body .= '		</Context>' . "\n";
		}

		// build body
		if(trim($data) != '')
		{
			$body .= '		' . trim($data) . "\n";
		}

		// end body
		$body .= '	</soap:Body>' . "\n";
		$body .= '</soap:Envelope>' . "\n";

		// build headers
		$headers = array(
			'Content-Type: text/xml; charset=utf-8',
			'Content-Length: ' . strlen($body),
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
		$response = $this->doCall('IsAvailable', self::buildXML('IsAvailable'), false);

		// validate
		if(!isset($response->IsAvailableResult)) throw new RecreatexException('Invalid response.');

		// return
		return (bool) $response->IsAvailableResult;
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
		$response = $this->doCall('AuthenticateUser', self::buildXML($data));

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
	 * 			- string first		firstname of the person.
	 * 			- string middle	middlename of the person.
	 * 			- string last		lastname of the person.
	 * @param array[optional] $address				The address details of the person. The array should have the keys below:
	 * 			- string street	the street.
	 * 			- string number	the housenumber.
	 * 			- string box		the boxnumber.
	 * 			- string zip_code	the zip code.
	 * 			- string town		the town
	 * 			- string country	the country, use ISO-codes.
	 * @param array[optional] $settings				Extra settings for the person.
	 * 			- bool subscribe_mailing_list	is the person subscribed on the newsletter?
	 * @param string[optional] $email				The emailaddress of the person.
	 * @param string[optional] $birthdate			The birthdate of the person.
	 * @param string[optional] $gender				The gender of the person. Possible values are: male, female, unknown.
	 * @param string[optional] $language			The language of the person, use ISO-codes.
	 * @param string[optional] $picture				The data of the picture.
	 * @param string[optional] $phone				The phone number of the person.
	 * @param string[optional] $cellPhone			The cell phone number of the person.
	 * @param string[optional] $bankAccount			The bankaccount of the person.
	 * @param string[optional] $nationalNumber		The national number of the person.
	 * @param string[optional] $comments			The comments for the person.
	 * @param array[optiona] $credentials			The credentials of the person.
	 * 			- login				the login.
	 * 			- password			the password.
	 * @param array[optional] $relations			The relations of the person.
	 * @return array
	 */
	public function savePerson($id = null, $code = null, $name = array(), $address = array(), $settings = array(), $email = null, $birthdate = null, $gender = 2, $language = null, $picture = null, $phone = null, $cellPhone = null, $bankAccount = null, $nationalNumber = null, $comments = null, $credentials = array(), $relations = array())
	{
		// build the body
		$data = array();
		if($id !== null) $data['Id'] = (string) $id;
		if($code !== null) $data['Person']['Code'] = (string) $code;
		if(!empty($name))
		{
			if(isset($name['First'])) $data['PersonName']['First'] = (string) $name['First'];
			if(isset($name['Middle'])) $data['PersonName']['First'] = (string) $name['Middle'];
			if(isset($name['Last'])) $data['PersonName']['First'] = (string) $name['Last'];
		}
		if(!empty($address))
		{
			if(isset($name['Street'])) $data['Address']['Street'] = (string) $address['Street'];
			if(isset($name['Number'])) $data['Address']['Number'] = (string) $address['Number'];
			if(isset($name['Box'])) $data['Address']['Box'] = (string) $address['Box'];
			if(isset($name['ZipCode'])) $data['Address']['ZipCode'] = (string) $address['ZipCode'];
			if(isset($name['Town'])) $data['Address']['Town'] = (string) $address['Town'];
			if(isset($name['Country'])) $data['Address']['Country'] = (string) $address['Country'];
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
		if(!empty($credentials))
		{
			if(isset($credentials['Login'])) $data['Credentials']['Login'] = (string) $credentials['Login'];
			if(isset($credentials['Password'])) $data['Credentials']['Password'] = (string) $credentials['Password'];
		}
		if(!empty($relations))
		{
			// not used
		}

		Spoon::dump(self::buildXML(array('Person' => $data)), false);

		// make the call
		$response = $this->doCall('SavePerson', self::buildXML(array('Person' => $data)));

		// validate
		if(!isset($response->SavePersonResult->Person)) throw new RecreatexException('Invalid response.');
		if(!isset($response->SavePersonResult->ValidationResults->ValidationResult)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		$return['Result']['IsValid'] = (bool) ((string) $response->SavePersonResult->ValidationResults->ValidationResult->IsValid == 'true');
		$return['Result']['Message'] = (string) $response->SavePersonResult->ValidationResults->ValidationResult->Message;
		$return['Result']['BrokenRuleName'] = (string) $response->SavePersonResult->ValidationResults->ValidationResult->brokenRuleName;

		Spoon::dump($response, false);
		Spoon::dump($return);
	}

	/**
	 * Find a person
	 *
	 * @param string[optional] $id			The unique ID of the persion you want.
	 * @param string[optional] $username	The username of the user you want.
	 * @param array[optional] $paging		The paging criteria, see Recreatex::buildPagingParameter().
	 * @return array
	 */
	public function findPerson($id = null, $username = null, $paging = null)
	{
		// build body
		$data = array();
		if($id !== null) $data['FindPersonsCriteria']['Id'] = (string) $id;
		if($username !== null) $data['Username'] = (string) $username;
		if($paging != null) $data['FindPersonsCriteria']['Paging'] = $paging;

		// make the call
		$response = $this->doCall('FindPerson', self::buildXML($data));

		// validate
		if(!isset($response->FindPersonResult->Person)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->FindPersonResult->Person as $row)
		{
			// build item
			$item = array();
			$item['Id'] = (string) $row->Id;
			$item['Code'] = ((string) $row->Code == '') ? null : (string) $row->Code;
			$item['Name'] = null;

			if(!isset($row->Name['nil']))
			{
				// init var
				$name = null;

				// build
				$name['First'] = (!isset($row->Name->First['nil'])) ? (string) $row->Name->First : null;
				$name['Last'] = (!isset($row->Name->Last['nil'])) ? (string) $row->Name->Last : null;
				$name['Middle'] = (!isset($row->Name->Middle['nil'])) ? (string) $row->Name->Middle : null;

				// add
				$item['Name'] = $name;
			}
			$item['Address'] = null;
			if(!isset($row->Address['nil']))
			{
				// init var
				$address = null;

				// build
				$address['Box'] = (!isset($row->Address->Box['nil'])) ? (string) $row->Address->Box : null;
				$address['Country'] = (!isset($row->Address->Country['nil'])) ? (string) $row->Address->Country : null;
				$address['Number'] = (!isset($row->Address->Number['nil'])) ? (string) $row->Address->Number : null;
				$address['Street'] = (!isset($row->Address->Street['nil'])) ? (string) $row->Address->Street : null;
				$address['Town'] = (!isset($row->Address->Town['nil'])) ? (string) $row->Address->Town : null;
				$address['ZipCode'] = (!isset($row->Address->ZipCode['nil'])) ? (string) $row->Address->ZipCode : null;

				// add
				$item['Address'] = $address;
			}

			$item['Settings'] = null;
			if(!isset($row->Settings['nil']))
			{
				// init var
				$settings = null;

				// build
				$settings['Subcategories'] = null;

				// @todo
				if(!empty($row->Settings->Subcategories)) Spoon::dump($row->Settings->Subcategories);

				$settings['SubscribeMailingList'] = (bool) ((string) $row->Settings->SubscribeMailingList == 'true');

				// add
				$item['Settings'] = $settings;
			}
			$item['Email'] = ((string) $row->Email == '') ? null : (string) $row->Email;
			$item['BirthDate'] = (string) $row->BirthDate;
			$item['Gender'] = (string) $row->Gender;
			$item['Language'] = ((string) $row->Language == '') ? null : (string) $row->Language;
			$item['Picture'] = ((string) $row->Picture == '') ? null : (string) $row->Picture;
			$item['Phone'] = ((string) $row->Phone == '') ? null : (string) $row->Phone;
			$item['CellPhone'] = ((string) $row->CellPhone == '') ? null : (string) $row->CellPhone;
			$item['BankAccount'] = ((string) $row->BankAccount == '') ? null : (string) $row->BankAccount;
			$item['NationalNumber'] = ((string) $row->NationalNumber == '') ? null : (string) $row->NationalNumber;
			$item['Comments'] = ((string) $row->Comments == '') ? null : (string) $row->Comments;

			$item['Credential'] = null;
			if(!isset($row->Credential['nil']))
			{
				// init var
				$credential = null;

				// build
				$credential['Login'] = (!isset($row->Credential->Login['nil'])) ? (string) $row->Credential->Login : null;
				$credential['Password'] = (!isset($row->Credential->Password['nil'])) ? (string) $row->Credential->Password : null;

				// add
				$item['Credential'] = $credential;
			}

			$item['Relations'] = null;
			if(!isset($row->Relation['nil']))
			{
				// init var
				$relations = null;

				// @todo
				if(!empty($row->Relation)) Spoon::dump($row->Settings->Relation);

				// add
				$item['Relations'] = $relations;
			}

			// add
			$return[] = $item;
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
		if(!isset($response->ActivityType)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->ActivityType as $row)
		{
			// build item
			$item = array();
			$item['Id'] = $row->Id;
			$item['Code'] = $row->Code;
			$item['Name'] = $row->Name;

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
	 * @param bool[optional] $includeImageUrl		Include the url of the image.
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
		$response = $this->doCall('ListArticleGroups', self::buildXML(array('ArticleGroupSearchCriteria' => $data)));

		// validate
		if(!isset($response->ArticleGroups->ArticleGroup)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->ArticleGroups->ArticleGroup as $row)
		{
			// build item
			$item = array();
			$item['Id'] = (string) $row->Id;
			$item['Code'] = (string) $row->Code;
			$item['Name'] = (string) $row->Name;
			$item['Description'] = (string) $row->Description;
			if($includeImage)
			{
				$item['Image']['ContentType'] = $row->Image->ContentType;
				$item['Image']['Data'] = base64_decode($row->Image->Bytes);
			}
			if($includeImageUrl)
			{
				$item['ImageUrl'] = (string) $row->ImageUrl;
				$item['ImageFullUrl'] = $this->getServer() . self::REST_IMAGE_URL . '/' . $item['ImageUrl'];
			}
			if($row->Articles['nil'] == 'true') $item['Articles'] = null;
			else $item['Articles'] = (array) $row->Articles;

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
		$response = $this->doCall('FindArticles', self::buildXML($data));

		// validate
		if(!isset($response->Articles->Article)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->Articles->Article as $row)
		{
			// build item
			$item = array();
			$item['Id'] = (string) $row->Id;
			$item['Code'] = (string) $row->Code;
			$item['Name'] = (string) $row->Name;
			$item['Description'] = (string) $row->Description;
			if(!isset($row->Group['nil'])) $item['Group'] = (string) $row->Group;
			if(!isset($row->Image['nil']))
			{
				$item['image']['ContentType'] = $row->Image->ContentType;
				$item['image']['Data'] = base64_decode($row->Image->Bytes);
			}
			if(!isset($row->ImageUrl['nil']))
			{
				$item['ImageUrl'] = (string) $row->ImageUrl;
				$item['ImageFullUrl'] = $this->getServer() . self::REST_IMAGE_URL . '/' . $item['ImageUrl'];
			}
			$item['IsRental'] = (bool) ((string) $row->IsRental == 'true');
			$item['Price'] = (float) $row->Price;
			$item['Stock'] = (float) $row->Stock;

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
		if(!isset($response->ExpositionTypes->ExpositionType)) throw new RecreatexException('Invalid response.');

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
		$response = $this->doCall('FindExpositions', self::buildXML($data));

		// ...
		throw new RecreatexException('Implement me when there are expositions.');
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

	public function validateBasket($items = array(), $price, $payments = array(), $customerId)
	{
		throw new RecreatexException('Not implemented', 500);
	}

	public function checkoutBasket()
	{
		throw new RecreatexException('Not implemented', 500);
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
		// build the body
		$body = '<ListPaymentMethods />';

		// make the call
		$response = $this->doCall('ListPaymentMethods', $body);

		// validate
		if(!isset($response->PaymentMethods->BasketPaymentMethod)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->PaymentMethods->BasketPaymentMethod as $row)
		{
			// build item
			$item = array();
			$item['Id'] = (string) $row->Id;
			$item['Name'] = (string) $row->Name;
			$item['Description'] = (isset($row->Description['nil'])) ? null : (string) $row->Description;

			// any incasso costs?
			if(isset($row->AdditionalIncassoCosts->IncassoCost))
			{
				// init
				$item['AdditionalIncassoCosts'] = array();

				// loop them
				foreach($row->AdditionalIncassoCosts->IncassoCost as $cost)
				{
					// build item
					$temp['Name'] = (string) $cost->Name;
					$temp['Cost'] = (float) $cost->Cost;
					$temp['NumberOfPayments'] = (float) $cost->NumberOfPayments;

					// add
					$item['AdditionalIncassoCosts'][] = $temp;
				}
			}

			// add
			$return[] = $item;
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
	 * Find culture events.
	 *
	 * @param string[optional] $cultureEventid		If provided only this item will be returned.
	 * @param string[optional] $name				If provided only items matching the pattern will be returned.
	 * @param int[optional] $from					If provided only items that start after this date will be returned.
	 * @param int[optional] $until					If provided only items that start before this date will be returned.
	 * @param string[optional] $cultureActivityId	If provided only items within this activityid will be returned.
	 * @param array[optional] $paging				The paging criteria, see Recreatex::buildPagingParameter().
	 * @param array[optional] $includes				A key-value-array with the properties to include, possible keys are: ImageUrl, ImageUr, Options.
	 * @return array
	 */
	public function findCultureEvents($cultureEventid = null, $name = null, $from = null, $until = null, $cultureActivityId = null, $paging = null, $includes = array())
	{
		// build the data
		$data = array();
		if($cultureEventid !== null) $data['CultureEventId'] = (string) $expositionId;
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
		$response = $this->doCall('FindCultureEvents', self::buildXML($data));

		// validate
		if(!isset($response->CultureEvents->CultureEvent)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();
		$cultureActivitiesStore = array();
		$hallsStore = array();

		// loop
		foreach($response->CultureEvents->CultureEvent as $row)
		{
			// build item
			$item = array();
			$item['AdministrativeCost'] = null;
			if(isset($row->AdministrativeCost))
			{
				// init var
				$administrativeCost = null;

				if(!isset($row->AdministrativeCost->Cost['nil'])) $administrativeCost['Cost'] = (float) $row->AdministrativeCost->Cost;
				if(!isset($row->AdministrativeCost->Name['nil'])) $administrativeCost['Name'] = (string) $row->AdministrativeCost->Name;

				// add
				$item['AdministrativeCost'] = $administrativeCost;
			}
			$item['AvailableSeats'] = (int) $row->AvailableSeats;
			$item['Code'] = (string) $row->Code;
			$item['CultureActivity'] = null;
			if(isset($row->CultureActivity))
			{
				// stored
				if(isset($row->CultureActivity['Ref']) && isset($cultureActivitiesStore[(string) $row->CultureActivity['Ref']]))
				{
					$activity = $cultureActivitiesStore[(string) $row->CultureActivity['Ref']];
				}
				else
				{
					// build activity
					$activity['Id'] = (string) $row->CultureActivity->Id;
					$activity['Code'] = (string) $row->CultureActivity->Code;
					$activity['Description'] = (string) $row->CultureActivity->Description;

					$cultureActivitiesStore[(string) $row->CultureActivity['Id']] = $activity;
				}

				// add
				$item['CultureActivity'] = $activity;
			}
			$item['Description'] = (string) $row->Description;
			$item['From'] = (string) $row->From;
			$item['Hall'] = null;
			if(isset($row->Hall))
			{
				// stored
				if(isset($row->Hall['Ref']) && isset($hallsStore[(string) $row->Hall['Reff']]))
				{
					$hall = $hallsStore[(string) $row->Hall['Ref']];
				}
				else
				{
					// build hall
					$hall['Address'] = null; // <xs:element minOccurs="0" name="Address" nillable="true" type="q75:Address" xmlns:q75="http://www.recreatex.be/webshop/v0.5/" />
					$hall['Blocks'] = null; // <xs:element minOccurs="0" name="Blocks" nillable="true" type="q76:ArrayOfSeatBlock" xmlns:q76="http://www.recreatex.be/webshop/v0.5/" />
					$hall['Code'] = (string) $row->Hall->Code;
					$hall['Description'] = (isset($row->Hall->Description['nil'])) ? null : (string) $row->Hall->Description;
					$hall['Id'] = (string) $row->Hall->Id;
					$hall['Name'] = (string) $row->Hall->Name;
					$hall['Rows'] = null; // <xs:element minOccurs="0" name="Rows" nillable="true" type="q77:ArrayOfSeatRow" xmlns:q77="http://www.recreatex.be/webshop/v0.5/" />

					$hallsStore[(string) $row->Hall['Id']] = $hall;
				}

				// add
				$item['Hall'] = $hall;
			}
			$item['Image'] = null; // <xs:element minOccurs="0" name="Image" nillable="true" type="q258:Picture" xmlns:q258="http://www.recreatex.be/webshop/v0.5/" />
			$item['ImageUr'] = (string) $row->ImageUr;
			$item['Id'] = (string) $row->Id;
			$item['IncassoCost'] = null; // <xs:element minOccurs="0" name="IncassoCost" nillable="true" type="q259:IncassoCost" xmlns:q259="http://www.recreatex.be/webshop/v0.5/" />
			$item['Name'] = (string) $row->Name;
			$item['Prices'] = null; // <xs:element minOccurs="0" name="Prices" nillable="true" type="q260:ArrayOfPrice" xmlns:q260="http://www.recreatex.be/webshop/v0.5/" />
			$item['ReservationCost'] = null; // <xs:element minOccurs="0" name="ReservationCost" nillable="true" type="q261:ReservationCost" xmlns:q261="http://www.recreatex.be/webshop/v0.5/" />
			$item['SalesFrom'] = (string) $row->SalesFrom;
			$item['SalesUntil'] = (string) $row->SalesUntil;
			$item['Status'] = null; // <xs:element minOccurs="0" name="Status" type="q262:CultureEventStatus" xmlns:q262="http://www.recreatex.be/webshop/v0.5/" />
			$item['Until'] = (string) $row->Until;

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
