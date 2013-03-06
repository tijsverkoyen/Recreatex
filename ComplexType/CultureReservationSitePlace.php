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
     * @var SimpleType\guid|null $CustomerId
     */
    protected $CustomerId;

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
     * @var float|null $Price
     */
    protected $Price;

    /**
     * @param  SimpleType\guid|null        $id
     * @return CultureReservationSitePlace
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
     * @param  SimpleType\guid|null        $customerId
     * @return CultureReservationSitePlace
     */
    public function setCustomerId(SimpleType\guid $customerId = null)
    {
        $this->CustomerId = $customerId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param  PriceGroup|null             $priceGroup
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
     * @param  float|null                  $price
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
