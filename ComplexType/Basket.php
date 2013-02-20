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
     * @var SimpleType\Guid
     */
    protected $CustomerId;

    /**
     * @var ArrayOfBasketItem
     */
    protected $Items;

    /**
     * @var ArrayOfBasketPayment
     */
    protected $Payments;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @param  SimpleType\Guid|null $customerId
     * @return Basket
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
     * @param  ArrayOfBasketItem|null $items
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
     * @param  ArrayOfBasketPayment|null $payments
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
     * @param  float|null $price
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
