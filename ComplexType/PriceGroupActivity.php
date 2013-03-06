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

     * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * @var SimpleTypeGuid
     */
    protected $ActivityId;

    /**

     * @var SimpleTypeGuid
     */
    protected $PriceGroupId;

    /**

     * @var float
     */
    protected $Price;

    /**

     * @var string
     */
    protected $From;

    /**

     * @var string
     */
    protected $Until;

    /**

     * @var SimpleType\WeekDay
     */
    protected $DayOfWeek;

    /**

     * @var string
     */
    protected $PriceGroupDesc;

    /**

     * @var string
     */
    protected $PriceGroupSn;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return PriceGroupActivity
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
     * @param  SimpleType\Guid[optional] $activityId
     * @return PriceGroupActivity
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
     * @param  SimpleType\Guid[optional] $priceGroupId
     * @return PriceGroupActivity
     */
    public function setPriceGroupId(SimpleType\Guid $priceGroupId = null)
    {
        $this->PriceGroupId = $priceGroupId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPriceGroupId()
    {
        return $this->PriceGroupId;
    }

    /**
     * @param  float[optional]    $price
     * @return PriceGroupActivity
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param  string[optional]   $from
     * @return PriceGroupActivity
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
     * @param  string[optional]   $until
     * @return PriceGroupActivity
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

    /**
     * @param  SimpleType\WeekDay[optional] $dayOfWeek
     * @return PriceGroupActivity
     */
    public function setDayOfWeek(SimpleType\WeekDay $dayOfWeek = null)
    {
        $this->DayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * @return SimpleType\WeekDay
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }

    /**
     * @param  string[optional]   $priceGroupDesc
     * @return PriceGroupActivity
     */
    public function setPriceGroupDesc($priceGroupDesc)
    {
        $this->PriceGroupDesc = $priceGroupDesc;

        return $this;
    }

    /**
     * @return string
     */
    public function getPriceGroupDesc()
    {
        return $this->PriceGroupDesc;
    }

    /**
     * @param  string[optional]   $priceGroupSn
     * @return PriceGroupActivity
     */
    public function setPriceGroupSn($priceGroupSn)
    {
        $this->PriceGroupSn = $priceGroupSn;

        return $this;
    }

    /**
     * @return string
     */
    public function getPriceGroupSn()
    {
        return $this->PriceGroupSn;
    }
}
