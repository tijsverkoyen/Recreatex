<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfBasketPayment extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfBasketPayment';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var BasketPayment[] $BasketPayment
     */
    protected $BasketPayment = array();

    /**
     * @param  BasketPayment[]      $basketPayment
     * @return ArrayOfBasketPayment
     */
    public function setBasketPayment(array $basketPayment = array())
    {
        $this->BasketPayment = $basketPayment;

        return $this;
    }

    /**
     * @return BasketPayment[]
     */
    public function getBasketPayment()
    {
        return $this->BasketPayment;
    }
}
