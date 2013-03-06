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
     * @var SimpleTypeGuid
     */
    protected $FitnessActivityDayId;

    /**
     * @var SimpleTypeGuid
     */
    protected $FitnessActivityDayReservationId;

    /**
     * @var SimpleTypeGuid
     */
    protected $FitnessActivityId;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var FitnessActivityReservationIncludes
     */
    protected $Includes;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var string
     */
    protected $Until;

    /**
     * @param  SimpleType\Guid[optional]                $fitnessActivityDayId
     * @return FitnessActivityReservationSearchCriteria
     */
    public function setFitnessActivityDayId(SimpleType\Guid $fitnessActivityDayId = null)
    {
        $this->FitnessActivityDayId = $fitnessActivityDayId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getFitnessActivityDayId()
    {
        return $this->FitnessActivityDayId;
    }

    /**
     * @param  SimpleType\Guid[optional]                $fitnessActivityDayReservationId
     * @return FitnessActivityReservationSearchCriteria
     */
    public function setFitnessActivityDayReservationId(SimpleType\Guid $fitnessActivityDayReservationId = null)
    {
        $this->FitnessActivityDayReservationId = $fitnessActivityDayReservationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getFitnessActivityDayReservationId()
    {
        return $this->FitnessActivityDayReservationId;
    }

    /**
     * @param  SimpleType\Guid[optional]                $fitnessActivityId
     * @return FitnessActivityReservationSearchCriteria
     */
    public function setFitnessActivityId(SimpleType\Guid $fitnessActivityId = null)
    {
        $this->FitnessActivityId = $fitnessActivityId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getFitnessActivityId()
    {
        return $this->FitnessActivityId;
    }

    /**
     * @param  string[optional]                         $from
     * @return FitnessActivityReservationSearchCriteria
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  FitnessActivityReservationIncludes[optional] $includes
     * @return FitnessActivityReservationSearchCriteria
     */
    public function setIncludes(FitnessActivityReservationIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return FitnessActivityReservationIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria[optional]                 $paging
     * @return FitnessActivityReservationSearchCriteria
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

    /**
     * @param  SimpleType\Guid[optional]                $personId
     * @return FitnessActivityReservationSearchCriteria
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  string[optional]                         $until
     * @return FitnessActivityReservationSearchCriteria
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string
     */
    public function getUntil()
    {
        return $this->Until;
    }
}
