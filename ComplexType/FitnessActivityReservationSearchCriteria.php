<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FitnessActivityReservationSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FitnessActivityReservationSearchCriteria';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $FitnessActivityDayId
     */
    protected $FitnessActivityDayId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $FitnessActivityDayReservationId
     */
    protected $FitnessActivityDayReservationId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $FitnessActivityId
     */
    protected $FitnessActivityId;

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
     * @var FitnessActivityReservationIncludes|null $Includes
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
     * @var string|null $Until
     */
    protected $Until;

    /**
     * @param  SimpleType\guid|null                     $fitnessActivityDayId
     * @return FitnessActivityReservationSearchCriteria
     */
    public function setFitnessActivityDayId(SimpleType\guid $fitnessActivityDayId = null)
    {
        $this->FitnessActivityDayId = $fitnessActivityDayId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getFitnessActivityDayId()
    {
        return $this->FitnessActivityDayId;
    }

    /**
     * @param  SimpleType\guid|null                     $fitnessActivityDayReservationId
     * @return FitnessActivityReservationSearchCriteria
     */
    public function setFitnessActivityDayReservationId(SimpleType\guid $fitnessActivityDayReservationId = null)
    {
        $this->FitnessActivityDayReservationId = $fitnessActivityDayReservationId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getFitnessActivityDayReservationId()
    {
        return $this->FitnessActivityDayReservationId;
    }

    /**
     * @param  SimpleType\guid|null                     $fitnessActivityId
     * @return FitnessActivityReservationSearchCriteria
     */
    public function setFitnessActivityId(SimpleType\guid $fitnessActivityId = null)
    {
        $this->FitnessActivityId = $fitnessActivityId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getFitnessActivityId()
    {
        return $this->FitnessActivityId;
    }

    /**
     * @param  string|null                              $from
     * @return FitnessActivityReservationSearchCriteria
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
     * @param  FitnessActivityReservationIncludes|null  $includes
     * @return FitnessActivityReservationSearchCriteria
     */
    public function setIncludes(FitnessActivityReservationIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return FitnessActivityReservationIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria|null                      $paging
     * @return FitnessActivityReservationSearchCriteria
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
     * @param  SimpleType\guid|null                     $personId
     * @return FitnessActivityReservationSearchCriteria
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
     * @param  string|null                              $until
     * @return FitnessActivityReservationSearchCriteria
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

}
