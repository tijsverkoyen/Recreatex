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
     * @var SimpleTypeGuid
     */
    protected $DeliveryAddressId;

    /**
     * @var ArrayOfAdditionalCost
     */
    protected $AdditionalCosts;

    /**
     * @var string
     */
    protected $OrderId;

    /**
     * @param  SimpleType\Guid[optional] $customerId
     * @return Basket
     */
    public function setCustomerId(SimpleType\Guid $customerId = null)
    {
        $this->CustomerId = $customerId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param  ArrayOfBasketItem[optional] $items
     * @return Basket
     */
    public function setItems(ArrayOfBasketItem $items = null)
    {
        $this->Items = $items;

        return $this;
    }

    /**
     * @return ArrayOfBasketItem
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * @param  ArrayOfBasketPayment[optional] $payments
     * @return Basket
     */
    public function setPayments(ArrayOfBasketPayment $payments = null)
    {
        $this->Payments = $payments;

        return $this;
    }

    /**
     * @return ArrayOfBasketPayment
     */
    public function getPayments()
    {
        return $this->Payments;
    }

    /**
     * @param  float[optional] $price
     * @return Basket
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
     * @param  SimpleType\Guid[optional] $deliveryAddressId
     * @return Basket
     */
    public function setDeliveryAddressId(SimpleType\Guid $deliveryAddressId = null)
    {
        $this->DeliveryAddressId = $deliveryAddressId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getDeliveryAddressId()
    {
        return $this->DeliveryAddressId;
    }

    /**
     * @param  ArrayOfAdditionalCost[optional] $additionalCosts
     * @return Basket
     */
    public function setAdditionalCosts(ArrayOfAdditionalCost $additionalCosts = null)
    {
        $this->AdditionalCosts = $additionalCosts;

        return $this;
    }

    /**
     * @return ArrayOfAdditionalCost
     */
    public function getAdditionalCosts()
    {
        return $this->AdditionalCosts;
    }

    /**
     * @param  string[optional] $orderId
     * @return Basket
     */
    public function setOrderId($orderId)
    {
        $this->OrderId = $orderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }
}
