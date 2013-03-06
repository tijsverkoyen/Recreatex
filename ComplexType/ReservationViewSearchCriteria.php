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
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ReservationViewId
     */
    protected $ReservationViewId;

    /**
     * The ID of a Place that you want to find ReservationViews for.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PlaceId
     */
    protected $PlaceId;

    /**
     * Part of the name of the ReservationView to find. Use an asteriks (%) as the wildcard.
     *
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
     * @var ReservationViewIncludes|null $Includes
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
     * @param  SimpleType\guid|null          $reservationViewId
     * @return ReservationViewSearchCriteria
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

    /**
     * @param  SimpleType\guid|null          $placeId
     * @return ReservationViewSearchCriteria
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
     * @param  string|null                   $namePattern
     * @return ReservationViewSearchCriteria
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
     * @param  ReservationViewIncludes|null  $includes
     * @return ReservationViewSearchCriteria
     */
    public function setIncludes(ReservationViewIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ReservationViewIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria|null           $paging
     * @return ReservationViewSearchCriteria
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
