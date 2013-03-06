<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureReservationSitePlace extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureReservationSitePlace';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $CustomerId;

    /**
     * @var PriceGroup
     */
    protected $PriceGroup;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @param  SimpleType\Guid[optional]   $id
     * @return CultureReservationSitePlace
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
     * @param  SimpleType\Guid[optional]   $customerId
     * @return CultureReservationSitePlace
     */
    public function setCustomerId(SimpleType\Guid $customerId = null)
    {
        $this->CustomerId = $customerId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param  PriceGroup[optional]        $priceGroup
     * @return CultureReservationSitePlace
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
     * @param  float[optional]             $price
     * @return CultureReservationSitePlace
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
}
