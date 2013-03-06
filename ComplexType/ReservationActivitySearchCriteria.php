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
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ReservationActivityId
     */
    protected $ReservationActivityId;

    /**
     * Part of the name of the reservation activity to find. Use an asteriks (*) as the wildcard.
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
     * @var ReservationActivityIncludes|null $Includes
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
     * @param  SimpleType\guid|null              $reservationActivityId
     * @return ReservationActivitySearchCriteria
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
     * @param  string|null                       $namePattern
     * @return ReservationActivitySearchCriteria
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
     * @param  ReservationActivityIncludes|null  $includes
     * @return ReservationActivitySearchCriteria
     */
    public function setIncludes(ReservationActivityIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ReservationActivityIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria|null               $paging
     * @return ReservationActivitySearchCriteria
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
