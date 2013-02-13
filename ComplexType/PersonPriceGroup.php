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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\PersonPriceGroupType|null $Type
     */
    protected $Type;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PriceGroup|null $PriceGroup
     */
    protected $PriceGroup;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $StartDate
     */
    protected $StartDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EndDate
     */
    protected $EndDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\WeekDay|null $WeekDay
     */
    protected $WeekDay;

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
     * @var string|null $Till
     */
    protected $Till;

    /**
     * @param  SimpleType\Guid|null $id
     * @return PersonPriceGroup
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\PersonPriceGroupType|null $type
     * @return PersonPriceGroup
     */
    public function setType(SimpleType\PersonPriceGroupType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\PersonPriceGroupType|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param  PriceGroup|null  $priceGroup
     * @return PersonPriceGroup
     */
    public function setPriceGroup(PriceGroup $priceGroup = null)
    {
        $this->PriceGroup = $priceGroup;

        return $this;
    }

    /**
     * @return PriceGroup|null
     */
    public function getPriceGroup()
    {
        return $this->PriceGroup;
    }

    /**
     * @param  string|null      $startDate
     * @return PersonPriceGroup
     */
    public function setStartDate($startDate)
    {
        $this->StartDate = $startDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param  string|null      $endDate
     * @return PersonPriceGroup
     */
    public function setEndDate($endDate)
    {
        $this->EndDate = $endDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param  SimpleType\WeekDay|null $weekDay
     * @return PersonPriceGroup
     */
    public function setWeekDay(SimpleType\WeekDay $weekDay = null)
    {
        $this->WeekDay = $weekDay;

        return $this;
    }

    /**
     * @return SimpleType\WeekDay|null
     */
    public function getWeekDay()
    {
        return $this->WeekDay;
    }

    /**
     * @param  string|null      $from
     * @return PersonPriceGroup
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
     * @param  string|null      $till
     * @return PersonPriceGroup
     */
    public function setTill($till)
    {
        $this->Till = $till;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTill()
    {
        return $this->Till;
    }
}
