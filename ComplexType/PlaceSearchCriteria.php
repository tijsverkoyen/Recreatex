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
     * @var SimpleTypeGuid
     */
    protected $PlaceId;

    /**
     * The ID of a parent infrastructure that you want to find places for.
     * @var SimpleTypeGuid
     */
    protected $InfrastructureId;

    /**
     * The ID of a related ReservationActivity that you want to find places for.
     * @var SimpleTypeGuid
     */
    protected $ReservationActivityId;

    /**
     * Part of the name of the place to find. Use an asteriks (%) as the wildcard.
     * @var string
     */
    protected $NamePattern;

    /**
     * @var PlaceIncludes
     */
    protected $Includes;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @param  SimpleType\Guid[optional] $placeId
     * @return PlaceSearchCriteria
     */
    public function setPlaceId(SimpleType\Guid $placeId = null)
    {
        $this->PlaceId = $placeId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPlaceId()
    {
        return $this->PlaceId;
    }

    /**
     * @param  SimpleType\Guid[optional] $infrastructureId
     * @return PlaceSearchCriteria
     */
    public function setInfrastructureId(SimpleType\Guid $infrastructureId = null)
    {
        $this->InfrastructureId = $infrastructureId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getInfrastructureId()
    {
        return $this->InfrastructureId;
    }

    /**
     * @param  SimpleType\Guid[optional] $reservationActivityId
     * @return PlaceSearchCriteria
     */
    public function setReservationActivityId(SimpleType\Guid $reservationActivityId = null)
    {
        $this->ReservationActivityId = $reservationActivityId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getReservationActivityId()
    {
        return $this->ReservationActivityId;
    }

    /**
     * @param  string[optional]    $namePattern
     * @return PlaceSearchCriteria
     */
    public function setNamePattern($namePattern)
    {
        $this->NamePattern = $namePattern;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamePattern()
    {
        return $this->NamePattern;
    }

    /**
     * @param  PlaceIncludes[optional] $includes
     * @return PlaceSearchCriteria
     */
    public function setIncludes(PlaceIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return PlaceIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria[optional] $paging
     * @return PlaceSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria
     */
    public function getPaging()
    {
        return $this->Paging;
    }
}
