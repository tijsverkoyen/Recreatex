<?php

namespace TijsVerkoyen\Recreatex;

use SoapClient as BaseSoapClient;
use TijsVerkoyen\Recreatex\ComplexType\AuthenticationResult;
use TijsVerkoyen\Recreatex\ComplexType\ServiceContext;
use TijsVerkoyen\Recreatex\ComplexType\Credential;
use TijsVerkoyen\Recreatex\ComplexType\SavePersonResult;
use TijsVerkoyen\Recreatex\ComplexType\Person;
use TijsVerkoyen\Recreatex\ComplexType\ForgotPasswordResult;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfPerson;
use TijsVerkoyen\Recreatex\ComplexType\FindPersonsCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivityType;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivity;
use TijsVerkoyen\Recreatex\ComplexType\ActivitySearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleGroup;
use TijsVerkoyen\Recreatex\ComplexType\ArticleGroupSearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleCategory;
use TijsVerkoyen\Recreatex\ComplexType\ArticleCategorySearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticle;
use TijsVerkoyen\Recreatex\ComplexType\ArticleSearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionType;
use TijsVerkoyen\Recreatex\ComplexType\ExpositionTypeSearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfExposition;
use TijsVerkoyen\Recreatex\ComplexType\ExpositionSearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionPeriod;
use TijsVerkoyen\Recreatex\ComplexType\ExpositionPeriodSearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfAudience;
use TijsVerkoyen\Recreatex\ComplexType\BasketValidationResult;
use TijsVerkoyen\Recreatex\ComplexType\Basket;
use TijsVerkoyen\Recreatex\ComplexType\BasketItemValidationResult;
use TijsVerkoyen\Recreatex\ComplexType\BasketItem;
use TijsVerkoyen\Recreatex\ComplexType\CheckoutBasketResult;
use TijsVerkoyen\Recreatex\ComplexType\LockBasketResult;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfBasketItem;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfLockTicket;
use TijsVerkoyen\Recreatex\ComplexType\ExtendedLocks;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfBasketPaymentMethod;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureActivity;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureEvent;
use TijsVerkoyen\Recreatex\ComplexType\CultureEventSearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfHall;
use TijsVerkoyen\Recreatex\ComplexType\Hall;
use TijsVerkoyen\Recreatex\SimpleType\Guid;
use TijsVerkoyen\Recreatex\ComplexType\SeatAllocationsOverview;
use TijsVerkoyen\Recreatex\SimpleType\SeatAllocationIncludes;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureReservation;
use TijsVerkoyen\Recreatex\ComplexType\CultureReservationSearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureEventCategory;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfPriceGroup;
use TijsVerkoyen\Recreatex\ComplexType\PriceGroupSearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ArrayOfCategory;

class Recreatex extends BaseSoapClient
{
	const DEBUG = false;
	const VERSION = '2.0.0';

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
	 * The ServiceContext to use
	 *
	 * @var ServiceContext
	 */
	private $serviceContext;

	/**
	 * The soapclient
	 *
	 * @var BaseSoapClient
	 */
	private $soapclient;

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

