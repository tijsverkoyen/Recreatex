<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class BasketPayment extends ComplexTypeAbstract
{
    const CLASS_NAME = 'BasketPayment';

    /**
     * @var float
     */
    protected $Amount;

    /**
     * @var string
     */
    protected $Currency;

    /**
     * @var SimpleType\Guid
     */
    protected $PaymentMethodId;

    /**
     * @param  float[optional] $amount
     * @return BasketPayment
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param  string[optional] $currency
     * @return BasketPayment
     */
    public function setCurrency($currency)
    {
        $this->Currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param  SimpleType\Guid[optional] $paymentMethodId
     * @return BasketPayment
     */
    public function setPaymentMethodId(SimpleType\Guid $paymentMethodId = null)
    {
        $this->PaymentMethodId = $paymentMethodId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPaymentMethodId()
    {
        return $this->PaymentMethodId;
    }
}
