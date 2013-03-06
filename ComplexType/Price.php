<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Price extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Price';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Amount
     */
    protected $Amount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PriceGroup|null $Group
     */
    protected $Group;

    /**
     * @param  float|null $amount
     * @return Price
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param  PriceGroup|null $group
     * @return Price
     */
    public function setGroup(PriceGroup $group = null)
    {
        $this->Group = $group;

        return $this;
    }

    /**
     * @return PriceGroup|null
     */
    public function getGroup()
    {
        return $this->Group;
    }

}
