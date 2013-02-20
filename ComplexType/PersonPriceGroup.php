<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonPriceGroup extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonPriceGroup';

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var SimpleType\PersonPriceGroupType[optional] $Type
     */
    protected $Type;

    /**
     * @var PriceGroup[optional] $PriceGroup
     */
    protected $PriceGroup;

    /**
     * @var string
     */
    protected $StartDate;

    /**
     * @var string
     */
    protected $EndDate;

    /**
     * @var SimpleType\WeekDay[optional] $WeekDay
     */
    protected $WeekDay;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var string
     */
    protected $Till;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return PersonPriceGroup
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\PersonPriceGroupType[optional] $type
     * @return PersonPriceGroup
     */
    public function setType(SimpleType\PersonPriceGroupType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\PersonPriceGroupType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param  PriceGroup[optional] $priceGroup
     * @return PersonPriceGroup
     */
    public function setPriceGroup(PriceGroup $priceGroup = null)
    {
        $this->PriceGroup = $priceGroup;

        return $this;
    }

    /**
     * @return PriceGroup
     */
    public function getPriceGroup()
    {
        return $this->PriceGroup;
    }

    /**
     * @param  string[optional] $startDate
     * @return PersonPriceGroup
     */
    public function setStartDate($startDate)
    {
        $this->StartDate = $startDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param  string[optional] $endDate
     * @return PersonPriceGroup
     */
    public function setEndDate($endDate)
    {
        $this->EndDate = $endDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param  SimpleType\WeekDay[optional] $weekDay
     * @return PersonPriceGroup
     */
    public function setWeekDay(SimpleType\WeekDay $weekDay = null)
    {
        $this->WeekDay = $weekDay;

        return $this;
    }

    /**
     * @return SimpleType\WeekDay
     */
    public function getWeekDay()
    {
        return $this->WeekDay;
    }

    /**
     * @param  string[optional] $from
     * @return PersonPriceGroup
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
     * @param  string[optional] $till
     * @return PersonPriceGroup
     */
    public function setTill($till)
    {
        $this->Till = $till;

        return $this;
    }

    /**
     * @return string
     */
    public function getTill()
    {
        return $this->Till;
    }
}
