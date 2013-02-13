<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ActivitySearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ActivitySearchCriteria';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $ActivityId
     */
    protected $ActivityId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $ActivityTypeId
     */
    protected $ActivityTypeId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $AgeFrom
     */
    protected $AgeFrom;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $AgeTo
     */
    protected $AgeTo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ActivityIncludes|null $Includes
     */
    protected $Includes;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Keyword
     */
    protected $Keyword;

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
     * @var Period|null $Period
     */
    protected $Period;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $PersonId
     */
    protected $PersonId;

    /**
     * @param  SimpleType\Guid|null   $activityId
     * @return ActivitySearchCriteria
     */
    public function setActivityId(SimpleType\Guid $activityId = null)
    {
        $this->ActivityId = $activityId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getActivityId()
    {
        return $this->ActivityId;
    }

    /**
     * @param  SimpleType\Guid|null   $activityTypeId
     * @return ActivitySearchCriteria
     */
    public function setActivityTypeId(SimpleType\Guid $activityTypeId = null)
    {
        $this->ActivityTypeId = $activityTypeId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getActivityTypeId()
    {
        return $this->ActivityTypeId;
    }

    /**
     * @param  integer|null           $ageFrom
     * @return ActivitySearchCriteria
     */
    public function setAgeFrom($ageFrom)
    {
        $this->AgeFrom = $ageFrom;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getAgeFrom()
    {
        return $this->AgeFrom;
    }

    /**
     * @param  integer|null           $ageTo
     * @return ActivitySearchCriteria
     */
    public function setAgeTo($ageTo)
    {
        $this->AgeTo = $ageTo;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getAgeTo()
    {
        return $this->AgeTo;
    }

    /**
     * @param  ActivityIncludes|null  $includes
     * @return ActivitySearchCriteria
     */
    public function setIncludes(ActivityIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ActivityIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  string|null            $keyword
     * @return ActivitySearchCriteria
     */
    public function setKeyword($keyword)
    {
        $this->Keyword = $keyword;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->Keyword;
    }

    /**
     * @param  PagingCriteria|null    $paging
     * @return ActivitySearchCriteria
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
     * @param  Period|null            $period
     * @return ActivitySearchCriteria
     */
    public function setPeriod(Period $period = null)
    {
        $this->Period = $period;

        return $this;
    }

    /**
     * @return Period|null
     */
    public function getPeriod()
    {
        return $this->Period;
    }

    /**
     * @param  SimpleType\Guid|null   $personId
     * @return ActivitySearchCriteria
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }
}