	/**
	 * @var array
	 */
	private $classMaps = array(
		'AuthenticationError' => 'TijsVerkoyen\Recreatex\SimpleType\AuthenticationError',
		'Gender' => 'TijsVerkoyen\Recreatex\SimpleType\Gender',
		'PersonPriceGroupType' => 'TijsVerkoyen\Recreatex\SimpleType\PersonPriceGroupType',
		'PriceGroupType' => 'TijsVerkoyen\Recreatex\SimpleType\PriceGroupType',
		'WeekDay' => 'TijsVerkoyen\Recreatex\SimpleType\WeekDay',
		'SeatAllocationStatus' => 'TijsVerkoyen\Recreatex\SimpleType\SeatAllocationStatus',
		'ArticleType' => 'TijsVerkoyen\Recreatex\SimpleType\ArticleType',
		'CalculationType' => 'TijsVerkoyen\Recreatex\SimpleType\CalculationType',
		'CheckoutResultState' => 'TijsVerkoyen\Recreatex\SimpleType\CheckoutResultState',
		'CultureEventStatus' => 'TijsVerkoyen\Recreatex\SimpleType\CultureEventStatus',
		'SeatAllocationIncludes' => 'TijsVerkoyen\Recreatex\SimpleType\SeatAllocationIncludes',
		'char' => 'TijsVerkoyen\Recreatex\SimpleType\char',
		'duration' => 'TijsVerkoyen\Recreatex\SimpleType\duration',
		'Guid' => 'TijsVerkoyen\Recreatex\SimpleType\Guid',
		'ServiceContext' => 'TijsVerkoyen\Recreatex\ComplexType\ServiceContext',
		'Credential' => 'TijsVerkoyen\Recreatex\ComplexType\Credential',
		'AuthenticationResult' => '\TijsVerkoyen\Recreatex\ComplexType\AuthenticationResult',
		'Person' => 'TijsVerkoyen\Recreatex\ComplexType\Person',
		'Address' => 'TijsVerkoyen\Recreatex\ComplexType\Address',
		'PersonName' => 'TijsVerkoyen\Recreatex\ComplexType\PersonName',
		'ArrayOfRelation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfRelation',
		'Relation' => 'TijsVerkoyen\Recreatex\ComplexType\Relation',
		'FamilyRelation' => 'TijsVerkoyen\Recreatex\ComplexType\FamilyRelation',
		'PersonSettings' => 'TijsVerkoyen\Recreatex\ComplexType\PersonSettings',
		'ArrayOfSubcategory' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSubcategory',
		'Subcategory' => 'TijsVerkoyen\Recreatex\ComplexType\Subcategory',
		'Category' => 'Recreatex\ComplexType\Category',
		'ArrayOfPersonPriceGroup' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPersonPriceGroup',
		'PersonPriceGroup' => 'TijsVerkoyen\Recreatex\ComplexType\PersonPriceGroup',
		'PriceGroup' => 'TijsVerkoyen\Recreatex\ComplexType\PriceGroup',
		'SavePersonResult' => 'Recreatex\ComplexType\SavePersonResult',
		'ArrayOfValidationResult' => 'Recreatex\ComplexType\ArrayOfValidationResult',
		'ValidationResult' => 'Recreatex\ComplexType\ValidationResult',
		'BasketItemValidationResult' => 'Recreatex\ComplexType\BasketItemValidationResult',
		'BasketItem' => 'Recreatex\ComplexType\BasketItem',
		'ExpositionPeriodReservation' => 'Recreatex\ComplexType\ExpositionPeriodReservation',
		'ArrayOfExpositionPeriodReservationEntry' => 'Recreatex\ComplexType\ArrayOfExpositionPeriodReservationEntry',
		'ExpositionPeriodReservationEntry' => 'Recreatex\ComplexType\ExpositionPeriodReservationEntry',
		'LockTicket' => 'Recreatex\ComplexType\LockTicket',
		'CultureEventReservationLockTicket' => 'Recreatex\ComplexType\CultureEventReservationLockTicket',
		'ArrayOfSeatAllocation' => 'Recreatex\ComplexType\ArrayOfSeatAllocation',
		'SeatAllocation' => 'Recreatex\ComplexType\SeatAllocation',
		'ActivityReservationLockTicket' => 'Recreatex\ComplexType\ActivityReservationLockTicket',
		'ExpositionReservationLockTicket' => 'Recreatex\ComplexType\ExpositionReservationLockTicket',
		'ArticleSaleLockTicket' => 'Recreatex\ComplexType\ArticleSaleLockTicket',
		'ArticleSale' => 'Recreatex\ComplexType\ArticleSale',
		'Article' => 'Recreatex\ComplexType\Article',
		'ArticleGroup' => 'Recreatex\ComplexType\ArticleGroup',
		'ArrayOfArticle' => 'Recreatex\ComplexType\ArrayOfArticle',
		'Picture' => 'Recreatex\ComplexType\Picture',
		'ArrayOfArticleIngredient' => 'Recreatex\ComplexType\ArrayOfArticleIngredient',
		'ArticleIngredient' => 'Recreatex\ComplexType\ArticleIngredient',
		'ArrayOfArticleOption' => 'Recreatex\ComplexType\ArrayOfArticleOption',
		'ArticleOption' => 'Recreatex\ComplexType\ArticleOption',
		'ArrayOfArticleOptionValue' => 'Recreatex\ComplexType\ArrayOfArticleOptionValue',
		'ArticleOptionValue' => 'Recreatex\ComplexType\ArticleOptionValue',
		'ArrayOfStockLocation' => 'Recreatex\ComplexType\ArrayOfStockLocation',
		'StockLocation' => 'Recreatex\ComplexType\StockLocation',
		'CultureEventReservation' => 'Recreatex\ComplexType\CultureEventReservation',
		'ArrayOfCultureEventReservationEntry' => 'Recreatex\ComplexType\ArrayOfCultureEventReservationEntry',
		'CultureEventReservationEntry' => 'Recreatex\ComplexType\CultureEventReservationEntry',
		'ExplicitSeatsCultureEventReservationEntry' => 'Recreatex\ComplexType\ExplicitSeatsCultureEventReservationEntry',
		'BestAvailableSeatsCultureEventReservationEntry' => 'Recreatex\ComplexType\BestAvailableSeatsCultureEventReservationEntry',
		'ArrayOfCultureEventOptionReservation' => 'Recreatex\ComplexType\ArrayOfCultureEventOptionReservation',
		'CultureEventOptionReservation' => 'Recreatex\ComplexType\CultureEventOptionReservation',
		'ActivityReservation' => 'Recreatex\ComplexType\ActivityReservation',
		'Activity' => 'Recreatex\ComplexType\Activity',
		'AgeCategory' => 'Recreatex\ComplexType\AgeCategory',
		'ArrayOfActivityPart' => 'Recreatex\ComplexType\ArrayOfActivityPart',
		'ActivityPart' => 'Recreatex\ComplexType\ActivityPart',
		'Period' => 'Recreatex\ComplexType\Period',
		'ArrayOfActivityOption' => 'Recreatex\ComplexType\ArrayOfActivityOption',
		'ActivityOption' => 'Recreatex\ComplexType\ActivityOption',
		'ActivityType' => 'Recreatex\ComplexType\ActivityType',
		'ArrayOfActivityPartReservation' => 'Recreatex\ComplexType\ArrayOfActivityPartReservation',
		'ActivityPartReservation' => 'Recreatex\ComplexType\ActivityPartReservation',
		'BasketValidationResult' => 'Recreatex\ComplexType\BasketValidationResult',
		'ArrayOfBasketItemValidationResult' => 'Recreatex\ComplexType\ArrayOfBasketItemValidationResult',
		'ForgotPasswordResult' => 'Recreatex\ComplexType\ForgotPasswordResult',
		'FindPersonsCriteria' => 'Recreatex\ComplexType\FindPersonsCriteria',
		'PersonIncludes' => 'Recreatex\ComplexType\PersonIncludes',
		'PagingCriteria' => 'Recreatex\ComplexType\PagingCriteria',
		'SortingCriteria' => 'Recreatex\ComplexType\SortingCriteria',
		'ArrayOfPerson' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPerson',
		'ArrayOfActivityType' => 'Recreatex\ComplexType\ArrayOfActivityType',
		'ActivitySearchCriteria' => 'Recreatex\ComplexType\ActivitySearchCriteria',
		'ActivityIncludes' => 'Recreatex\ComplexType\ActivityIncludes',
		'ArrayOfActivity' => 'Recreatex\ComplexType\ArrayOfActivity',
		'ArticleGroupSearchCriteria' => 'Recreatex\ComplexType\ArticleGroupSearchCriteria',
		'ArrayOfArticleGroup' => 'Recreatex\ComplexType\ArrayOfArticleGroup',
		'ArticleCategorySearchCriteria' => 'Recreatex\ComplexType\ArticleCategorySearchCriteria',
		'ArrayOfArticleCategory' => 'Recreatex\ComplexType\ArrayOfArticleCategory',
		'ArticleCategory' => 'Recreatex\ComplexType\ArticleCategory',
		'ArticleSearchCriteria' => 'Recreatex\ComplexType\ArticleSearchCriteria',
		'ArticleIncludes' => 'Recreatex\ComplexType\ArticleIncludes',
		'ArrayOfExpositionType' => 'Recreatex\ComplexType\ArrayOfExpositionType',
		'ExpositionType' => 'Recreatex\ComplexType\ExpositionType',
		'ExpositionTypeSearchCriteria' => 'Recreatex\ComplexType\ExpositionTypeSearchCriteria',
		'ExpositionTypeIncludes' => 'Recreatex\ComplexType\ExpositionTypeIncludes',
		'ExpositionSearchCriteria' => 'Recreatex\ComplexType\ExpositionSearchCriteria',
		'ExpositionIncludes' => 'Recreatex\ComplexType\ExpositionIncludes',
		'ArrayOfExposition' => 'Recreatex\ComplexType\ArrayOfExposition',
		'Exposition' => 'Recreatex\ComplexType\Exposition',
		'ArrayOfAudience' => 'Recreatex\ComplexType\ArrayOfAudience',
		'Audience' => 'Recreatex\ComplexType\Audience',
		'ArrayOfExpositionPeriod' => 'Recreatex\ComplexType\ArrayOfExpositionPeriod',
		'ExpositionPeriod' => 'Recreatex\ComplexType\ExpositionPeriod',
		'Occupancy' => 'Recreatex\ComplexType\Occupancy',
		'ArrayOfExpositionPrice' => 'Recreatex\ComplexType\ArrayOfExpositionPrice',
		'ExpositionPrice' => 'Recreatex\ComplexType\ExpositionPrice',
		'Price' => 'Recreatex\ComplexType\Price',
		'Vat' => 'Recreatex\ComplexType\Vat',
		'ExpositionPeriodSearchCriteria' => 'Recreatex\ComplexType\ExpositionPeriodSearchCriteria',
		'Basket' => 'Recreatex\ComplexType\Basket',
		'ArrayOfBasketItem' => 'Recreatex\ComplexType\ArrayOfBasketItem',
		'ArrayOfBasketPayment' => 'Recreatex\ComplexType\ArrayOfBasketPayment',
		'BasketPayment' => 'Recreatex\ComplexType\BasketPayment',
		'IncassoBasketPayment' => 'Recreatex\ComplexType\IncassoBasketPayment',
		'CheckoutBasketResult' => 'Recreatex\ComplexType\CheckoutBasketResult',
		'ArrayOfSalesItem' => 'Recreatex\ComplexType\ArrayOfSalesItem',
		'SalesItem' => 'Recreatex\ComplexType\SalesItem',
		'ActivityReservationSalesItem' => 'Recreatex\ComplexType\ActivityReservationSalesItem',
		'ExpositionSalesItem' => 'Recreatex\ComplexType\ExpositionSalesItem',
		'CultureEventReservationSalesItem' => 'Recreatex\ComplexType\CultureEventReservationSalesItem',
		'ArticleSalesItem' => 'Recreatex\ComplexType\ArticleSalesItem',
		'LockBasketResult' => 'Recreatex\ComplexType\LockBasketResult',
		'ArrayOfLockTicket' => 'Recreatex\ComplexType\ArrayOfLockTicket',
		'ExtendedLocks' => 'Recreatex\ComplexType\ExtendedLocks',
		'ArrayOfBasketPaymentMethod' => 'Recreatex\ComplexType\ArrayOfBasketPaymentMethod',
		'BasketPaymentMethod' => 'Recreatex\ComplexType\BasketPaymentMethod',
		'IncassoBasketPaymentMethod' => 'Recreatex\ComplexType\IncassoBasketPaymentMethod',
		'ArrayOfIncassoCost' => 'Recreatex\ComplexType\ArrayOfIncassoCost',
		'IncassoCost' => 'Recreatex\ComplexType\IncassoCost',
		'AdditionalCost' => 'Recreatex\ComplexType\AdditionalCost',
		'ReservationCost' => 'Recreatex\ComplexType\ReservationCost',
		'AdministrativeCost' => 'Recreatex\ComplexType\AdministrativeCost',
		'ArrayOfCultureActivity' => 'Recreatex\ComplexType\ArrayOfCultureActivity',
		'CultureActivity' => 'Recreatex\ComplexType\CultureActivity',
		'CultureEventSearchCriteria' => 'Recreatex\ComplexType\CultureEventSearchCriteria',
		'CultureEventIncludes' => 'Recreatex\ComplexType\CultureEventIncludes',
		'ArrayOfCultureEvent' => 'Recreatex\ComplexType\ArrayOfCultureEvent',
		'CultureEvent' => 'Recreatex\ComplexType\CultureEvent',
		'Hall' => 'Recreatex\ComplexType\Hall',
		'ArrayOfSeatBlock' => 'Recreatex\ComplexType\ArrayOfSeatBlock',
		'SeatBlock' => 'Recreatex\ComplexType\SeatBlock',
		'Location' => 'Recreatex\ComplexType\Location',
		'ArrayOfSeatRow' => 'Recreatex\ComplexType\ArrayOfSeatRow',
		'SeatRow' => 'Recreatex\ComplexType\SeatRow',
		'ArrayOfSeat' => 'Recreatex\ComplexType\ArrayOfSeat',
		'Seat' => 'Recreatex\ComplexType\Seat',
		'SeatRange' => 'Recreatex\ComplexType\SeatRange',
		'ArrayOfCultureEventPrice' => 'Recreatex\ComplexType\ArrayOfCultureEventPrice',
		'CultureEventPrice' => 'Recreatex\ComplexType\CultureEventPrice',
		'ArrayOfCultureEventOption' => 'Recreatex\ComplexType\ArrayOfCultureEventOption',
		'CultureEventOption' => 'Recreatex\ComplexType\CultureEventOption',
		'CultureEventCategory' => 'Recreatex\ComplexType\CultureEventCategory',
		'ArrayOfHall' => 'Recreatex\ComplexType\ArrayOfHall',
		'SeatAllocationsOverview' => 'Recreatex\ComplexType\SeatAllocationsOverview',
		'SeatAllocationPerHallSummary' => 'Recreatex\ComplexType\SeatAllocationPerHallSummary',
		'SeatAllocationSummary' => 'Recreatex\ComplexType\SeatAllocationSummary',
		'SeatAllocationCount' => 'Recreatex\ComplexType\SeatAllocationCount',
		'SeatAllocationPerBlockSummary' => 'Recreatex\ComplexType\SeatAllocationPerBlockSummary',
		'ArrayOfSeatAllocationPerBlockSummary' => 'Recreatex\ComplexType\ArrayOfSeatAllocationPerBlockSummary',
		'CultureReservationSearchCriteria' => 'Recreatex\ComplexType\CultureReservationSearchCriteria',
		'ArrayOfCultureReservation' => 'Recreatex\ComplexType\ArrayOfCultureReservation',
		'CultureReservation' => 'Recreatex\ComplexType\CultureReservation',
		'ArrayOfCultureReservationSeat' => 'Recreatex\ComplexType\ArrayOfCultureReservationSeat',
		'CultureReservationSeat' => 'Recreatex\ComplexType\CultureReservationSeat',
		'ArrayOfCultureEventCategory' => 'Recreatex\ComplexType\ArrayOfCultureEventCategory',
		'PriceGroupSearchCriteria' => 'Recreatex\ComplexType\PriceGroupSearchCriteria',
		'ArrayOfPriceGroup' => 'Recreatex\ComplexType\ArrayOfPriceGroup',
		'ArrayOfCategory' => 'Recreatex\ComplexType\ArrayOfCategory',
		'ArrayOfstring' => 'Recreatex\ComplexType\ArrayOfstring',
		'ArrayOfGuid' => 'Recreatex\ComplexType\ArrayOfGuid',
	);

