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
     * @param float|null $amount
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
     * @param string|null $currency
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
     * @param SimpleType\guid|null $paymentMethodId
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


}

