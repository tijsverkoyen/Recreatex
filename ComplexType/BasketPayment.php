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
     * @var string
     */
    protected $ExtraInfo1;

    /**
     * @var string
     */
    protected $ExtraInfo2;

    /**
     * @var string
     */
    protected $ExtraInfo3;

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

    /**
     * @param  string[optional] $extraInfo1
     * @return BasketPayment
     */
    public function setExtraInfo1($extraInfo1)
    {
        $this->ExtraInfo1 = $extraInfo1;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtraInfo1()
    {
        return $this->ExtraInfo1;
    }

    /**
     * @param  string[optional] $extraInfo2
     * @return BasketPayment
     */
    public function setExtraInfo2($extraInfo2)
    {
        $this->ExtraInfo2 = $extraInfo2;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtraInfo2()
    {
        return $this->ExtraInfo2;
    }

    /**
     * @param  string[optional] $extraInfo3
     * @return BasketPayment
     */
    public function setExtraInfo3($extraInfo3)
    {
        $this->ExtraInfo3 = $extraInfo3;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtraInfo3()
    {
        return $this->ExtraInfo3;
    }
}
