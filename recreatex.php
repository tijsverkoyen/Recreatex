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
	const WSDL_URL = 'http://dev.webservices.webshop.recreatex.be/webshop.svc?wsdl';

	// image endpoint URL
	const REST_IMAGE_URL = 'http://dev.webservices.webshop.recreatex.be/WebShopImageService.svc';

	// document endpoint URL
	const REST_DOCUMENT_URL = 'http://dev.webservices.webshop.recreatex.be/WebShopDocumentService.svc';

	// current version
	const VERSION = '1.0.0';


	/**
	 * The SOAP-client
	 *
	 * @var	SoapClient
	 */
	private $soapClient;


	/**
	 * The timeout
	 *
	 * @var	int
	 */
	private $timeOut = 60;


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
	 * @return	void
	 */
	public function __construct()
	{
	}


	/**
	 * Destructor
	 *
	 * @return	void
	 */
	public function __destruct()
	{
		// is the connection open?
		if($this->soapClient !== null) $this->soapClient = null;
	}


	/**
	 * Make the call
	 *
	 * @return	mixed
	 * @param	string $method					The method to be called.
	 * @param	array[optional] $parameters		The parameters.
	 */
	private function doCall($method, array $parameters = array())
	{
		// open connection if needed
		if($this->soapClient === null)
		{
			// build options
			$options = array('soap_version' => SOAP_1_1,
							 'trace' => self::DEBUG,
							 'exceptions' => false,
							 'connection_timeout' => $this->getTimeOut(),
							 'user_agent' => $this->getUserAgent()
							);

			// create client
			$this->soapClient = new SoapClient(self::WSDL_URL, $options);
		}

		$var = $this->soapClient->__getTypes();

		// redefine
		$method = (string) $method;
		$parameters = (array) $parameters;

		// make the call
		$response = $this->soapClient->__soapCall($method, array($parameters));

		// validate response
		if(is_soap_fault($response))
		{
			// init var
			$message = 'Internal Error';

			// try to get a decent message
			if(isset($response->faultstring)) $message = (string) $response->faultstring;
			if(isset($response->message)) $message = (string) $response->message;

			// internal debugging enabled
			if(self::DEBUG)
			{
				echo '<pre>';
				var_dump(htmlentities($this->soapClient->__getLastRequest()));
				var_dump($this);
				echo '</pre>';
			}

			// throw exception
			throw new RecreatexException($message);
		}

		// return the response
		return $response;
	}


	/**
	 * Get the timeout that will be used
	 *
	 * @return	int
	 */
	public function getTimeOut()
	{
		return (int) $this->timeOut;
	}


	/**
	 * Get the useragent that will be used. Our version will be prepended to yours.
	 * It will look like: "PHP Recreatex/<version> <your-user-agent>"
	 *
	 * @return	string
	 */
	public function getUserAgent()
	{
		return (string) 'PHP Recreatex/' . self::VERSION . ' ' . $this->userAgent;
	}


	/**
	 * Set the timeout
	 * After this time the request will stop. You should handle any errors triggered by this.
	 *
	 * @return	void
	 * @param	int $seconds	The timeout in seconds.
	 */
	public function setTimeOut($seconds)
	{
		$this->timeOut = (int) $seconds;
	}


	/**
	 * Set the user-agent for you application
	 * It will be appended to ours, the result will look like: "PHP Recreatex/<version> <your-user-agent>"
	 *
	 * @return	void
	 * @param	string $userAgent	Your user-agent, it should look like <app-name>/<app-version>.
	 */
	public function setUserAgent($userAgent)
	{
		$this->userAgent = (string) $userAgent;
	}



	/**
	 * Check if the service is available.
	 *
	 * @return	bool
	 */
	public function isAvailable()
	{
		// make the call
		$response = $this->doCall('IsAvailable');

		// validate
		if(!isset($response->IsAvailableResult)) throw new RecreatexException('Invalid response.');

		// return
		return (bool) $response->IsAvailableResult;
	}


	public function authenticateUser()
	{
		throw new ReflectionException('Not implemented', 500);
	}


	public function savePerson()
	{
		throw new ReflectionException('Not implemented', 500);
	}


	public function forgotPassword()
	{
		throw new ReflectionException('Not implemented', 500);
	}


	public function findPerson()
	{
		throw new ReflectionException('Not implemented', 500);
	}


	/**
	 * List all the activity types
	 *
	 * @return	array
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
			$item['id'] = $row->Id;
			$item['code'] = $row->Code;
			$item['name'] = $row->Name;

			// add
			$return[] = $item;
		}

		// return
		return $return;
	}


	public function findActivities()
	{
		throw new ReflectionException('Not implemented', 500);
	}


	/**
	 * Get a list of article groups
	 *
	 * @return	array
	 * @param	string[optional] $articleType		Define the type of articles to retrieve. Possible values are: Sale, Rental, All.
	 * @param	bool[optional] $includeImage		Include the image.
	 * @param	bool[optional] $includeImageUrl		Include the url of the image.
	 */
	public function listArticleGroups($articleType = 'Sale', $includeImage = false, $includeImageUrl = true)
	{
		// validate
		$allowedArticleTypes = array('Sale', 'Rental', 'All');
		if(!in_array($articleType, $allowedArticleTypes)) throw new RecreatexException('Invalid articletype ('. $articleType .'), allowed values are: '. implode(', ', $allowedArticleTypes) .'.', $code);

		// build parameters
		$parameters = array();
		$parameters['ArticleTypes'] = $articleType;
		$parameters['IncludeImage'] = (bool) $includeImage;
		$parameters['IncludeImageUrl'] = (bool) $includeImageUrl;

		// make the call
		$response = $this->doCall('ListArticleGroups', $parameters);

		// validate
		if(!isset($response->ArticleGroup)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->ArticleGroup as $row)
		{
			// build item
			$item = array();
			$item['id'] = $row->Id;
			$item['code'] = $row->Code;
			$item['name'] = $row->Name;
			$item['description'] = $row->Description;
			if($includeImage) $item['image'] = $row->Image;
			if($includeImage)
			{
				$item['image_url'] = $row->ImageUrl;
				$item['image_full_url'] = self::REST_IMAGE_URL .'/'. $row->ImageUrl;
			}
			$item['articles'] = $row->Articles;

			// add
			$return[] = $item;
		}

		// return
		return $return;
	}



	public function findArticles($articleGroupId = null, $namePatern = null, $buyerId = null, $articleType = null, $includes = null, $pageIndex = null, $pageSize = null, $sortingPropertyName = null, $sortingIsAscending = null, $articles = null)
	{
		throw new ReflectionException('Not implemented', 500);

		// build parameters
		$parameters = array();

		// make the call
		$response = $this->doCall('FindArticles', $parameters);
	}


	/**
	 * Get a list of exposition types
	 *
	 * @return	array
	 */
	public function listExpositionTypes()
	{
		// make the call
		$response = $this->doCall('ListExpositionTypes');

		// validate
		if(!isset($response->ExpositionType)) throw new RecreatexException('Invalid response.');

		// init var
		$return = array();

		// loop
		foreach($response->ExpositionType as $row)
		{
			// build item
			$item = array();
			$item['id'] = $row->Id;
			$item['name'] = $row->Name;
			$item['description'] = $row->Description;

			// add
			$return[] = $item;
		}

		// return
		return $return;
	}


	public function findExpositions($expositionId = null, $namePattern = null, $from = null, $until = null, $expositionTypeId = null, $audienceId = null, $includes = null)
	{
		throw new ReflectionException('Not implemented', 500);

		// build parameters
		$parameters = array();
		if($expositionTypeId != null) $parameters['ExpositionTypeId'] = (string) $expositionTypeId;

		// make the call
		$response = $this->doCall('FindExpositions', $parameters);
	}


	public function listExpositionPeriods()
	{
		throw new ReflectionException('Not implemented', 500);
	}


	public function listAudiences()
	{
		throw new ReflectionException('Not implemented', 500);
	}


	public function validateBasket()
	{
		throw new ReflectionException('Not implemented', 500);
	}


	public function validateBasketItem()
	{
		throw new ReflectionException('Not implemented', 500);
	}


	public function checkoutBasket()
	{
		throw new ReflectionException('Not implemented', 500);
	}


	public function lockBasketItems()
	{
		throw new ReflectionException('Not implemented', 500);
	}


	public function unlockBasketItems()
	{
		throw new ReflectionException('Not implemented', 500);
	}


	public function listPaymentMethods()
	{
		throw new ReflectionException('Not implemented', 500);
	}


	public function listCultureActivities()
	{
		throw new ReflectionException('Not implemented', 500);
	}


	public function findCultureEvents()
	{
		throw new ReflectionException('Not implemented', 500);

		$response = $this->doCall('FindCultureEvents');

	}


	public function listHalls()
	{
		throw new ReflectionException('Not implemented', 500);
	}


	public function GetHallSeating()
	{
		throw new ReflectionException('Not implemented', 500);
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

?>