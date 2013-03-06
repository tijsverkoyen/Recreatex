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
     * @var string|null $Currency
     */
    protected $Currency;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PaymentMethodId
     */
    protected $PaymentMethodId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ExtraInfo1
     */
    protected $ExtraInfo1;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ExtraInfo2
     */
    protected $ExtraInfo2;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ExtraInfo3
     */
    protected $ExtraInfo3;

    /**
     * @param  float|null    $amount
     * @return BasketPayment
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
     * @param  string|null   $currency
     * @return BasketPayment
     */
    public function setCurrency($currency)
    {
        $this->Currency = $currency;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param  SimpleType\guid|null $paymentMethodId
     * @return BasketPayment
     */
    public function setPaymentMethodId(SimpleType\guid $paymentMethodId = null)
    {
        $this->PaymentMethodId = $paymentMethodId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPaymentMethodId()
    {
        return $this->PaymentMethodId;
    }

    /**
     * @param  string|null   $extraInfo1
     * @return BasketPayment
     */
    public function setExtraInfo1($extraInfo1)
    {
        $this->ExtraInfo1 = $extraInfo1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExtraInfo1()
    {
        return $this->ExtraInfo1;
    }

    /**
     * @param  string|null   $extraInfo2
     * @return BasketPayment
     */
    public function setExtraInfo2($extraInfo2)
    {
        $this->ExtraInfo2 = $extraInfo2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExtraInfo2()
    {
        return $this->ExtraInfo2;
    }

    /**
     * @param  string|null   $extraInfo3
     * @return BasketPayment
     */
    public function setExtraInfo3($extraInfo3)
    {
        $this->ExtraInfo3 = $extraInfo3;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExtraInfo3()
    {
        return $this->ExtraInfo3;
    }

}
