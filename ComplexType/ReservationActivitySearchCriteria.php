<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * The search criteria that will be applied to the search query
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ReservationActivitySearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ReservationActivitySearchCriteria';

    /**
     * The ID of a specific reservation activity that you want to find
     * @var SimpleTypeGuid
     */
    protected $ReservationActivityId;

    /**
     * Part of the name of the reservation activity to find. Use an asteriks (*) as the wildcard.     * @var string
     */
    protected $NamePattern;

    /**
     * @var ReservationActivityIncludes
     */
    protected $Includes;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @param  SimpleType\Guid[optional]         $reservationActivityId
     * @return ReservationActivitySearchCriteria
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
     * @param  string[optional]                  $namePattern
     * @return ReservationActivitySearchCriteria
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
     * @param  ReservationActivityIncludes[optional] $includes
     * @return ReservationActivitySearchCriteria
     */
    public function setIncludes(ReservationActivityIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ReservationActivityIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria[optional]          $paging
     * @return ReservationActivitySearchCriteria
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
