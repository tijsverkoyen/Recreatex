<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * The search criteria that will be applied to the search query
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ReservationSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ReservationSearchCriteria';

    /**
     * The ID of a specific reservation that you want to find
     * @var SimpleTypeGuid
     */
    protected $ReservationId;

    /**
     * The ID of a specific customer that you want to find reservations for.
     * @var SimpleTypeGuid
     */
    protected $CustomerId;

    /**
     * The ID of a specific place that you want to find reservations for.
     * @var SimpleTypeGuid
     */
    protected $PlaceId;

    /**
     * The ID of a specific infrastructure that you want to find reservations for.
     * @var SimpleTypeGuid
     */
    protected $InfrastructureId;

    /**
     * The ID of a specific ReservationActivity that you want to find reservations for.
     * @var SimpleTypeGuid
     */
    protected $ReservationActivityId;

    /**
     * Part of the name of the reservation to find. Use an asteriks (*) as the wildcard.
     * @var string
     */
    protected $NamePattern;

    /**
     * Start date and time of the period in which you want to search for reservations.
     * @var string
     */
    protected $FromDateTime;

    /**
     * End date and time of the period in which you want to search for reservations.
     * @var string
     */
    protected $ToDateTime;

    /**
     * @var ReservationIncludes
     */
    protected $Includes;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * A list of ID's of ReservationActivities that you want to find reservations for.
     * @var ArrayOfGuid
     */
    protected $ReservationActivityIds;

    /**
     * The ID's of places that you want to find reservations for.
     * @var ArrayOfGuid
     */
    protected $PlaceIds;

    /**
     * The ID of a specific ReservationView that you want to find reservations for.
     * @var SimpleTypeGuid
     */
    protected $ReservationViewId;

    /**
     * @param  SimpleType\Guid[optional] $reservationId
     * @return ReservationSearchCriteria
     */
    public function setReservationId(SimpleType\Guid $reservationId = null)
    {
        $this->ReservationId = $reservationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getReservationId()
    {
        return $this->ReservationId;
    }

    /**
     * @param  SimpleType\Guid[optional] $customerId
     * @return ReservationSearchCriteria
     */
    public function setCustomerId(SimpleType\Guid $customerId = null)
    {
        $this->CustomerId = $customerId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param  SimpleType\Guid[optional] $placeId
     * @return ReservationSearchCriteria
     */
    public function setPlaceId(SimpleType\Guid $placeId = null)
    {
        $this->PlaceId = $placeId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getPlaceId()
    {
        return $this->PlaceId;
    }

    /**
     * @param  SimpleType\Guid[optional] $infrastructureId
     * @return ReservationSearchCriteria
     */
    public function setInfrastructureId(SimpleType\Guid $infrastructureId = null)
    {
        $this->InfrastructureId = $infrastructureId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getInfrastructureId()
    {
        return $this->InfrastructureId;
    }

    /**
     * @param  SimpleType\Guid[optional] $reservationActivityId
     * @return ReservationSearchCriteria
     */
    public function setReservationActivityId(SimpleType\Guid $reservationActivityId = null)
    {
        $this->ReservationActivityId = $reservationActivityId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getReservationActivityId()
    {
        return $this->ReservationActivityId;
    }

    /**
     * @param  string[optional]          $namePattern
     * @return ReservationSearchCriteria
     */
    public function setNamePattern($namePattern)
    {
        $this->NamePattern = $namePattern;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNamePattern()
    {
        return $this->NamePattern;
    }

    /**
     * @param  string[optional]          $fromDateTime
     * @return ReservationSearchCriteria
     */
    public function setFromDateTime($fromDateTime)
    {
        $this->FromDateTime = $fromDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromDateTime()
    {
        return $this->FromDateTime;
    }

    /**
     * @param  string[optional]          $toDateTime
     * @return ReservationSearchCriteria
     */
    public function setToDateTime($toDateTime)
    {
        $this->ToDateTime = $toDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getToDateTime()
    {
        return $this->ToDateTime;
    }

    /**
     * @param  ReservationIncludes[optional] $includes
     * @return ReservationSearchCriteria
     */
    public function setIncludes(ReservationIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ReservationIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria[optional]  $paging
     * @return ReservationSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria|null
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param  ArrayOfguid[optional]     $reservationActivityIds
     * @return ReservationSearchCriteria
     */
    public function setReservationActivityIds(ArrayOfguid $reservationActivityIds = null)
    {
        $this->ReservationActivityIds = $reservationActivityIds;

        return $this;
    }

    /**
     * @return ArrayOfguid|null
     */
    public function getReservationActivityIds()
    {
        return $this->ReservationActivityIds;
    }

    /**
     * @param  ArrayOfguid[optional]     $placeIds
     * @return ReservationSearchCriteria
     */
    public function setPlaceIds(ArrayOfguid $placeIds = null)
    {
        $this->PlaceIds = $placeIds;

        return $this;
    }

    /**
     * @return ArrayOfguid|null
     */
    public function getPlaceIds()
    {
        return $this->PlaceIds;
    }

    /**
     * @param  SimpleType\Guid[optional] $reservationViewId
     * @return ReservationSearchCriteria
     */
    public function setReservationViewId(SimpleType\Guid $reservationViewId = null)
    {
        $this->ReservationViewId = $reservationViewId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getReservationViewId()
    {
        return $this->ReservationViewId;
    }
}
