<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * The search criteria that will be applied to the search query
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PlaceSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PlaceSearchCriteria';

    /**
     * The ID of a specific place you want to find.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PlaceId
     */
    protected $PlaceId;

    /**
     * The ID of a parent infrastructure that you want to find places for.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $InfrastructureId
     */
    protected $InfrastructureId;

    /**
     * The ID of a related ReservationActivity that you want to find places for.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ReservationActivityId
     */
    protected $ReservationActivityId;

    /**
     * Part of the name of the place to find. Use an asteriks (%) as the wildcard.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $NamePattern
     */
    protected $NamePattern;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PlaceIncludes|null $Includes
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
     * @param  SimpleType\guid|null $placeId
     * @return PlaceSearchCriteria
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
     * @param  SimpleType\guid|null $infrastructureId
     * @return PlaceSearchCriteria
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
     * @param  SimpleType\guid|null $reservationActivityId
     * @return PlaceSearchCriteria
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
     * @param  string|null         $namePattern
     * @return PlaceSearchCriteria
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
     * @param  PlaceIncludes|null  $includes
     * @return PlaceSearchCriteria
     */
    public function setIncludes(PlaceIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return PlaceIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria|null $paging
     * @return PlaceSearchCriteria
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

}
