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
     * @var int
     */
    private $port;

    /**
     * The server to use.
     * @var string
     */
    private $server;

    /**
     * The ServiceContext to use
     * @var ServiceContext
     */
    private $serviceContext;

    /**
     * The soapclient
     * @var BaseSoapClient
     */
    private $soapclient;

    /**
     * The timeout
     * @var int
     */
    private $timeOut = 30;

    /**
     * The user agent
     * @var string
     */
    private $userAgent;

    /**
     * @var array
     */
    private $classMaps = array(
        'AbsentReason' => 'TijsVerkoyen\Recreatex\ComplexType\AbsentReason',
        'AbsentReasonSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\AbsentReasonSearchCriteria',
        'Activity' => 'TijsVerkoyen\Recreatex\ComplexType\Activity',
        'ActivityIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityIncludes',
        'ActivityOption' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityOption',
        'ActivityPart' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityPart',
        'ActivityParticipantReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityParticipantReservation',
        'ActivityPartReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityPartReservation',
        'ActivityReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityReservation',
        'ActivityReservationLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityReservationLockTicket',
        'ActivityReservationSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityReservationSalesItem',
        'ActivitySearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ActivitySearchCriteria',
        'ActivityType' => 'TijsVerkoyen\Recreatex\ComplexType\ActivityType',
        'AdditionalCost' => 'TijsVerkoyen\Recreatex\ComplexType\AdditionalCost',
        'Address' => 'TijsVerkoyen\Recreatex\ComplexType\Address',
        'AddressLocation' => 'TijsVerkoyen\Recreatex\ComplexType\AddressLocation',
        'AddressName' => 'TijsVerkoyen\Recreatex\ComplexType\AddressName',
        'AdministrativeCost' => 'TijsVerkoyen\Recreatex\ComplexType\AdministrativeCost',
        'AgeCategory' => 'TijsVerkoyen\Recreatex\ComplexType\AgeCategory',
        'ArrayOfAbsentReason' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfAbsentReason',
        'ArrayOfActivity' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivity',
        'ArrayOfActivityOption' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivityOption',
        'ArrayOfActivityPart' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivityPart',
        'ArrayOfActivityParticipantReservation' =>
            'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivityParticipantReservation',
        'ArrayOfActivityPartReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivityPartReservation',
        'ArrayOfActivityType' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfActivityType',
        'ArrayOfAdditionalCost' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfAdditionalCost',
        'ArrayOfAddressLocation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfAddressLocation',
        'ArrayOfArticle' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticle',
        'ArrayOfArticleCategory' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleCategory',
        'ArrayOfArticleGroup' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleGroup',
        'ArrayOfArticleIngredient' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleIngredient',
        'ArrayOfArticleOption' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleOption',
        'ArrayOfArticleOptionValue' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleOptionValue',
        'ArrayOfArticleSale' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleSale',
        'ArrayOfArticleSalesOrder' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleSalesOrder',
        'ArrayOfArticleUnit' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfArticleUnit',
        'ArrayOfAudience' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfAudience',
        'ArrayOfBasketItem' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfBasketItem',
        'ArrayOfBasketItemValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfBasketItemValidationResult',
        'ArrayOfBasketPayment' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfBasketPayment',
        'ArrayOfBasketPaymentMethod' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfBasketPaymentMethod',
        'ArrayOfBusTripRequest' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfBusTripRequest',
        'ArrayOfBusTripValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfBusTripValidationResult',
        'ArrayOfCategory' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCategory',
        'ArrayOfChildCareCentre' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfChildCareCentre',
        'ArrayOfChildCareCentreEntry' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfChildCareCentreEntry',
        'ArrayOfChildCareCentrePeriod' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfChildCareCentrePeriod',
        'ArrayOfChildCareCentrePresence' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfChildCareCentrePresence',
        'ArrayOfChildCareCentrePresenceHeader' =>
            'TijsVerkoyen\Recreatex\ComplexType\ArrayOfChildCareCentrePresenceHeader',
        'ArrayOfContact' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfContact',
        'ArrayOfCountry' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCountry',
        'ArrayOfCounty' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCounty',
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
        'ArrayOfCultureReservationSite' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureReservationSite',
        'ArrayOfCultureReservationSitePlace' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureReservationSitePlace',
        'ArrayOfCultureSite' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureSite',
        'ArrayOfCultureWaitingListReservation' =>
            'TijsVerkoyen\Recreatex\ComplexType\ArrayOfCultureWaitingListReservation',
        'ArrayOfdateTime' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfdateTime',
        'ArrayOfDeliveryAddress' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfDeliveryAddress',
        'ArrayOfEmployee' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfEmployee',
        'ArrayOfEntry' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfEntry',
        'ArrayOfExposition' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExposition',
        'ArrayOfExpositionCategory' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionCategory',
        'ArrayOfExpositionPeriod' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionPeriod',
        'ArrayOfExpositionPeriodReservationEntry' =>
            'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionPeriodReservationEntry',
        'ArrayOfExpositionPrice' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionPrice',
        'ArrayOfExpositionSubcategory' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionSubcategory',
        'ArrayOfExpositionType' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfExpositionType',
        'ArrayOfFitnessActivity' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfFitnessActivity',
        'ArrayOfFitnessActivityDay' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfFitnessActivityDay',
        'ArrayOfFitnessActivityDaySlot' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfFitnessActivityDaySlot',
        'ArrayOfFitnessActivityReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfFitnessActivityReservation',
        'ArrayOfGuid' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfGuid',
        'ArrayOfHall' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfHall',
        'ArrayOfIncassoCost' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfIncassoCost',
        'ArrayOfInfrastructure' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfInfrastructure',
        'ArrayOfInfrastructureOpeningHours' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfInfrastructureOpeningHours',
        'ArrayOfInvalidPeriod' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfInvalidPeriod',
        'ArrayOfLanguage' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfLanguage',
        'ArrayOfLessonGroup' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfLessonGroup',
        'ArrayOfLLVMessageTranslation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfLLVMessageTranslation',
        'ArrayOfLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfLockTicket',
        'ArrayOfNorm' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfNorm',
        'ArrayOfOpeningHour' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfOpeningHour',
        'ArrayOfOrganisedVisit' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfOrganisedVisit',
        'ArrayOfOrganisedVisitArticle' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfOrganisedVisitArticle',
        'ArrayOfOrganisedVisitPeriodReservation' =>
            'TijsVerkoyen\Recreatex\ComplexType\ArrayOfOrganisedVisitPeriodReservation',
        'ArrayOfPeriod' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPeriod',
        'ArrayOfPerson' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPerson',
        'ArrayOfPersonCard' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPersonCard',
        'ArrayOfPersonChipKnipLine' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPersonChipKnipLine',
        'ArrayOfPersonCreditLine' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPersonCreditLine',
        'ArrayOfPersonFunction' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPersonFunction',
        'ArrayOfPersonLLVInfo' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPersonLLVInfo',
        'ArrayOfPersonLLVTransferHistory' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPersonLLVTransferHistory',
        'ArrayOfPersonPriceGroup' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPersonPriceGroup',
        'ArrayOfPersonTitle' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPersonTitle',
        'ArrayOfPicture' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPicture',
        'ArrayOfPlace' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPlace',
        'ArrayOfPlaceReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPlaceReservation',
        'ArrayOfPlaceReservationLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPlaceReservationLockTicket',
        'ArrayOfPriceGroup' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPriceGroup',
        'ArrayOfPriceGroupActivity' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPriceGroupActivity',
        'ArrayOfPurchaseArticle' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPurchaseArticle',
        'ArrayOfPurchaseLine' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPurchaseLine',
        'ArrayOfPurchaseOrder' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfPurchaseOrder',
        'ArrayOfRcxWsdlModules' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfRcxWsdlModules',
        'ArrayOfReason' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfReason',
        'ArrayOfRelation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfRelation',
        'ArrayOfRentalArticle' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfRentalArticle',
        'ArrayOfRentalArticleComponent' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfRentalArticleComponent',
        'ArrayOfRentalOrder' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfRentalOrder',
        'ArrayOfRentalOrderLine' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfRentalOrderLine',
        'ArrayOfRentalReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfRentalReservation',
        'ArrayOfReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfReservation',
        'ArrayOfReservationActivity' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfReservationActivity',
        'ArrayOfReservationView' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfReservationView',
        'ArrayOfReservationViewPlace' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfReservationViewPlace',
        'ArrayOfSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSalesItem',
        'ArrayOfSeat' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSeat',
        'ArrayOfSeatAllocation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSeatAllocation',
        'ArrayOfSeatAllocationPerBlockSummary' =>
            'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSeatAllocationPerBlockSummary',
        'ArrayOfSeatBlock' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSeatBlock',
        'ArrayOfSeatRow' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSeatRow',
        'ArrayOfSiteAllocation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSiteAllocation',
        'ArrayOfStockLocation' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfStockLocation',
        'ArrayOfstring' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfstring',
        'ArrayOfStudentFollowScore' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfStudentFollowScore',
        'ArrayOfStudentPresence' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfStudentPresence',
        'ArrayOfSubcategory' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSubcategory',
        'ArrayOfSubscription' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSubscription',
        'ArrayOfSubscriptionArticle' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSubscriptionArticle',
        'ArrayOfSubscriptionLog' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSubscriptionLog',
        'ArrayOfSwimmingDiploma' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSwimmingDiploma',
        'ArrayOfSwimmingLevel' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfSwimmingLevel',
        'ArrayOfValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfValidationResult',
        'ArrayOfVendor' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfVendor',
        'ArrayOfVendorArticle' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfVendorArticle',
        'ArrayOfVendorContact' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfVendorContact',
        'ArrayOfVendorGroup' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfVendorGroup',
        'ArrayOfWaitingList' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfWaitingList',
        'ArrayOfWaitingListStudent' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfWaitingListStudent',
        'ArrayOfWeekDayRange' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfWeekDayRange',
        'ArrayOfZipcode' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfZipcode',
        'ArrayOfZipcodeCendrisStreet' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfZipcodeCendrisStreet',
        'ArrayOfZipcodeStreet' => 'TijsVerkoyen\Recreatex\ComplexType\ArrayOfZipcodeStreet',
        'Article' => 'TijsVerkoyen\Recreatex\ComplexType\Article',
        'ArticleBase' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleBase',
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
        'ArticleSalesOrder' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleSalesOrder',
        'ArticleSalesOrderSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleSalesOrderSearchCriteria',
        'ArticleSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleSearchCriteria',
        'ArticleUnit' => 'TijsVerkoyen\Recreatex\ComplexType\ArticleUnit',
        'Attachment' => 'TijsVerkoyen\Recreatex\ComplexType\Attachment',
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
        'BusTripCompositeValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\BusTripCompositeValidationResult',
        'BusTripIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\BusTripIncludes',
        'BusTripRequest' => 'TijsVerkoyen\Recreatex\ComplexType\BusTripRequest',
        'BusTripRequestSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\BusTripRequestSearchCriteria',
        'BusTripSerieCompositeValidationResult' =>
            'TijsVerkoyen\Recreatex\ComplexType\BusTripSerieCompositeValidationResult',
        'BusTripSerieRequest' => 'TijsVerkoyen\Recreatex\ComplexType\BusTripSerieRequest',
        'BusTripValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\BusTripValidationResult',
        'Card' => 'TijsVerkoyen\Recreatex\ComplexType\Card',
        'Category' => 'TijsVerkoyen\Recreatex\ComplexType\Category',
        'CheckoutBasketResult' => 'TijsVerkoyen\Recreatex\ComplexType\CheckoutBasketResult',
        'ChildCareCentre' => 'TijsVerkoyen\Recreatex\ComplexType\ChildCareCentre',
        'ChildCareCentreEntry' => 'TijsVerkoyen\Recreatex\ComplexType\ChildCareCentreEntry',
        'ChildCareCentreEntryIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ChildCareCentreEntryIncludes',
        'ChildCareCentreEntrySearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ChildCareCentreEntrySearchCriteria',
        'ChildCareCentreIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ChildCareCentreIncludes',
        'ChildCareCentrePeriod' => 'TijsVerkoyen\Recreatex\ComplexType\ChildCareCentrePeriod',
        'ChildCareCentrePeriodSearchCriteria' =>
            'TijsVerkoyen\Recreatex\ComplexType\ChildCareCentrePeriodSearchCriteria',
        'ChildCareCentrePresence' => 'TijsVerkoyen\Recreatex\ComplexType\ChildCareCentrePresence',
        'ChildCareCentrePresenceHeader' => 'TijsVerkoyen\Recreatex\ComplexType\ChildCareCentrePresenceHeader',
        'ChildCareCentrePresenceHeaderIncludes' =>
            'TijsVerkoyen\Recreatex\ComplexType\ChildCareCentrePresenceHeaderIncludes',
        'ChildCareCentrePresenceHeaderSearchCriteria' =>
            'TijsVerkoyen\Recreatex\ComplexType\ChildCareCentrePresenceHeaderSearchCriteria',
        'ChildCareCentrePresenceSearchCriteria' =>
            'TijsVerkoyen\Recreatex\ComplexType\ChildCareCentrePresenceSearchCriteria',
        'ChildCareCentreSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ChildCareCentreSearchCriteria',
        'ChildCareChipKnipSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ChildCareChipKnipSearchCriteria',
        'ChildCareEntryPeriod' => 'TijsVerkoyen\Recreatex\ComplexType\ChildCareEntryPeriod',
        'ChildCareSchool' => 'TijsVerkoyen\Recreatex\ComplexType\ChildCareSchool',
        'ChildCareTariff' => 'TijsVerkoyen\Recreatex\ComplexType\ChildCareTariff',
        'Color' => 'TijsVerkoyen\Recreatex\ComplexType\Color',
        'ComplexTypeAbstract' => 'TijsVerkoyen\Recreatex\ComplexType\ComplexTypeAbstract',
        'Contact' => 'TijsVerkoyen\Recreatex\ComplexType\Contact',
        'Country' => 'TijsVerkoyen\Recreatex\ComplexType\Country',
        'County' => 'TijsVerkoyen\Recreatex\ComplexType\County',
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
        'CultureEventWaitingListReservation' => 'TijsVerkoyen\Recreatex\ComplexType\CultureEventWaitingListReservation',
        'CultureEventWaitingListReservationSalesItem' =>
            'TijsVerkoyen\Recreatex\ComplexType\CultureEventWaitingListReservationSalesItem',
        'CultureReservation' => 'TijsVerkoyen\Recreatex\ComplexType\CultureReservation',
        'CultureReservationSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\CultureReservationSearchCriteria',
        'CultureReservationSeat' => 'TijsVerkoyen\Recreatex\ComplexType\CultureReservationSeat',
        'CultureReservationSite' => 'TijsVerkoyen\Recreatex\ComplexType\CultureReservationSite',
        'CultureReservationSitePlace' => 'TijsVerkoyen\Recreatex\ComplexType\CultureReservationSitePlace',
        'CultureSite' => 'TijsVerkoyen\Recreatex\ComplexType\CultureSite',
        'CultureWaitingListReservation' => 'TijsVerkoyen\Recreatex\ComplexType\CultureWaitingListReservation',
        'CultureWaitingListReservationIncludes' =>
            'TijsVerkoyen\Recreatex\ComplexType\CultureWaitingListReservationIncludes',
        'CultureWaitingListReservationSearchCriteria' =>
            'TijsVerkoyen\Recreatex\ComplexType\CultureWaitingListReservationSearchCriteria',
        'DeletePurchaseLineResult' => 'TijsVerkoyen\Recreatex\ComplexType\DeletePurchaseLineResult',
        'DeletePurchaseOrderResult' => 'TijsVerkoyen\Recreatex\ComplexType\DeletePurchaseOrderResult',
        'DeliveryAddress' => 'TijsVerkoyen\Recreatex\ComplexType\DeliveryAddress',
        'DeliveryAddressSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\DeliveryAddressSearchCriteria',
        'Department' => 'TijsVerkoyen\Recreatex\ComplexType\Department',
        'Division' => 'TijsVerkoyen\Recreatex\ComplexType\Division',
        'Duration' => 'TijsVerkoyen\Recreatex\ComplexType\Duration',
        'Employee' => 'TijsVerkoyen\Recreatex\ComplexType\Employee',
        'EmployeeIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\EmployeeIncludes',
        'EmployeeSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\EmployeeSearchCriteria',
        'Entry' => 'TijsVerkoyen\Recreatex\ComplexType\Entry',
        'EntrySearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\EntrySearchCriteria',
        'ExplicitSeatsCultureEventReservationEntry' =>
            'TijsVerkoyen\Recreatex\ComplexType\ExplicitSeatsCultureEventReservationEntry',
        'Exposition' => 'TijsVerkoyen\Recreatex\ComplexType\Exposition',
        'ExpositionCategory' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionCategory',
        'ExpositionIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionIncludes',
        'ExpositionPeriod' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionPeriod',
        'ExpositionPeriodReservation' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionPeriodReservation',
        'ExpositionPeriodReservationEntry' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionPeriodReservationEntry',
        'ExpositionPeriodSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionPeriodSearchCriteria',
        'ExpositionPrice' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionPrice',
        'ExpositionReservationLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionReservationLockTicket',
        'ExpositionSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionSalesItem',
        'ExpositionSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionSearchCriteria',
        'ExpositionSubcategory' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionSubcategory',
        'ExpositionSubCategoryIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionSubCategoryIncludes',
        'ExpositionSubCategorySearchCriteria' =>
            'TijsVerkoyen\Recreatex\ComplexType\ExpositionSubCategorySearchCriteria',
        'ExpositionType' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionType',
        'ExpositionTypeIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionTypeIncludes',
        'ExpositionTypeSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ExpositionTypeSearchCriteria',
        'ExtendedLocks' => 'TijsVerkoyen\Recreatex\ComplexType\ExtendedLocks',
        'FindCountiesCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\FindCountiesCriteria',
        'FindPersonCardsCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\FindPersonCardsCriteria',
        'FindPersonFunctionsCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\FindPersonFunctionsCriteria',
        'FindPersonsCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\FindPersonsCriteria',
        'FindPersonTitlesCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\FindPersonTitlesCriteria',
        'FitnessActivity' => 'TijsVerkoyen\Recreatex\ComplexType\FitnessActivity',
        'FitnessActivityDay' => 'TijsVerkoyen\Recreatex\ComplexType\FitnessActivityDay',
        'FitnessActivityDayReservation' => 'TijsVerkoyen\Recreatex\ComplexType\FitnessActivityDayReservation',
        'FitnessActivityDayReservationLockTicket' =>
            'TijsVerkoyen\Recreatex\ComplexType\FitnessActivityDayReservationLockTicket',
        'FitnessActivityDayReservationSalesItem' =>
            'TijsVerkoyen\Recreatex\ComplexType\FitnessActivityDayReservationSalesItem',
        'FitnessActivityDaySlot' => 'TijsVerkoyen\Recreatex\ComplexType\FitnessActivityDaySlot',
        'FitnessActivityIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\FitnessActivityIncludes',
        'FitnessActivityReservation' => 'TijsVerkoyen\Recreatex\ComplexType\FitnessActivityReservation',
        'FitnessActivityReservationIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\FitnessActivityReservationIncludes',
        'FitnessActivityReservationSearchCriteria' =>
            'TijsVerkoyen\Recreatex\ComplexType\FitnessActivityReservationSearchCriteria',
        'FitnessActivityReservationValidationResult' =>
            'TijsVerkoyen\Recreatex\ComplexType\FitnessActivityReservationValidationResult',
        'FitnessActivitySearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\FitnessActivitySearchCriteria',
        'ForgotPasswordResult' => 'TijsVerkoyen\Recreatex\ComplexType\ForgotPasswordResult',
        'Function' => 'TijsVerkoyen\Recreatex\ComplexType\FunctionObject',
        'GuiConfigurationValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\GuiConfigurationValidationResult',
        'Hall' => 'TijsVerkoyen\Recreatex\ComplexType\Hall',
        'IncassoBasketPayment' => 'TijsVerkoyen\Recreatex\ComplexType\IncassoBasketPayment',
        'IncassoBasketPaymentMethod' => 'TijsVerkoyen\Recreatex\ComplexType\IncassoBasketPaymentMethod',
        'IncassoCost' => 'TijsVerkoyen\Recreatex\ComplexType\IncassoCost',
        'Infrastructure' => 'TijsVerkoyen\Recreatex\ComplexType\Infrastructure',
        'InfrastructureIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\InfrastructureIncludes',
        'InfrastructureOpeningHours' => 'TijsVerkoyen\Recreatex\ComplexType\InfrastructureOpeningHours',
        'InfrastructureOpenings' => 'TijsVerkoyen\Recreatex\ComplexType\InfrastructureOpenings',
        'InfrastructureOpeningsSearchCriteria' =>
            'TijsVerkoyen\Recreatex\ComplexType\InfrastructureOpeningsSearchCriteria',
        'InfrastructureSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\InfrastructureSearchCriteria',
        'InvalidPeriod' => 'TijsVerkoyen\Recreatex\ComplexType\InvalidPeriod',
        'Language' => 'TijsVerkoyen\Recreatex\ComplexType\Language',
        'LessonGroup' => 'TijsVerkoyen\Recreatex\ComplexType\LessonGroup',
        'LessonGroupSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\LessonGroupSearchCriteria',
        'ListCountriesCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ListCountriesCriteria',
        'LLVMessageTranslation' => 'TijsVerkoyen\Recreatex\ComplexType\LLVMessageTranslation',
        'Location' => 'TijsVerkoyen\Recreatex\ComplexType\Location',
        'LockBasketResult' => 'TijsVerkoyen\Recreatex\ComplexType\LockBasketResult',
        'LockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\LockTicket',
        'Norm' => 'TijsVerkoyen\Recreatex\ComplexType\Norm',
        'NormSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\NormSearchCriteria',
        'Occupancy' => 'TijsVerkoyen\Recreatex\ComplexType\Occupancy',
        'OpeningHour' => 'TijsVerkoyen\Recreatex\ComplexType\OpeningHour',
        'OptionalPlaceReservation' => 'TijsVerkoyen\Recreatex\ComplexType\OptionalPlaceReservation',
        'OptionalRecurringPlaceReservation' => 'TijsVerkoyen\Recreatex\ComplexType\OptionalRecurringPlaceReservation',
        'OrganisedVisit' => 'TijsVerkoyen\Recreatex\ComplexType\OrganisedVisit',
        'OrganisedVisitArticle' => 'TijsVerkoyen\Recreatex\ComplexType\OrganisedVisitArticle',
        'OrganisedVisitArticlePeriodReservation' =>
            'TijsVerkoyen\Recreatex\ComplexType\OrganisedVisitArticlePeriodReservation',
        'OrganisedVisitIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\OrganisedVisitIncludes',
        'OrganisedVisitPeriodReservation' => 'TijsVerkoyen\Recreatex\ComplexType\OrganisedVisitPeriodReservation',
        'OrganisedVisitPriceGroupPeriodReservation' =>
            'TijsVerkoyen\Recreatex\ComplexType\OrganisedVisitPriceGroupPeriodReservation',
        'OrganisedVisitSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\OrganisedVisitSearchCriteria',
        'PagingCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\PagingCriteria',
        'Period' => 'TijsVerkoyen\Recreatex\ComplexType\Period',
        'PeripheralString' => 'TijsVerkoyen\Recreatex\ComplexType\PeripheralString',
        'Person' => 'TijsVerkoyen\Recreatex\ComplexType\Person',
        'PersonCard' => 'TijsVerkoyen\Recreatex\ComplexType\PersonCard',
        'PersonCardIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\PersonCardIncludes',
        'PersonChildCareInfo' => 'TijsVerkoyen\Recreatex\ComplexType\PersonChildCareInfo',
        'PersonChipKnip' => 'TijsVerkoyen\Recreatex\ComplexType\PersonChipKnip',
        'PersonChipKnipChildCareInfo' => 'TijsVerkoyen\Recreatex\ComplexType\PersonChipKnipChildCareInfo',
        'PersonChipKnipIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\PersonChipKnipIncludes',
        'PersonChipKnipLine' => 'TijsVerkoyen\Recreatex\ComplexType\PersonChipKnipLine',
        'PersonChipKnipSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\PersonChipKnipSearchCriteria',
        'PersonCreditLine' => 'TijsVerkoyen\Recreatex\ComplexType\PersonCreditLine',
        'PersonCredits' => 'TijsVerkoyen\Recreatex\ComplexType\PersonCredits',
        'PersonCreditsIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\PersonCreditsIncludes',
        'PersonCreditsSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\PersonCreditsSearchCriteria',
        'PersonFunction' => 'TijsVerkoyen\Recreatex\ComplexType\PersonFunction',
        'PersonFunctionIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\PersonFunctionIncludes',
        'PersonIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\PersonIncludes',
        'PersonLLVInfo' => 'TijsVerkoyen\Recreatex\ComplexType\PersonLLVInfo',
        'PersonLLVInfoSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\PersonLLVInfoSearchCriteria',
        'PersonLLVTransferHistory' => 'TijsVerkoyen\Recreatex\ComplexType\PersonLLVTransferHistory',
        'PersonName' => 'TijsVerkoyen\Recreatex\ComplexType\PersonName',
        'PersonPriceGroup' => 'TijsVerkoyen\Recreatex\ComplexType\PersonPriceGroup',
        'PersonSettings' => 'TijsVerkoyen\Recreatex\ComplexType\PersonSettings',
        'PersonTitle' => 'TijsVerkoyen\Recreatex\ComplexType\PersonTitle',
        'PersonTitleIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\PersonTitleIncludes',
        'Picture' => 'TijsVerkoyen\Recreatex\ComplexType\Picture',
        'Place' => 'TijsVerkoyen\Recreatex\ComplexType\Place',
        'PlaceIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\PlaceIncludes',
        'PlaceReservation' => 'TijsVerkoyen\Recreatex\ComplexType\PlaceReservation',
        'PlaceReservationLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\PlaceReservationLockTicket',
        'PlaceReservationSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\PlaceReservationSalesItem',
        'PlaceSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\PlaceSearchCriteria',
        'Price' => 'TijsVerkoyen\Recreatex\ComplexType\Price',
        'PriceGroup' => 'TijsVerkoyen\Recreatex\ComplexType\PriceGroup',
        'PriceGroupActivity' => 'TijsVerkoyen\Recreatex\ComplexType\PriceGroupActivity',
        'PriceGroupActivitySearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\PriceGroupActivitySearchCriteria',
        'PriceGroupSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\PriceGroupSearchCriteria',
        'PurchaseArticle' => 'TijsVerkoyen\Recreatex\ComplexType\PurchaseArticle',
        'PurchaseArticleIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\PurchaseArticleIncludes',
        'PurchaseArticleSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\PurchaseArticleSearchCriteria',
        'PurchaseLine' => 'TijsVerkoyen\Recreatex\ComplexType\PurchaseLine',
        'PurchaseLineRequest' => 'TijsVerkoyen\Recreatex\ComplexType\PurchaseLineRequest',
        'PurchaseOrder' => 'TijsVerkoyen\Recreatex\ComplexType\PurchaseOrder',
        'PurchaseOrderIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\PurchaseOrderIncludes',
        'PurchaseOrderRequest' => 'TijsVerkoyen\Recreatex\ComplexType\PurchaseOrderRequest',
        'PurchaseOrderSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\PurchaseOrderSearchCriteria',
        'Reason' => 'TijsVerkoyen\Recreatex\ComplexType\Reason',
        'ReasonSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ReasonSearchCriteria',
        'RecurringPattern' => 'TijsVerkoyen\Recreatex\ComplexType\RecurringPattern',
        'RecurringPlaceReservation' => 'TijsVerkoyen\Recreatex\ComplexType\RecurringPlaceReservation',
        'RecurringPlaceReservationLockTicket' =>
            'TijsVerkoyen\Recreatex\ComplexType\RecurringPlaceReservationLockTicket',
        'RecurringPlaceReservationSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\RecurringPlaceReservationSalesItem',
        'Relation' => 'TijsVerkoyen\Recreatex\ComplexType\Relation',
        'RentalArticle' => 'TijsVerkoyen\Recreatex\ComplexType\RentalArticle',
        'RentalArticleComponent' => 'TijsVerkoyen\Recreatex\ComplexType\RentalArticleComponent',
        'RentalArticleIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\RentalArticleIncludes',
        'RentalArticleSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\RentalArticleSearchCriteria',
        'RentalOrder' => 'TijsVerkoyen\Recreatex\ComplexType\RentalOrder',
        'RentalOrderIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\RentalOrderIncludes',
        'RentalOrderLine' => 'TijsVerkoyen\Recreatex\ComplexType\RentalOrderLine',
        'RentalOrderSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\RentalOrderSearchCriteria',
        'RentalReservation' => 'TijsVerkoyen\Recreatex\ComplexType\RentalReservation',
        'RentalReservationLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\RentalReservationLockTicket',
        'RentalReservationSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\RentalReservationSalesItem',
        'RentalValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\RentalValidationResult',
        'RentalWarranty' => 'TijsVerkoyen\Recreatex\ComplexType\RentalWarranty',
        'RequestAuthenticationTokenResult' => 'TijsVerkoyen\Recreatex\ComplexType\RequestAuthenticationTokenResult',
        'Reservation' => 'TijsVerkoyen\Recreatex\ComplexType\Reservation',
        'ReservationActivity' => 'TijsVerkoyen\Recreatex\ComplexType\ReservationActivity',
        'ReservationActivityIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ReservationActivityIncludes',
        'ReservationActivitySearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ReservationActivitySearchCriteria',
        'ReservationCost' => 'TijsVerkoyen\Recreatex\ComplexType\ReservationCost',
        'ReservationIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ReservationIncludes',
        'ReservationSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ReservationSearchCriteria',
        'ReservationView' => 'TijsVerkoyen\Recreatex\ComplexType\ReservationView',
        'ReservationViewIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ReservationViewIncludes',
        'ReservationViewPlace' => 'TijsVerkoyen\Recreatex\ComplexType\ReservationViewPlace',
        'ReservationViewSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ReservationViewSearchCriteria',
        'SalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\SalesItem',
        'SalesOrder' => 'TijsVerkoyen\Recreatex\ComplexType\SalesOrder',
        'SaveChildCareCentrePresenceResult' => 'TijsVerkoyen\Recreatex\ComplexType\SaveChildCareCentrePresenceResult',
        'SavePersonDeliveryAddressResult' => 'TijsVerkoyen\Recreatex\ComplexType\SavePersonDeliveryAddressResult',
        'SavePersonOptions' => 'TijsVerkoyen\Recreatex\ComplexType\SavePersonOptions',
        'SavePersonResult' => 'TijsVerkoyen\Recreatex\ComplexType\SavePersonResult',
        'SavePurchaseLineResult' => 'TijsVerkoyen\Recreatex\ComplexType\SavePurchaseLineResult',
        'SavePurchaseOrderResult' => 'TijsVerkoyen\Recreatex\ComplexType\SavePurchaseOrderResult',
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
        'SerieFrequency' => 'TijsVerkoyen\Recreatex\ComplexType\SerieFrequency',
        'SerieMonthPattern' => 'TijsVerkoyen\Recreatex\ComplexType\SerieMonthPattern',
        'SerieYearPattern' => 'TijsVerkoyen\Recreatex\ComplexType\SerieYearPattern',
        'ServiceContext' => 'TijsVerkoyen\Recreatex\ComplexType\ServiceContext',
        'SiteAllocation' => 'TijsVerkoyen\Recreatex\ComplexType\SiteAllocation',
        'SiteAllocationPerHallSummary' => 'TijsVerkoyen\Recreatex\ComplexType\SiteAllocationPerHallSummary',
        'SiteAllocationsOverview' => 'TijsVerkoyen\Recreatex\ComplexType\SiteAllocationsOverview',
        'SiteCultureEventReservationEntry' => 'TijsVerkoyen\Recreatex\ComplexType\SiteCultureEventReservationEntry',
        'SortingCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\SortingCriteria',
        'StockLocation' => 'TijsVerkoyen\Recreatex\ComplexType\StockLocation',
        'StockLocationSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\StockLocationSearchCriteria',
        'StudentFollowScore' => 'TijsVerkoyen\Recreatex\ComplexType\StudentFollowScore',
        'StudentFollowScoreSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\StudentFollowScoreSearchCriteria',
        'StudentPresence' => 'TijsVerkoyen\Recreatex\ComplexType\StudentPresence',
        'StudentPresenceSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\StudentPresenceSearchCriteria',
        'Subcategory' => 'TijsVerkoyen\Recreatex\ComplexType\Subcategory',
        'Subscription' => 'TijsVerkoyen\Recreatex\ComplexType\Subscription',
        'SubscriptionArticle' => 'TijsVerkoyen\Recreatex\ComplexType\SubscriptionArticle',
        'SubscriptionArticleIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\SubscriptionArticleIncludes',
        'SubscriptionArticleSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\SubscriptionArticleSearchCriteria',
        'SubscriptionIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\SubscriptionIncludes',
        'SubscriptionLog' => 'TijsVerkoyen\Recreatex\ComplexType\SubscriptionLog',
        'SubscriptionLogIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\SubscriptionLogIncludes',
        'SubscriptionLogSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\SubscriptionLogSearchCriteria',
        'SubscriptionPeriod' => 'TijsVerkoyen\Recreatex\ComplexType\SubscriptionPeriod',
        'SubscriptionProlongation' => 'TijsVerkoyen\Recreatex\ComplexType\SubscriptionProlongation',
        'SubscriptionProlongationSalesItem' => 'TijsVerkoyen\Recreatex\ComplexType\SubscriptionProlongationSalesItem',
        'SubscriptionSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\SubscriptionSearchCriteria',
        'SwimmingDiploma' => 'TijsVerkoyen\Recreatex\ComplexType\SwimmingDiploma',
        'SwimmingDiplomaSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\SwimmingDiplomaSearchCriteria',
        'SwimmingLevel' => 'TijsVerkoyen\Recreatex\ComplexType\SwimmingLevel',
        'SwimmingLevelSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\SwimmingLevelSearchCriteria',
        'ValidationResult' => 'TijsVerkoyen\Recreatex\ComplexType\ValidationResult',
        'Vat' => 'TijsVerkoyen\Recreatex\ComplexType\Vat',
        'VatRegime' => 'TijsVerkoyen\Recreatex\ComplexType\VatRegime',
        'Vendor' => 'TijsVerkoyen\Recreatex\ComplexType\Vendor',
        'VendorArticle' => 'TijsVerkoyen\Recreatex\ComplexType\VendorArticle',
        'VendorContact' => 'TijsVerkoyen\Recreatex\ComplexType\VendorContact',
        'VendorGroup' => 'TijsVerkoyen\Recreatex\ComplexType\VendorGroup',
        'VendorGroupSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\VendorGroupSearchCriteria',
        'VendorIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\VendorIncludes',
        'VendorSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\VendorSearchCriteria',
        'VendorState' => 'TijsVerkoyen\Recreatex\ComplexType\VendorState',
        'WaitingList' => 'TijsVerkoyen\Recreatex\ComplexType\WaitingList',
        'WaitingListSale' => 'TijsVerkoyen\Recreatex\ComplexType\WaitingListSale',
        'WaitingListSaleLockTicket' => 'TijsVerkoyen\Recreatex\ComplexType\WaitingListSaleLockTicket',
        'WaitingListSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\WaitingListSearchCriteria',
        'WaitingListStudent' => 'TijsVerkoyen\Recreatex\ComplexType\WaitingListStudent',
        'WaitingListStudentSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\WaitingListStudentSearchCriteria',
        'WeekDayRange' => 'TijsVerkoyen\Recreatex\ComplexType\WeekDayRange',
        'Zipcode' => 'TijsVerkoyen\Recreatex\ComplexType\Zipcode',
        'ZipcodeCendrisStreet' => 'TijsVerkoyen\Recreatex\ComplexType\ZipcodeCendrisStreet',
        'ZipcodeCendrisStreetIncludes' => 'TijsVerkoyen\Recreatex\ComplexType\ZipcodeCendrisStreetIncludes',
        'ZipcodeCendrisStreetsSearchCriteria' =>
            'TijsVerkoyen\Recreatex\ComplexType\ZipcodeCendrisStreetsSearchCriteria',
        'ZipcodesSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ZipcodesSearchCriteria',
        'ZipcodeStreet' => 'TijsVerkoyen\Recreatex\ComplexType\ZipcodeStreet',
        'ZipcodeStreetsSearchCriteria' => 'TijsVerkoyen\Recreatex\ComplexType\ZipcodeStreetsSearchCriteria',

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
     * @param string[optional] $server The server to use.
     * @param int[optional] $port The port whereon the server is operating.
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
     * Get the port     * @return int
     */
    public function getPort()
    {
        return (int) $this->port;
    }

    /**
     * Set the port to use     * @param int $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * Get the server     * @return mixed
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Set the server     * @param string $server
     */
    public function setServer($server)
    {
        $this->server = (string) $server;
    }

    /**
     * Returns the SoapClient instance     * @return BaseSoapClient
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
     * Get the timeout that will be used     * @return int
     */
    public function getTimeOut()
    {
        return (int) $this->timeOut;
    }

    /**
     * Set the timeout
     * After this time the request will stop. You should handle any errors triggered by this.
     * @param int $seconds The timeout in seconds.
     */
    public function setTimeOut($seconds)
    {
        $this->timeOut = (int) $seconds;
    }

    /**
     * Get the useragent that will be used.
     * Our version will be prepended to yours.
     * It will look like: "PHP Recreatex/<version> <your-user-agent>"     * @return string
     */
    public function getUserAgent()
    {
        return (string) 'PHP Recreatex/' . self::VERSION . ' ' . $this->userAgent;
    }

    /**
     * Set the user-agent for you application
     * It will be appended to ours, the result will look like: "PHP Recreatex/<version> <your-user-agent>"
     * @param string $userAgent Your user-agent, it should look like <app-name>/<app-version>.
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = (string) $userAgent;
    }

    /**
     * Check if a response is valid for the given method     * @param mixed  $response
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

    // Authentication methods
	/**
	 * @return array
	 */
	public function listLicenseModules()
    {
        $response = $this->getSoapClient()->ListLicenseModules($this->getServiceContext());

        return $response->getRcxWsdlModules();
    }

	/**
	 * @param string $username
	 * @return AuthenticationResult
	 */
	public function validateUsername($username)
	{
		$response = $this->getSoapClient()->ValidateUserName(
			$this->getServiceContext(),
			$username
		);

		return $response;
	}



    /**
     * Check if the service is available     * @return bool
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
     * Find persons     * @param  FindPersonsCriteria $Criteria
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
