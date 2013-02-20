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
    const DEBUG = true;
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
        'char' => 'TijsVerkoyen\Recreatex\SimpleType\Char',
        'duration' => 'TijsVerkoyen\Recreatex\SimpleType\Duration',
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
        'Category' => 'TijsVerkoyen\Recreatex\ComplexType\Category',
        'ArrayOfPersonPriceGroup' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPersonPriceGroup',
        'PersonPriceGroup' => 'TijsVerkoyen\Recreatex\ComplexType\PersonPriceGroup',
        'PriceGroup' => 'TijsVerkoyen\Recreatex\ComplexType\PriceGroup',
        'SavePersonResult' => 'TijsVerkoyen\Recreatex\ComplexType\SavePersonResult',
        'ArrayOfValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfValidationResult',
        'ValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\ValidationResult',
        'BasketItemValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\BasketItemValidationResult',
        'BasketItem' => 'TijsVerkoyen\Recreatex\ComplexType\BasketItem',
        'ExpositionPeriodReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionPeriodReservation',
        'ArrayOfExpositionPeriodReservationEntry' =>
            'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionPeriodReservationEntry',
        'ExpositionPeriodReservationEntry' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionPeriodReservationEntry',
        'LockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\LockTicket',
        'CultureEventReservationLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventReservationLockTicket',
        'ArrayOfSeatAllocation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSeatAllocation',
        'SeatAllocation' => 'TijsVerkoyen\Recreatex\ComplexType\SeatAllocation',
        'ActivityReservationLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityReservationLockTicket',
        'ExpositionReservationLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionReservationLockTicket',
        'ArticleSaleLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleSaleLockTicket',
        'ArticleSale' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleSale',
        'Article' => 'TijsVerkoyen\Recreatex\ComplexType\Article',
        'ArticleGroup' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleGroup',
        'ArrayOfArticle' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticle',
        'Picture' => 'TijsVerkoyen\Recreatex\ComplexType\Picture',
        'ArrayOfArticleIngredient' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleIngredient',
        'ArticleIngredient' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleIngredient',
        'ArrayOfArticleOption' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleOption',
        'ArticleOption' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleOption',
        'ArrayOfArticleOptionValue' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleOptionValue',
        'ArticleOptionValue' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleOptionValue',
        'ArrayOfStockLocation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfStockLocation',
        'StockLocation' => 'TijsVerkoyen\Recreatex\ComplexType\StockLocation',
        'CultureEventReservation' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventReservation',
        'ArrayOfCultureEventReservationEntry' =>
            'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureEventReservationEntry',
        'CultureEventReservationEntry' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventReservationEntry',
        'ExplicitSeatsCultureEventReservationEntry' =>
            'Recreatex\ComplexType\ExplicitSeatsCultureEventReservationEntry',
        'BestAvailableSeatsCultureEventReservationEntry' =>
            'Recreatex\ComplexType\BestAvailableSeatsCultureEventReservationEntry',
        'ArrayOfCultureEventOptionReservation' =>
            'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureEventOptionReservation',
        'CultureEventOptionReservation' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventOptionReservation',
        'ActivityReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityReservation',
        'Activity' => 'TijsVerkoyen\Recreatex\ComplexType\Activity',
        'AgeCategory' => 'TijsVerkoyen\Recreatex\ComplexType\AgeCategory',
        'ArrayOfActivityPart' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivityPart',
        'ActivityPart' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityPart',
        'Period' => 'TijsVerkoyen\Recreatex\ComplexType\Period',
        'ArrayOfActivityOption' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivityOption',
        'ActivityOption' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityOption',
        'ActivityType' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityType',
        'ArrayOfActivityPartReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivityPartReservation',
        'ActivityPartReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityPartReservation',
        'BasketValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\BasketValidationResult',
        'ArrayOfBasketItemValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfBasketItemValidationResult',
        'ForgotPasswordResult' => 'TijsVerkoyen\Recreatex\ComplexType\ForgotPasswordResult',
        'FindPersonsCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\FindPersonsCriteria',
        'PersonIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\PersonIncludes',
        'PagingCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\PagingCriteria',
        'SortingCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\SortingCriteria',
        'ArrayOfPerson' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPerson',
        'ArrayOfActivityType' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivityType',
        'ActivitySearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ActivitySearchCriteria',
        'ActivityIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityIncludes',
        'ArrayOfActivity' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivity',
        'ArticleGroupSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleGroupSearchCriteria',
        'ArrayOfArticleGroup' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleGroup',
        'ArticleCategorySearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleCategorySearchCriteria',
        'ArrayOfArticleCategory' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleCategory',
        'ArticleCategory' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleCategory',
        'ArticleSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleSearchCriteria',
        'ArticleIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleIncludes',
        'ArrayOfExpositionType' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionType',
        'ExpositionType' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionType',
        'ExpositionTypeSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionTypeSearchCriteria',
        'ExpositionTypeIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionTypeIncludes',
        'ExpositionSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionSearchCriteria',
        'ExpositionIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionIncludes',
        'ArrayOfExposition' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExposition',
        'Exposition' => 'TijsVerkoyen\Recreatex\ComplexType\Exposition',
        'ArrayOfAudience' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfAudience',
        'Audience' => 'TijsVerkoyen\Recreatex\ComplexType\Audience',
        'ArrayOfExpositionPeriod' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionPeriod',
        'ExpositionPeriod' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionPeriod',
        'Occupancy' => 'TijsVerkoyen\Recreatex\ComplexType\Occupancy',
        'ArrayOfExpositionPrice' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionPrice',
        'ExpositionPrice' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionPrice',
        'Price' => 'TijsVerkoyen\Recreatex\ComplexType\Price',
        'Vat' => 'TijsVerkoyen\Recreatex\ComplexType\Vat',
        'ExpositionPeriodSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionPeriodSearchCriteria',
        'Basket' => 'TijsVerkoyen\Recreatex\ComplexType\Basket',
        'ArrayOfBasketItem' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfBasketItem',
        'ArrayOfBasketPayment' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfBasketPayment',
        'BasketPayment' => 'TijsVerkoyen\Recreatex\ComplexType\BasketPayment',
        'IncassoBasketPayment' => 'TijsVerkoyen\Recreatex\ComplexType\IncassoBasketPayment',
        'CheckoutBasketResult' => 'TijsVerkoyen\Recreatex\ComplexType\CheckoutBasketResult',
        'ArrayOfSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSalesItem',
        'SalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\SalesItem',
        'ActivityReservationSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityReservationSalesItem',
        'ExpositionSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionSalesItem',
        'CultureEventReservationSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventReservationSalesItem',
        'ArticleSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleSalesItem',
        'LockBasketResult' => 'TijsVerkoyen\Recreatex\ComplexType\LockBasketResult',
        'ArrayOfLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfLockTicket',
        'ExtendedLocks' => 'TijsVerkoyen\Recreatex\ComplexType\ExtendedLocks',
        'ArrayOfBasketPaymentMethod' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfBasketPaymentMethod',
        'BasketPaymentMethod' => 'TijsVerkoyen\Recreatex\ComplexType\BasketPaymentMethod',
        'IncassoBasketPaymentMethod' => 'TijsVerkoyen\Recreatex\ComplexType\IncassoBasketPaymentMethod',
        'ArrayOfIncassoCost' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfIncassoCost',
        'IncassoCost' => 'TijsVerkoyen\Recreatex\ComplexType\IncassoCost',
        'AdditionalCost' => 'TijsVerkoyen\Recreatex\ComplexType\AdditionalCost',
        'ReservationCost' => 'TijsVerkoyen\Recreatex\ComplexType\ReservationCost',
        'AdministrativeCost' => 'TijsVerkoyen\Recreatex\ComplexType\AdministrativeCost',
        'ArrayOfCultureActivity' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureActivity',
        'CultureActivity' => 'TijsVerkoyen\Recreatex\ComplexType\CultureActivity',
        'CultureEventSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventSearchCriteria',
        'CultureEventIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventIncludes',
        'ArrayOfCultureEvent' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureEvent',
        'CultureEvent' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEvent',
        'Hall' => 'TijsVerkoyen\Recreatex\ComplexType\Hall',
        'ArrayOfSeatBlock' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSeatBlock',
        'SeatBlock' => 'TijsVerkoyen\Recreatex\ComplexType\SeatBlock',
        'Location' => 'TijsVerkoyen\Recreatex\ComplexType\Location',
        'ArrayOfSeatRow' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSeatRow',
        'SeatRow' => 'TijsVerkoyen\Recreatex\ComplexType\SeatRow',
        'ArrayOfSeat' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSeat',
        'Seat' => 'TijsVerkoyen\Recreatex\ComplexType\Seat',
        'SeatRange' => 'TijsVerkoyen\Recreatex\ComplexType\SeatRange',
        'ArrayOfCultureEventPrice' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureEventPrice',
        'CultureEventPrice' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventPrice',
        'ArrayOfCultureEventOption' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureEventOption',
        'CultureEventOption' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventOption',
        'CultureEventCategory' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventCategory',
        'ArrayOfHall' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfHall',
        'SeatAllocationsOverview' => 'TijsVerkoyen\Recreatex\ComplexType\SeatAllocationsOverview',
        'SeatAllocationPerHallSummary' => 'TijsVerkoyen\Recreatex\ComplexType\SeatAllocationPerHallSummary',
        'SeatAllocationSummary' => 'TijsVerkoyen\Recreatex\ComplexType\SeatAllocationSummary',
        'SeatAllocationCount' => 'TijsVerkoyen\Recreatex\ComplexType\SeatAllocationCount',
        'SeatAllocationPerBlockSummary' => 'TijsVerkoyen\Recreatex\ComplexType\SeatAllocationPerBlockSummary',
        'ArrayOfSeatAllocationPerBlockSummary' =>
            'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSeatAllocationPerBlockSummary',
        'CultureReservationSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\CultureReservationSearchCriteria',
        'ArrayOfCultureReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureReservation',
        'CultureReservation' => 'TijsVerkoyen\Recreatex\ComplexType\CultureReservation',
        'ArrayOfCultureReservationSeat' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureReservationSeat',
        'CultureReservationSeat' => 'TijsVerkoyen\Recreatex\ComplexType\CultureReservationSeat',
        'ArrayOfCultureEventCategory' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureEventCategory',
        'PriceGroupSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\PriceGroupSearchCriteria',
        'ArrayOfPriceGroup' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPriceGroup',
        'ArrayOfCategory' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCategory',
        'ArrayOfstring' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfstring',
        'ArrayOfGuid' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfGuid',
    );

    /**
     * Default constructor
     *
     * @param string[optional] $server The server to use.
     * @param int[optional]    $port   The port whereon the server is operating.
     */
    public function __construct($server = null, $port = null)
    {
        if ($server !== null) {
            $this->setServer($server);
        }
        if ($port !== null) {
            $this->setPort($port);
        }
    }

    /**
     * Create a service context
     *
     * @param string[optional] $shopId
     * @param string[optional] $divisionId
     * @param string[optional] $language
     */
    public function createServiceContext($shopId = null, $divisionId = null, $language = null)
    {
        $this->serviceContext = new ServiceContext();
        if ($shopId !== null) {
            $this->serviceContext->setShopId(new Guid($shopId));
        }
        if ($divisionId !== null) {
            $this->serviceContext->setDivisionId(new Guid($divisionId));
        }
        if ($language !== null) {
            $this->serviceContext->setLanguage($language);
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
        if (!$this->soapclient) {
            $options = array(
                'trace' => self::DEBUG,
                'exceptions' => false,
                'connection_timeout' => $this->getTimeout(),
                'user_agent' => $this->getUserAgent(),
                'cache_wsdl' => (self::DEBUG) ? WSDL_CACHE_NONE : WSDL_CACHE_BOTH,
                'classmap' => $this->classMaps,
                'typemap' => array(
                    array(
                        'type_ns' => 'http://schemas.microsoft.com/2003/10/Serialization/',
                        'type_name' => 'guid',
                        'from_xml' => array('TijsVerkoyen\Recreatex\SimpleType\Guid', 'fromXml'),
                    ),
                ),
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
     * @param mixed  $response
     * @param string $method
     */
    protected function isValidResponse($response, $propertyName = null)
    {
        // soapfault?
        if ($response instanceof \SoapFault) {
            if (self::DEBUG) {
                var_dump($this);
            }

            throw new Exception($response->getMessage(), $response->getCode());
        }

        // valid response?
        if ($propertyName !== null && !isset($response->{$propertyName})) {
            if (self::DEBUG) {
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
    public function isAvailable()
    {
        $response = $this->getSoapClient()->IsAvailable();
        $this->isValidResponse($response, 'IsAvailableResult');

        return $response->IsAvailableResult;
    }

    /**
     * @param  Credential           $Credentials
     * @return AuthenticationResult
     */
    public function authenticateUser(Credential $Credentials)
    {
        $response = $this->getSoapClient()->AuthenticateUser(
            $this->getServiceContext(),
            $Credentials
        );
        $this->isValidResponse($response);

        return $response;
    }

    /**
     * @param  ServiceContext   $Context
     * @param  Person           $Person
     * @return SavePersonResult
     */
    public function savePerson(ServiceContext $Context, Person $Person)
    {
        return $this->getSoapClient()->SavePerson(array($Context, $Person));
    }

    /**
     * @param  ServiceContext   $Context
     * @param  Person           $Person
     * @return SavePersonResult
     */
    public function savePersonSubcategories(ServiceContext $Context, Person $Person)
    {
        return $this->getSoapClient()->SavePersonSubcategories(array($Context, $Person));
    }

    /**
     * @param  ServiceContext       $Context
     * @param  string               $Login
     * @return ForgotPasswordResult
     */
    public function forgotPassword(ServiceContext $Context, string $Login)
    {
        return $this->getSoapClient()->ForgotPassword(array($Context, $Login));
    }

    /**
     * Find persons
     *
     * @param  FindPersonsCriteria $Criteria
     * @return array
     */
    public function findPerson(FindPersonsCriteria $Criteria = null)
    {
        $response = $this->getSoapClient()->FindPerson(
            $this->getServiceContext(),
            $Criteria
        );
        $this->isValidResponse($response);

        return $response->getPerson();
    }

    /**
     * @param  ServiceContext   $Context
     * @param  Person           $Person
     * @return SavePersonResult
     */
    public function savePersonPriceGroups(
        ServiceContext $Context,
        Person $Person
    ) {
        return $this->getSoapClient()->SavePersonPriceGroups(array($Context, $Person));
    }

    /**
     * @param  ServiceContext      $Context
     * @return ArrayOfActivityType
     */
    public function listActivityTypes(ServiceContext $Context)
    {
        return $this->getSoapClient()->ListActivityTypes($Context->toArray());
    }

    /**
     * @param  ActivitySearchCriteria $ActivitySearchCriteria
     * @return array
     */
    public function findActivities(ActivitySearchCriteria $ActivitySearchCriteria)
    {
        $response = $this->getSoapClient()->FindActivities(
            $ActivitySearchCriteria,
            $this->getServiceContext()
        );
        $this->isValidResponse($response);

        return $response;
    }

    /**
     * @param  ArticleGroupSearchCriteria $ArticleGroupSearchCriteria
     * @param  ServiceContext             $Context
     * @return ArrayOfArticleGroup
     */
    public function listArticleGroups(ArticleGroupSearchCriteria $ArticleGroupSearchCriteria, ServiceContext $Context)
    {
        return $this->getSoapClient()->ListArticleGroups(array($ArticleGroupSearchCriteria, $Context));
    }

    /**
     * @param  ArticleCategorySearchCriteria $ArticleCategorySearchCriteria
     * @return array
     */
    public function findArticleCategories(
        ArticleCategorySearchCriteria $ArticleCategorySearchCriteria
    ) {
        $response = $this->getSoapClient()->FindArticleCategories(
            $ArticleCategorySearchCriteria,
            $this->getServiceContext()
        );
        $this->isValidResponse($response);

        return $response->getArticleCategory();
    }

    /**
     * @param  ArticleSearchCriteria $ArticleSearchCriteria
     * @return array
     */
    public function findArticles(ArticleSearchCriteria $ArticleSearchCriteria)
    {
        $response = $this->getSoapClient()->FindArticles(
            $ArticleSearchCriteria,
            $this->getServiceContext()
        );
        $this->isValidResponse($response);

        return $response->getArticle();
    }

    /**
     * @param  ServiceContext        $Context
     * @return ArrayOfExpositionType
     */
    public function listExpositionTypes(ServiceContext $Context)
    {
        return $this->getSoapClient()->ListExpositionTypes($Context->toArray());
    }

    /**
     * @param  ServiceContext               $Context
     * @param  ExpositionTypeSearchCriteria $ExpositionTypeSearchCriteria
     * @return ArrayOfExpositionType
     */
    public function findExpositionTypes(
        ServiceContext $Context,
        ExpositionTypeSearchCriteria $ExpositionTypeSearchCriteria
    ) {
        return $this->getSoapClient()->FindExpositionTypes(
            array($Context, $ExpositionTypeSearchCriteria)
        );
    }

    /**
     * @param  ExpositionSearchCriteria $ExpositionSearchCriteria
     * @return array
     */
    public function findExpositions(
        ExpositionSearchCriteria $ExpositionSearchCriteria
    ) {
        $response = $this->getSoapClient()->FindExpositions(
            $this->getServiceContext(),
            $ExpositionSearchCriteria
        );
        $this->isValidResponse($response);

        return $response->getExposition();
    }

    /**
     * @param  ServiceContext                 $Context
     * @param  ExpositionPeriodSearchCriteria $ExpositionPeriodSearchCriteria
     * @return ArrayOfExpositionPeriod
     */
    public function listExpositionPeriods(
        ServiceContext $Context,
        ExpositionPeriodSearchCriteria $ExpositionPeriodSearchCriteria
    ) {
        return $this->getSoapClient()->ListExpositionPeriods(
            array($Context, $ExpositionPeriodSearchCriteria)
        );
    }

    /**
     * @param  ServiceContext  $Context
     * @return ArrayOfAudience
     */
    public function listAudiences(ServiceContext $Context)
    {
        return $this->getSoapClient()->ListAudiences($Context->toArray());
    }

    /**
     * @param  Basket                 $Basket
     * @param  ServiceContext         $Context
     * @return BasketValidationResult
     */
    public function validateBasket(Basket $Basket, ServiceContext $Context)
    {
        return $this->getSoapClient()->ValidateBasket(array($Basket, $Context));
    }

    /**
     * @param  BasketItem                 $BasketItem
     * @param  ServiceContext             $Context
     * @return BasketItemValidationResult
     */
    public function validateBasketItem(BasketItem $BasketItem, ServiceContext $Context)
    {
        return $this->getSoapClient()->ValidateBasketItem(array($BasketItem, $Context));
    }

    /**
     * @param  Basket               $Basket
     * @param  ServiceContext       $Context
     * @return CheckoutBasketResult
     */
    public function checkoutBasket(Basket $Basket, ServiceContext $Context)
    {
        return $this->getSoapClient()->CheckoutBasket(array($Basket, $Context));
    }

    /**
     * @param  ArrayOfBasketItem $BasketItems
     * @param  ServiceContext    $Context
     * @return LockBasketResult
     */
    public function lockBasketItems(ArrayOfBasketItem $BasketItems, ServiceContext $Context)
    {
        return $this->getSoapClient()->LockBasketItems(array($BasketItems, $Context));
    }

    /**
     * @param  ServiceContext    $Context
     * @param  ArrayOfLockTicket $LockTickets
     * @return void
     */
    public function unlockBasketItems(ServiceContext $Context, ArrayOfLockTicket $LockTickets)
    {
        return $this->getSoapClient()->UnlockBasketItems(array($Context, $LockTickets));
    }

    /**
     * @param  Basket         $Basket
     * @param  ServiceContext $Context
     * @return Basket
     */
    public function reCalculateBasket(Basket $Basket, ServiceContext $Context)
    {
        return $this->getSoapClient()->ReCalculateBasket(array($Basket, $Context));
    }

    /**
     * @param  ServiceContext    $Context
     * @param  ArrayOfLockTicket $LockTickets
     * @return ExtendedLocks
     */
    public function extendLockPeriod(
        ServiceContext $Context,
        ArrayOfLockTicket $LockTickets
    ) {
        return $this->getSoapClient()->ExtendLockPeriod(
            array($Context, $LockTickets)
        );
    }

    /**
     * @param  ServiceContext             $Context
     * @return ArrayOfBasketPaymentMethod
     */
    public function listPaymentMethods(ServiceContext $Context)
    {
        return $this->getSoapClient()->ListPaymentMethods($Context->toArray());
    }

    /**
     * @param  ServiceContext         $Context
     * @return ArrayOfCultureActivity
     */
    public function listCultureActivities(ServiceContext $Context)
    {
        return $this->getSoapClient()->ListCultureActivities($Context->toArray());
    }

    /**
     * @param  CultureEventSearchCriteria $CultureEventSearchCriteria
     * @return array
     */
    public function findCultureEvents(
        CultureEventSearchCriteria $CultureEventSearchCriteria
    ) {
        $response = $this->getSoapClient()->FindCultureEvents(
            $this->getServiceContext(),
            $CultureEventSearchCriteria
        );
        $this->isValidResponse($response);

        return $response->getCultureEvent();
    }

    /**
     * @param  ServiceContext $Context
     * @return ArrayOfHall
     */
    public function listHalls(ServiceContext $Context)
    {
        return $this->getSoapClient()->ListHalls($Context->toArray());
    }

    /**
     * @param  ServiceContext $Context
     * @param  Guid           $HallId
     * @return Hall
     */
    public function getHallSeating(ServiceContext $Context, Guid $HallId)
    {
        return $this->getSoapClient()->GetHallSeating(array($Context, $HallId));
    }

    /**
     * @param  SeatAllocationIncludes  $AllocationIncludes
     * @param  ServiceContext          $Context
     * @param  Guid                    $CultureEventId
     * @param  string                  $SeatBlockCode
     * @return SeatAllocationsOverview
     */
    public function getSeatAllocations(
        SeatAllocationIncludes $AllocationIncludes,
        ServiceContext $Context,
        Guid $CultureEventId,
        string $SeatBlockCode
    ) {
        return $this->getSoapClient()->GetSeatAllocations(
            array($AllocationIncludes, $Context, $CultureEventId, $SeatBlockCode)
        );
    }

    /**
     * @param  CultureReservationSearchCriteria $CultureReservationSearchCriteria
     * @return array
     */
    public function findCultureReservations(
        CultureReservationSearchCriteria $CultureReservationSearchCriteria
    ) {
        $response = $this->getSoapClient()->FindCultureReservations(
            $this->getServiceContext(),
            $CultureReservationSearchCriteria
        );
        $this->isValidResponse($response);

        return $response->getCultureReservation();
    }

    /**
     * @param  ServiceContext              $Context
     * @return ArrayOfCultureEventCategory
     */
    public function listCultureEventCategories(ServiceContext $Context)
    {
        return $this->getSoapClient()->ListCultureEventCategories(
            $Context->toArray()
        );
    }

    /**
     * @param  ServiceContext           $Context
     * @param  PriceGroupSearchCriteria $PriceGroupSearchCriteria
     * @return ArrayOfPriceGroup
     */
    public function findPriceGroups(
        ServiceContext $Context,
        PriceGroupSearchCriteria $PriceGroupSearchCriteria
    ) {
        return $this->getSoapClient()->FindPriceGroups(
            array(
                 $Context,
                 $PriceGroupSearchCriteria
            )
        );
    }

    /**
     * @param  ServiceContext  $Context
     * @return ArrayOfCategory
     */
    public function listCategories(ServiceContext $Context)
    {
        return $this->getSoapClient()->ListCategories($Context->toArray());
    }
}
