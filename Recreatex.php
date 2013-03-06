<?php

namespace TijsVerkoyen\Recreatex;

use SoapClient as BaseSoapClient;
use TijsVerkoyen\Recreatex\ComplexType\ActivitySearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ArticleCategorySearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ArticleSearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\Credential;
use TijsVerkoyen\Recreatex\ComplexType\CultureEventSearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\CultureReservationSearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ExpositionSearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ExpositionTypeSearchCriteria;
use TijsVerkoyen\Recreatex\ComplexType\FindPersonsCriteria;
use TijsVerkoyen\Recreatex\ComplexType\ServiceContext;
use TijsVerkoyen\Recreatex\SimpleType\Guid;

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
    private $timeOut = 30;

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
        'Activity' => 'TijsVerkoyen\Recreatex\ComplexType\Activity',
        'ActivityIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityIncludes',
        'ActivityOption' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityOption',
        'ActivityPart' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityPart',
        'ActivityPartReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityPartReservation',
        'ActivityReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityReservation',
        'ActivityReservationLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityReservationLockTicket',
        'ActivityReservationSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityReservationSalesItem',
        'ActivitySearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ActivitySearchCriteria',
        'ActivityType' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityType',
        'AdditionalCost' => 'TijsVerkoyen\Recreatex\ComplexType\AdditionalCost',
        'Address' => 'TijsVerkoyen\Recreatex\ComplexType\Address',
        'AdministrativeCost' => 'TijsVerkoyen\Recreatex\ComplexType\AdministrativeCost',
        'AgeCategory' => 'TijsVerkoyen\Recreatex\ComplexType\AgeCategory',
        'ArrayOfActivity' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivity',
        'ArrayOfActivityOption' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivityOption',
        'ArrayOfActivityPart' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivityPart',
        'ArrayOfActivityPartReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivityPartReservation',
        'ArrayOfActivityType' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivityType',
        'ArrayOfArticle' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticle',
        'ArrayOfArticleCategory' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleCategory',
        'ArrayOfArticleGroup' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleGroup',
        'ArrayOfArticleIngredient' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleIngredient',
        'ArrayOfArticleOption' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleOption',
        'ArrayOfArticleOptionValue' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleOptionValue',
        'ArrayOfAudience' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfAudience',
        'ArrayOfBasketItem' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfBasketItem',
        'ArrayOfBasketItemValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfBasketItemValidationResult',
        'ArrayOfBasketPayment' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfBasketPayment',
        'ArrayOfBasketPaymentMethod' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfBasketPaymentMethod',
        'ArrayOfCategory' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCategory',
        'ArrayOfCultureActivity' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureActivity',
        'ArrayOfCultureEvent' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureEvent',
        'ArrayOfCultureEventCategory' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureEventCategory',
        'ArrayOfCultureEventOption' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureEventOption',
        'ArrayOfCultureEventOptionReservation' =>
            'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureEventOptionReservation',
        'ArrayOfCultureEventPrice' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureEventPrice',
        'ArrayOfCultureEventReservationEntry' =>
            'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureEventReservationEntry',
        'ArrayOfCultureReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureReservation',
        'ArrayOfCultureReservationSeat' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureReservationSeat',
        'ArrayOfExposition' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExposition',
        'ArrayOfExpositionPeriod' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionPeriod',
        'ArrayOfExpositionPeriodReservationEntry' =>
            'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionPeriodReservationEntry',
        'ArrayOfExpositionPrice' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionPrice',
        'ArrayOfExpositionType' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionType',
        'ArrayOfGuid' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfGuid',
        'ArrayOfHall' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfHall',
        'ArrayOfIncassoCost' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfIncassoCost',
        'ArrayOfLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfLockTicket',
        'ArrayOfPerson' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPerson',
        'ArrayOfPersonPriceGroup' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPersonPriceGroup',
        'ArrayOfPriceGroup' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPriceGroup',
        'ArrayOfRelation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfRelation',
        'ArrayOfSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSalesItem',
        'ArrayOfSeat' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSeat',
        'ArrayOfSeatAllocation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSeatAllocation',
        'ArrayOfSeatAllocationPerBlockSummary' =>
            'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSeatAllocationPerBlockSummary',
        'ArrayOfSeatBlock' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSeatBlock',
        'ArrayOfSeatRow' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSeatRow',
        'ArrayOfStockLocation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfStockLocation',
        'ArrayOfstring' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfstring',
        'ArrayOfSubcategory' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSubcategory',
        'ArrayOfValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfValidationResult',
        'Article' => 'TijsVerkoyen\Recreatex\ComplexType\Article',
        'ArticleCategory' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleCategory',
        'ArticleCategorySearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleCategorySearchCriteria',
        'ArticleGroup' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleGroup',
        'ArticleGroupSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleGroupSearchCriteria',
        'ArticleIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleIncludes',
        'ArticleIngredient' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleIngredient',
        'ArticleOption' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleOption',
        'ArticleOptionValue' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleOptionValue',
        'ArticleSale' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleSale',
        'ArticleSaleLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleSaleLockTicket',
        'ArticleSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleSalesItem',
        'ArticleSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleSearchCriteria',
        'Audience' => 'TijsVerkoyen\Recreatex\ComplexType\Audience',
        'AuthenticationResult' => 'TijsVerkoyen\Recreatex\ComplexType\AuthenticationResult',
        'Basket' => 'TijsVerkoyen\Recreatex\ComplexType\Basket',
        'BasketItem' => 'TijsVerkoyen\Recreatex\ComplexType\BasketItem',
        'BasketItemValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\BasketItemValidationResult',
        'BasketPayment' => 'TijsVerkoyen\Recreatex\ComplexType\BasketPayment',
        'BasketPaymentMethod' => 'TijsVerkoyen\Recreatex\ComplexType\BasketPaymentMethod',
        'BasketValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\BasketValidationResult',
        'BestAvailableSeatsCultureEventReservationEntry' =>
            'TijsVerkoyen\Recreatex\ComplexType\BestAvailableSeatsCultureEventReservationEntry',
        'Category' => 'TijsVerkoyen\Recreatex\ComplexType\Category',
        'CheckoutBasketResult' => 'TijsVerkoyen\Recreatex\ComplexType\CheckoutBasketResult',
        'ComplexTypeAbstract' => 'TijsVerkoyen\Recreatex\ComplexType\ComplexTypeAbstract',
        'Credential' => 'TijsVerkoyen\Recreatex\ComplexType\Credential',
        'CultureActivity' => 'TijsVerkoyen\Recreatex\ComplexType\CultureActivity',
        'CultureEvent' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEvent',
        'CultureEventCategory' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventCategory',
        'CultureEventIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventIncludes',
        'CultureEventOption' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventOption',
        'CultureEventOptionReservation' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventOptionReservation',
        'CultureEventPrice' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventPrice',
        'CultureEventReservation' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventReservation',
        'CultureEventReservationEntry' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventReservationEntry',
        'CultureEventReservationLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventReservationLockTicket',
        'CultureEventReservationSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventReservationSalesItem',
        'CultureEventSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventSearchCriteria',
        'CultureReservation' => 'TijsVerkoyen\Recreatex\ComplexType\CultureReservation',
        'CultureReservationSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\CultureReservationSearchCriteria',
        'CultureReservationSeat' => 'TijsVerkoyen\Recreatex\ComplexType\CultureReservationSeat',
        'ExplicitSeatsCultureEventReservationEntry' =>
            'TijsVerkoyen\Recreatex\ComplexType\ExplicitSeatsCultureEventReservationEntry',
        'Exposition' => 'TijsVerkoyen\Recreatex\ComplexType\Exposition',
        'ExpositionIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionIncludes',
        'ExpositionPeriod' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionPeriod',
        'ExpositionPeriodReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionPeriodReservation',
        'ExpositionPeriodReservationEntry' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionPeriodReservationEntry',
        'ExpositionPeriodSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionPeriodSearchCriteria',
        'ExpositionPrice' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionPrice',
        'ExpositionReservationLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionReservationLockTicket',
        'ExpositionSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionSalesItem',
        'ExpositionSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionSearchCriteria',
        'ExpositionType' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionType',
        'ExpositionTypeIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionTypeIncludes',
        'ExpositionTypeSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionTypeSearchCriteria',
        'ExtendedLocks' => 'TijsVerkoyen\Recreatex\ComplexType\ExtendedLocks',
        'FamilyRelation' => 'TijsVerkoyen\Recreatex\ComplexType\FamilyRelation',
        'FindPersonsCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\FindPersonsCriteria',
        'ForgotPasswordResult' => 'TijsVerkoyen\Recreatex\ComplexType\ForgotPasswordResult',
        'Hall' => 'TijsVerkoyen\Recreatex\ComplexType\Hall',
        'IncassoBasketPayment' => 'TijsVerkoyen\Recreatex\ComplexType\IncassoBasketPayment',
        'IncassoBasketPaymentMethod' => 'TijsVerkoyen\Recreatex\ComplexType\IncassoBasketPaymentMethod',
        'IncassoCost' => 'TijsVerkoyen\Recreatex\ComplexType\IncassoCost',
        'Location' => 'TijsVerkoyen\Recreatex\ComplexType\Location',
        'LockBasketResult' => 'TijsVerkoyen\Recreatex\ComplexType\LockBasketResult',
        'LockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\LockTicket',
        'Occupancy' => 'TijsVerkoyen\Recreatex\ComplexType\Occupancy',
        'PagingCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\PagingCriteria',
        'Period' => 'TijsVerkoyen\Recreatex\ComplexType\Period',
        'Person' => 'TijsVerkoyen\Recreatex\ComplexType\Person',
        'PersonIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\PersonIncludes',
        'PersonName' => 'TijsVerkoyen\Recreatex\ComplexType\PersonName',
        'PersonPriceGroup' => 'TijsVerkoyen\Recreatex\ComplexType\PersonPriceGroup',
        'PersonSettings' => 'TijsVerkoyen\Recreatex\ComplexType\PersonSettings',
        'Picture' => 'TijsVerkoyen\Recreatex\ComplexType\Picture',
        'Price' => 'TijsVerkoyen\Recreatex\ComplexType\Price',
        'PriceGroup' => 'TijsVerkoyen\Recreatex\ComplexType\PriceGroup',
        'PriceGroupSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\PriceGroupSearchCriteria',
        'Relation' => 'TijsVerkoyen\Recreatex\ComplexType\Relation',
        'ReservationCost' => 'TijsVerkoyen\Recreatex\ComplexType\ReservationCost',
        'SalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\SalesItem',
        'SavePersonResult' => 'TijsVerkoyen\Recreatex\ComplexType\SavePersonResult',
        'Seat' => 'TijsVerkoyen\Recreatex\ComplexType\Seat',
        'SeatAllocation' => 'TijsVerkoyen\Recreatex\ComplexType\SeatAllocation',
        'SeatAllocationCount' => 'TijsVerkoyen\Recreatex\ComplexType\SeatAllocationCount',
        'SeatAllocationPerBlockSummary' => 'TijsVerkoyen\Recreatex\ComplexType\SeatAllocationPerBlockSummary',
        'SeatAllocationPerHallSummary' => 'TijsVerkoyen\Recreatex\ComplexType\SeatAllocationPerHallSummary',
        'SeatAllocationsOverview' => 'TijsVerkoyen\Recreatex\ComplexType\SeatAllocationsOverview',
        'SeatAllocationSummary' => 'TijsVerkoyen\Recreatex\ComplexType\SeatAllocationSummary',
        'SeatBlock' => 'TijsVerkoyen\Recreatex\ComplexType\SeatBlock',
        'SeatRange' => 'TijsVerkoyen\Recreatex\ComplexType\SeatRange',
        'SeatRow' => 'TijsVerkoyen\Recreatex\ComplexType\SeatRow',
        'ServiceContext' => 'TijsVerkoyen\Recreatex\ComplexType\ServiceContext',
        'SortingCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\SortingCriteria',
        'StockLocation' => 'TijsVerkoyen\Recreatex\ComplexType\StockLocation',
        'Subcategory' => 'TijsVerkoyen\Recreatex\ComplexType\Subcategory',
        'ValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\ValidationResult',
        'Vat' => 'TijsVerkoyen\Recreatex\ComplexType\Vat',

        'ArticleSalesOrderType' => 'TijsVerkoyen\Recreatex\SimpleType\ArticleSalesOrderType',
        'ArticleType' => 'TijsVerkoyen\Recreatex\SimpleType\ArticleType',
        'AuthenticationError' => 'TijsVerkoyen\Recreatex\SimpleType\AuthenticationError',
        'BustripStates' => 'TijsVerkoyen\Recreatex\SimpleType\BustripStates',
        'CalculationType' => 'TijsVerkoyen\Recreatex\SimpleType\CalculationType',
        'Char' => 'TijsVerkoyen\Recreatex\SimpleType\Char',
        'CheckoutResultState' => 'TijsVerkoyen\Recreatex\SimpleType\CheckoutResultState',
        'CultureEventStatus' => 'TijsVerkoyen\Recreatex\SimpleType\CultureEventStatus',
        'Duration' => 'TijsVerkoyen\Recreatex\SimpleType\Duration',
        'FitnessActivityReservationStatus' => 'TijsVerkoyen\Recreatex\SimpleType\FitnessActivityReservationStatus',
        'FrequencyTypes' => 'TijsVerkoyen\Recreatex\SimpleType\FrequencyTypes',
        'Gender' => 'TijsVerkoyen\Recreatex\SimpleType\Gender',
        'Guid' => 'TijsVerkoyen\Recreatex\SimpleType\Guid',
        'PersonPriceGroupType' => 'TijsVerkoyen\Recreatex\SimpleType\PersonPriceGroupType',
        'PersonType' => 'TijsVerkoyen\Recreatex\SimpleType\PersonType',
        'PriceGroupType' => 'TijsVerkoyen\Recreatex\SimpleType\PriceGroupType',
        'PurchaseArticleCalculationType' => 'TijsVerkoyen\Recreatex\SimpleType\PurchaseArticleCalculationType',
        'PurchaseOrderState' => 'TijsVerkoyen\Recreatex\SimpleType\PurchaseOrderState',
        'RcxWsdlModules' => 'TijsVerkoyen\Recreatex\SimpleType\RcxWsdlModules',
        'ReasonType' => 'TijsVerkoyen\Recreatex\SimpleType\ReasonType',
        'RelationType' => 'TijsVerkoyen\Recreatex\SimpleType\RelationType',
        'RentalAdministrativeStatus' => 'TijsVerkoyen\Recreatex\SimpleType\RentalAdministrativeStatus',
        'RentalCalculationType' => 'TijsVerkoyen\Recreatex\SimpleType\RentalCalculationType',
        'RentalOrderStatus' => 'TijsVerkoyen\Recreatex\SimpleType\RentalOrderStatus',
        'RentalPriceCalculationType' => 'TijsVerkoyen\Recreatex\SimpleType\RentalPriceCalculationType',
        'ResultState' => 'TijsVerkoyen\Recreatex\SimpleType\ResultState',
        'SeatAllocationIncludes' => 'TijsVerkoyen\Recreatex\SimpleType\SeatAllocationIncludes',
        'SeatAllocationStatus' => 'TijsVerkoyen\Recreatex\SimpleType\SeatAllocationStatus',
        'SimpleTypeAbstract' => 'TijsVerkoyen\Recreatex\SimpleType\SimpleTypeAbstract',
        'SiteAllocationIncludes' => 'TijsVerkoyen\Recreatex\SimpleType\SiteAllocationIncludes',
        'StudentFollowTransferFeedback' => 'TijsVerkoyen\Recreatex\SimpleType\StudentFollowTransferFeedback',
        'SubscriptionLogSubType' => 'TijsVerkoyen\Recreatex\SimpleType\SubscriptionLogSubType',
        'SubscriptionLogType' => 'TijsVerkoyen\Recreatex\SimpleType\SubscriptionLogType',
        'SubscriptionType' => 'TijsVerkoyen\Recreatex\SimpleType\SubscriptionType',
        'WarrantyCalculationType' => 'TijsVerkoyen\Recreatex\SimpleType\WarrantyCalculationType',
        'WeekDay' => 'TijsVerkoyen\Recreatex\SimpleType\WeekDay',
        'WeekDays' => 'TijsVerkoyen\Recreatex\SimpleType\WeekDays',
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
     * @param  ExpositionTypeSearchCriteria $ExpositionTypeSearchCriteria
     * @return array
     */
    public function findExpositionTypes(
        ExpositionTypeSearchCriteria $ExpositionTypeSearchCriteria
    ) {
        $response = $this->getSoapClient()->FindExpositionTypes(
            $this->getServiceContext(),
            $ExpositionTypeSearchCriteria
        );
        $this->isValidResponse($response);

        return $response->getExpositionType();
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
