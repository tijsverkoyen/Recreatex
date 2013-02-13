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
     * @var SimpleType\Guid
     */
    protected $ActivityId;

    /**
     * @var SimpleType\Guid
     */
    protected $ActivityTypeId;

    /**
     * @var integer
     */
    protected $AgeFrom;

    /**
     * @var integer
     */
    protected $AgeTo;

    /**
     * @var ActivityIncludes
     */
    protected $Includes;

    /**
     * @var string
     */
    protected $Keyword;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var Period
     */
    protected $Period;

    /**
     * @var SimpleType\Guid
     */
    protected $PersonId;

    /**
     * @param  SimpleType\Guid[optional] $activityId
     * @return ActivitySearchCriteria
     */
    public function setActivityId(SimpleType\Guid $activityId = null)
    {
        $this->ActivityId = $activityId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getActivityId()
    {
        return $this->ActivityId;
    }

    /**
     * @param  SimpleType\Guid[optional] $activityTypeId
     * @return ActivitySearchCriteria
     */
    public function setActivityTypeId(SimpleType\Guid $activityTypeId = null)
    {
        $this->ActivityTypeId = $activityTypeId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getActivityTypeId()
    {
        return $this->ActivityTypeId;
    }

    /**
     * @param  integer[optional]      $ageFrom
     * @return ActivitySearchCriteria
     */
    public function setAgeFrom($ageFrom)
    {
        $this->AgeFrom = $ageFrom;

        return $this;
    }

    /**
     * @return integer
     */
    public function getAgeFrom()
    {
        return $this->AgeFrom;
    }

    /**
     * @param  integer[optional]      $ageTo
     * @return ActivitySearchCriteria
     */
    public function setAgeTo($ageTo)
    {
        $this->AgeTo = $ageTo;

        return $this;
    }

    /**
     * @return integer
     */
    public function getAgeTo()
    {
        return $this->AgeTo;
    }

    /**
     * @param  ActivityIncludes[optional] $includes
     * @return ActivitySearchCriteria
     */
    public function setIncludes(ActivityIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ActivityIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  string[optional]       $keyword
     * @return ActivitySearchCriteria
     */
    public function setKeyword($keyword)
    {
        $this->Keyword = $keyword;

        return $this;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->Keyword;
    }

    /**
     * @param  PagingCriteria[optional] $paging
     * @return ActivitySearchCriteria
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
     * @param  Period[option]         $period
     * @return ActivitySearchCriteria
     */
    public function setPeriod(Period $period = null)
    {
        $this->Period = $period;

        return $this;
    }

    /**
     * @return Period
     */
    public function getPeriod()
    {
        return $this->Period;
    }

    /**
     * @param  SimpleType\Guid[optional] $personId
     * @return ActivitySearchCriteria
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
}
