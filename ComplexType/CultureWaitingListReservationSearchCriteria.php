<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureWaitingListReservationSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureWaitingListReservationSearchCriteria';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $CultureWaitingListReservationId
     */
    protected $CultureWaitingListReservationId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PersonId
     */
    protected $PersonId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $CultureEventId
     */
    protected $CultureEventId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $From
     */
    protected $From;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Until
     */
    protected $Until;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CultureWaitingListReservationIncludes|null $Includes
     */
    protected $Includes;

    /**
     * @param  SimpleType\guid|null                        $cultureWaitingListReservationId
     * @return CultureWaitingListReservationSearchCriteria
     */
    public function setCultureWaitingListReservationId(SimpleType\guid $cultureWaitingListReservationId = null)
    {
        $this->CultureWaitingListReservationId = $cultureWaitingListReservationId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCultureWaitingListReservationId()
    {
        return $this->CultureWaitingListReservationId;
    }

    /**
     * @param  SimpleType\guid|null                        $personId
     * @return CultureWaitingListReservationSearchCriteria
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  SimpleType\guid|null                        $cultureEventId
     * @return CultureWaitingListReservationSearchCriteria
     */
    public function setCultureEventId(SimpleType\guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  string|null                                 $from
     * @return CultureWaitingListReservationSearchCriteria
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  string|null                                 $until
     * @return CultureWaitingListReservationSearchCriteria
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUntil()
    {
        return $this->Until;
    }

    /**
     * @param  PagingCriteria|null                         $paging
     * @return CultureWaitingListReservationSearchCriteria
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
     * @param  CultureWaitingListReservationIncludes|null  $includes
     * @return CultureWaitingListReservationSearchCriteria
     */
    public function setIncludes(CultureWaitingListReservationIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return CultureWaitingListReservationIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

}
