<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Basket extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Basket';

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
     * @var ArrayOfBasketItem|null $Items
     */
    protected $Items;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfBasketPayment|null $Payments
     */
    protected $Payments;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Price
     */
    protected $Price;


    /**
     * @param SimpleType\guid|null $customerId
     * @return Basket
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
     * @param ArrayOfBasketItem|null $items
     * @return Basket
     */
    public function setItems(ArrayOfBasketItem $items = null)
    {
        $this->Items = $items;

        return $this;
    }

    /**
     * @return ArrayOfBasketItem|null
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * @param ArrayOfBasketPayment|null $payments
     * @return Basket
     */
    public function setPayments(ArrayOfBasketPayment $payments = null)
    {
        $this->Payments = $payments;

        return $this;
    }

    /**
     * @return ArrayOfBasketPayment|null
     */
    public function getPayments()
    {
        return $this->Payments;
    }

    /**
     * @param float|null $price
     * @return Basket
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

