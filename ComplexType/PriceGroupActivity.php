<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PriceGroupActivity extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PriceGroupActivity';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ActivityId
     */
    protected $ActivityId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PriceGroupId
     */
    protected $PriceGroupId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Price
     */
    protected $Price;

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
     * @var SimpleType\WeekDay|null $DayOfWeek
     */
    protected $DayOfWeek;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PriceGroupDesc
     */
    protected $PriceGroupDesc;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PriceGroupSn
     */
    protected $PriceGroupSn;

    /**
     * @param  SimpleType\guid|null $id
     * @return PriceGroupActivity
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\guid|null $activityId
     * @return PriceGroupActivity
     */
    public function setActivityId(SimpleType\guid $activityId = null)
    {
        $this->ActivityId = $activityId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getActivityId()
    {
        return $this->ActivityId;
    }

    /**
     * @param  SimpleType\guid|null $priceGroupId
     * @return PriceGroupActivity
     */
    public function setPriceGroupId(SimpleType\guid $priceGroupId = null)
    {
        $this->PriceGroupId = $priceGroupId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPriceGroupId()
    {
        return $this->PriceGroupId;
    }

    /**
     * @param  float|null         $price
     * @return PriceGroupActivity
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param  string|null        $from
     * @return PriceGroupActivity
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
     * @param  string|null        $until
     * @return PriceGroupActivity
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
     * @param  SimpleType\WeekDay|null $dayOfWeek
     * @return PriceGroupActivity
     */
    public function setDayOfWeek(SimpleType\WeekDay $dayOfWeek = null)
    {
        $this->DayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * @return SimpleType\WeekDay|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }

    /**
     * @param  string|null        $priceGroupDesc
     * @return PriceGroupActivity
     */
    public function setPriceGroupDesc($priceGroupDesc)
    {
        $this->PriceGroupDesc = $priceGroupDesc;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPriceGroupDesc()
    {
        return $this->PriceGroupDesc;
    }

    /**
     * @param  string|null        $priceGroupSn
     * @return PriceGroupActivity
     */
    public function setPriceGroupSn($priceGroupSn)
    {
        $this->PriceGroupSn = $priceGroupSn;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPriceGroupSn()
    {
        return $this->PriceGroupSn;
    }

}