	/**
	 * Default constructor
	 *
	 * @param string[optional] $server The server to use.
	 * @param int[optional]    $port   The port whereon the server is operating.
	 */
	public function __construct($server = null, $port = null)
	{
		if($server !== null) $this->setServer($server);
		if($port !== null) $this->setPort($port);
	}

	public function createServiceContext($shopId = null, $divisionId = null, $language = null)
	{
		$this->serviceContext = new ServiceContext();
		if($shopId !== null) {
			$this->serviceContext->setShopId(new Guid($shopId));
		}
	}

	/**
	 * Get the
	 * @return ServiceContext
	 */
	public function getServiceContext()
	{
		return $this->serviceContext;
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
	 * Set the port to use
	 *
	 * @param int $port
	 */
	public function setPort($port)
	{
		$this->port = $port;
	}

	/**
	 * Get the server
	 *
	 * @return mixed
	 */
	public function getServer()
	{
		return $this->server;
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
	 * Returns the SoapClient instance
	 *
	 * @return BaseSoapClient
	 */
	public function getSoapClient()
	{
		// create the client if needed
		if(!$this->soapclient)
		{
			$options = array(
				'trace' => self::DEBUG,
				'exceptions' => false,
				'connection_timeout' => $this->getTimeout(),
				'user_agent' => $this->getUserAgent(),
				'cache_wsdl' => WSDL_CACHE_BOTH,
				'classmap' => $this->classMaps,
			);

			$connectionString = $this->getServer() . ':' . $this->getPort();
			$this->soapClient = new \SoapClient($connectionString . '/WebShop.svc?wsdl', $options);
		}

		return $this->soapClient;
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
	 * Set the timeout
	 * After this time the request will stop. You should handle any errors triggered by this.
	 *
	 * @param int $seconds The timeout in seconds.
	 */
	public function setTimeOut($seconds)
	{
		$this->timeOut = (int) $seconds;
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
	 * Set the user-agent for you application
	 * It will be appended to ours, the result will look like: "PHP Recreatex/<version> <your-user-agent>"
	 *
	 * @param string $userAgent Your user-agent, it should look like <app-name>/<app-version>.
	 */
	public function setUserAgent($userAgent)
	{
		$this->userAgent = (string) $userAgent;
	}

	/**
	 * Check if a response is valid for the given method
	 *
	 * @param mixed $response
	 * @param string $method
	 */
	protected function isValidResponse($response, $propertyName = null)
	{
		// soapfault?
		if($response instanceof \SoapFault)
		{
			if(self::DEBUG)
			{
				var_dump($this);
			}

			throw new Exception($response->getMessage(), $response->getCode());
		}

		// valid response?
		if($propertyName !== null && !isset($response->{$propertyName}))
		{
			if(self::DEBUG)
			{
				var_dump($this);
			}

			throw new Exception('Invalid response.');
		}
	}

	/**
	 * Check if the service is available
	 *
	 * @return bool
	 */
	public function IsAvailable()
	{
		$response = $this->getSoapClient()->IsAvailable();
		$this->isValidResponse($response, 'IsAvailableResult');
		return $response->IsAvailableResult;
	}

	/**
	 * @param ServiceContext $Context
	 * @param Credential $Credentials
	 * @return AuthenticationResult
	 */
	public function AuthenticateUser(Credential $Credentials)
	{
		$response = $this->getSoapClient()->AuthenticateUser(
			$this->getServiceContext(),
			$Credentials
		);

		$this->isValidResponse($response);
		return $response;
	}

	/**
	 * @param ServiceContext $Context
	 * @param Person $Person
	 * @return SavePersonResult
	 */
	public function SavePerson(ServiceContext $Context, Person $Person)
	{
		return $this->getSoapClient()->SavePerson(array($Context, $Person));
	}

	/**
	 * @param ServiceContext $Context
	 * @param Person $Person
	 * @return SavePersonResult
	 */
	public function SavePersonSubcategories(ServiceContext $Context, Person $Person)
	{
		return $this->getSoapClient()->SavePersonSubcategories(array($Context, $Person));
	}

	/**
	 * @param ServiceContext $Context
	 * @param string $Login
	 * @return ForgotPasswordResult
	 */
	public function ForgotPassword(ServiceContext $Context, string $Login)
	{
		return $this->getSoapClient()->ForgotPassword(array($Context, $Login));
	}

	/**
	 * Find persons
	 *
	 * @param FindPersonsCriteria $Criteria
	 * @return array
	 */
	public function FindPerson(FindPersonsCriteria $Criteria = null)
	{
		$response = $this->getSoapClient()->FindPerson(
			$this->getServiceContext(),
		    $Criteria
        );
		$this->isValidResponse($response);
		return $response->getPerson();
	}

	/**
	 * @param ServiceContext $Context
	 * @param Person $Person
	 * @return SavePersonResult
	 */
	public function SavePersonPriceGroups(ServiceContext $Context, Person $Person)
	{
		return $this->getSoapClient()->SavePersonPriceGroups(array($Context, $Person));
	}

	/**
	 * @param ServiceContext $Context
	 * @return ArrayOfActivityType
	 */
	public function ListActivityTypes(ServiceContext $Context)
	{
		return $this->getSoapClient()->ListActivityTypes($Context->toArray());
	}

	/**
	 * @param ActivitySearchCriteria $ActivitySearchCriteria
	 * @param ServiceContext $Context
	 * @return ArrayOfActivity
	 */
	public function FindActivities(ActivitySearchCriteria $ActivitySearchCriteria, ServiceContext $Context)
	{
		return $this->getSoapClient()->FindActivities(array($ActivitySearchCriteria, $Context));
	}

	/**
	 * @param ArticleGroupSearchCriteria $ArticleGroupSearchCriteria
	 * @param ServiceContext $Context
	 * @return ArrayOfArticleGroup
	 */
	public function ListArticleGroups(ArticleGroupSearchCriteria $ArticleGroupSearchCriteria, ServiceContext $Context)
	{
		return $this->getSoapClient()->ListArticleGroups(array($ArticleGroupSearchCriteria, $Context));
	}

	/**
	 * @param ArticleCategorySearchCriteria $ArticleCategorySearchCriteria
	 * @param ServiceContext $Context
	 * @return ArrayOfArticleCategory
	 */
	public function FindArticleCategories(ArticleCategorySearchCriteria $ArticleCategorySearchCriteria, ServiceContext $Context)
	{
		return $this->getSoapClient()->FindArticleCategories(array($ArticleCategorySearchCriteria, $Context));
	}

	/**
	 * @param ArticleSearchCriteria $ArticleSearchCriteria
	 * @param ServiceContext $Context
	 * @return ArrayOfArticle
	 */
	public function FindArticles(ArticleSearchCriteria $ArticleSearchCriteria, ServiceContext $Context)
	{
		return $this->getSoapClient()->FindArticles(array($ArticleSearchCriteria, $Context));
	}

	/**
	 * @param ServiceContext $Context
	 * @return ArrayOfExpositionType
	 */
	public function ListExpositionTypes(ServiceContext $Context)
	{
		return $this->getSoapClient()->ListExpositionTypes($Context->toArray());
	}

	/**
	 * @param ServiceContext $Context
	 * @param ExpositionTypeSearchCriteria $ExpositionTypeSearchCriteria
	 * @return ArrayOfExpositionType
	 */
	public function FindExpositionTypes(ServiceContext $Context, ExpositionTypeSearchCriteria $ExpositionTypeSearchCriteria)
	{
		return $this->getSoapClient()->FindExpositionTypes(array($Context, $ExpositionTypeSearchCriteria));
	}

	/**
	 * @param ServiceContext $Context
	 * @param ExpositionSearchCriteria $ExpositionSearchCriteria
	 * @return ArrayOfExposition
	 */
	public function FindExpositions(ServiceContext $Context, ExpositionSearchCriteria $ExpositionSearchCriteria)
	{
		return $this->getSoapClient()->FindExpositions(array($Context, $ExpositionSearchCriteria));
	}

	/**
	 * @param ServiceContext $Context
	 * @param ExpositionPeriodSearchCriteria $ExpositionPeriodSearchCriteria
	 * @return ArrayOfExpositionPeriod
	 */
	public function ListExpositionPeriods(ServiceContext $Context, ExpositionPeriodSearchCriteria $ExpositionPeriodSearchCriteria)
	{
		return $this->getSoapClient()->ListExpositionPeriods(array($Context, $ExpositionPeriodSearchCriteria));
	}

	/**
	 * @param ServiceContext $Context
	 * @return ArrayOfAudience
	 */
	public function ListAudiences(ServiceContext $Context)
	{
		return $this->getSoapClient()->ListAudiences($Context->toArray());
	}

	/**
	 * @param Basket $Basket
	 * @param ServiceContext $Context
	 * @return BasketValidationResult
	 */
	public function ValidateBasket(Basket $Basket, ServiceContext $Context)
	{
		return $this->getSoapClient()->ValidateBasket(array($Basket, $Context));
	}

	/**
	 * @param BasketItem $BasketItem
	 * @param ServiceContext $Context
	 * @return BasketItemValidationResult
	 */
	public function ValidateBasketItem(BasketItem $BasketItem, ServiceContext $Context)
	{
		return $this->getSoapClient()->ValidateBasketItem(array($BasketItem, $Context));
	}

	/**
	 * @param Basket $Basket
	 * @param ServiceContext $Context
	 * @return CheckoutBasketResult
	 */
	public function CheckoutBasket(Basket $Basket, ServiceContext $Context)
	{
		return $this->getSoapClient()->CheckoutBasket(array($Basket, $Context));
	}

	/**
	 * @param ArrayOfBasketItem $BasketItems
	 * @param ServiceContext $Context
	 * @return LockBasketResult
	 */
	public function LockBasketItems(ArrayOfBasketItem $BasketItems, ServiceContext $Context)
	{
		return $this->getSoapClient()->LockBasketItems(array($BasketItems, $Context));
	}

	/**
	 * @param ServiceContext $Context
	 * @param ArrayOfLockTicket $LockTickets
	 * @return void
	 */
	public function UnlockBasketItems(ServiceContext $Context, ArrayOfLockTicket $LockTickets)
	{
		return $this->getSoapClient()->UnlockBasketItems(array($Context, $LockTickets));
	}

	/**
	 * @param Basket $Basket
	 * @param ServiceContext $Context
	 * @return Basket
	 */
	public function ReCalculateBasket(Basket $Basket, ServiceContext $Context)
	{
		return $this->getSoapClient()->ReCalculateBasket(array($Basket, $Context));
	}

	/**
	 * @param ServiceContext $Context
	 * @param ArrayOfLockTicket $LockTickets
	 * @return ExtendedLocks
	 */
	public function ExtendLockPeriod(ServiceContext $Context, ArrayOfLockTicket $LockTickets)
	{
		return $this->getSoapClient()->ExtendLockPeriod(array($Context, $LockTickets));
	}

	/**
	 * @param ServiceContext $Context
	 * @return ArrayOfBasketPaymentMethod
	 */
	public function ListPaymentMethods(ServiceContext $Context)
	{
		return $this->getSoapClient()->ListPaymentMethods($Context->toArray());
	}

	/**
	 * @param ServiceContext $Context
	 * @return ArrayOfCultureActivity
	 */
	public function ListCultureActivities(ServiceContext $Context)
	{
		return $this->getSoapClient()->ListCultureActivities($Context->toArray());
	}

	/**
	 * @param ServiceContext $Context
	 * @param CultureEventSearchCriteria $CultureEventSearchCriteria
	 * @return ArrayOfCultureEvent
	 */
	public function FindCultureEvents(ServiceContext $Context, CultureEventSearchCriteria $CultureEventSearchCriteria)
	{
		return $this->getSoapClient()->FindCultureEvents(array($Context, $CultureEventSearchCriteria));
	}

	/**
	 * @param ServiceContext $Context
	 * @return ArrayOfHall
	 */
	public function ListHalls(ServiceContext $Context)
	{
		return $this->getSoapClient()->ListHalls($Context->toArray());
	}

	/**
	 * @param ServiceContext $Context
	 * @param Guid $HallId
	 * @return Hall
	 */
	public function GetHallSeating(ServiceContext $Context, Guid $HallId)
	{
		return $this->getSoapClient()->GetHallSeating(array($Context, $HallId));
	}

	/**
	 * @param SeatAllocationIncludes $AllocationIncludes
	 * @param ServiceContext $Context
	 * @param Guid $CultureEventId
	 * @param string $SeatBlockCode
	 * @return SeatAllocationsOverview
	 */
	public function GetSeatAllocations(SeatAllocationIncludes $AllocationIncludes, ServiceContext $Context, Guid $CultureEventId, string $SeatBlockCode)
	{
		return $this->getSoapClient()->GetSeatAllocations(array($AllocationIncludes, $Context, $CultureEventId, $SeatBlockCode));
	}

	/**
	 * @param ServiceContext $Context
	 * @param CultureReservationSearchCriteria $CultureReservationSearchCriteria
	 * @return ArrayOfCultureReservation
	 */
	public function FindCultureReservations(ServiceContext $Context, CultureReservationSearchCriteria $CultureReservationSearchCriteria)
	{
		return $this->getSoapClient()->FindCultureReservations(array($Context, $CultureReservationSearchCriteria));
	}

	/**
	 * @param ServiceContext $Context
	 * @return ArrayOfCultureEventCategory
	 */
	public function ListCultureEventCategories(ServiceContext $Context)
	{
		return $this->getSoapClient()->ListCultureEventCategories($Context->toArray());
	}

	/**
	 * @param ServiceContext $Context
	 * @param PriceGroupSearchCriteria $PriceGroupSearchCriteria
	 * @return ArrayOfPriceGroup
	 */
	public function FindPriceGroups(ServiceContext $Context, PriceGroupSearchCriteria $PriceGroupSearchCriteria)
	{
		return $this->getSoapClient()->FindPriceGroups(array($Context, $PriceGroupSearchCriteria));
	}

	/**
	 * @param ServiceContext $Context
	 * @return ArrayOfCategory
	 */
	public function ListCategories(ServiceContext $Context)
	{
		return $this->getSoapClient()->ListCategories($Context->toArray());
	}
}