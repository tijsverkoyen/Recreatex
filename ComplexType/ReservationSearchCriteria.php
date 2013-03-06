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
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ReservationId
     */
    protected $ReservationId;

    /**
     * The ID of a specific customer that you want to find reservations for.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $CustomerId
     */
    protected $CustomerId;

    /**
     * The ID of a specific place that you want to find reservations for.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PlaceId
     */
    protected $PlaceId;

    /**
     * The ID of a specific infrastructure that you want to find reservations for.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $InfrastructureId
     */
    protected $InfrastructureId;

    /**
     * The ID of a specific ReservationActivity that you want to find reservations for.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ReservationActivityId
     */
    protected $ReservationActivityId;

    /**
     * Part of the name of the reservation to find. Use an asteriks (*) as the wildcard.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $NamePattern
     */
    protected $NamePattern;

    /**
     * Start date and time of the period in which you want to search for reservations.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FromDateTime
     */
    protected $FromDateTime;

    /**
     * End date and time of the period in which you want to search for reservations.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ToDateTime
     */
    protected $ToDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ReservationIncludes|null $Includes
     */
    protected $Includes;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**
     * A list of ID's of ReservationActivities that you want to find reservations for.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfguid|null $ReservationActivityIds
     */
    protected $ReservationActivityIds;

    /**
     * The ID's of places that you want to find reservations for.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfguid|null $PlaceIds
     */
    protected $PlaceIds;

    /**
     * The ID of a specific ReservationView that you want to find reservations for.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ReservationViewId
     */
    protected $ReservationViewId;

    /**
     * @param  SimpleType\guid|null      $reservationId
     * @return ReservationSearchCriteria
     */
    public function setReservationId(SimpleType\guid $reservationId = null)
    {
        $this->ReservationId = $reservationId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getReservationId()
    {
        return $this->ReservationId;
    }

    /**
     * @param  SimpleType\guid|null      $customerId
     * @return ReservationSearchCriteria
     */
    public function setCustomerId(SimpleType\guid $customerId = null)
    {
        $this->CustomerId = $customerId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param  SimpleType\guid|null      $placeId
     * @return ReservationSearchCriteria
     */
    public function setPlaceId(SimpleType\guid $placeId = null)
    {
        $this->PlaceId = $placeId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPlaceId()
    {
        return $this->PlaceId;
    }

    /**
     * @param  SimpleType\guid|null      $infrastructureId
     * @return ReservationSearchCriteria
     */
    public function setInfrastructureId(SimpleType\guid $infrastructureId = null)
    {
        $this->InfrastructureId = $infrastructureId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getInfrastructureId()
    {
        return $this->InfrastructureId;
    }

    /**
     * @param  SimpleType\guid|null      $reservationActivityId
     * @return ReservationSearchCriteria
     */
    public function setReservationActivityId(SimpleType\guid $reservationActivityId = null)
    {
        $this->ReservationActivityId = $reservationActivityId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getReservationActivityId()
    {
        return $this->ReservationActivityId;
    }

    /**
     * @param  string|null               $namePattern
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
     * @param  string|null               $fromDateTime
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
     * @param  string|null               $toDateTime
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
     * @param  ReservationIncludes|null  $includes
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
     * @param  PagingCriteria|null       $paging
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
     * @param  ArrayOfguid|null          $reservationActivityIds
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
     * @param  ArrayOfguid|null          $placeIds
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
     * @param  SimpleType\guid|null      $reservationViewId
     * @return ReservationSearchCriteria
     */
    public function setReservationViewId(SimpleType\guid $reservationViewId = null)
    {
        $this->ReservationViewId = $reservationViewId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getReservationViewId()
    {
        return $this->ReservationViewId;
    }

}
