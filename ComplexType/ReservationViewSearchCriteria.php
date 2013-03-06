<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * The search criteria that will be applied to search for ReservationViews
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ReservationViewSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ReservationViewSearchCriteria';

    /**
     * The ID of a specific ReservationView you want to find.
     * @var SimpleTypeGuid
     */
    protected $ReservationViewId;

    /**
     * The ID of a Place that you want to find ReservationViews for.
     * @var SimpleTypeGuid
     */
    protected $PlaceId;

    /**
     * Part of the name of the ReservationView to find. Use an asteriks (%) as the wildcard.     * @var string
     */
    protected $NamePattern;

    /**
     * @var ReservationViewIncludes
     */
    protected $Includes;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @param  SimpleType\Guid[optional]     $reservationViewId
     * @return ReservationViewSearchCriteria
     */
    public function setReservationViewId(SimpleType\Guid $reservationViewId = null)
    {
        $this->ReservationViewId = $reservationViewId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getReservationViewId()
    {
        return $this->ReservationViewId;
    }

    /**
     * @param  SimpleType\Guid[optional]     $placeId
     * @return ReservationViewSearchCriteria
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
     * @param  string[optional]              $namePattern
     * @return ReservationViewSearchCriteria
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
     * @param  ReservationViewIncludes[optional] $includes
     * @return ReservationViewSearchCriteria
     */
    public function setIncludes(ReservationViewIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ReservationViewIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria[optional]      $paging
     * @return ReservationViewSearchCriteria
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
