<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfBasketPaymentMethod extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfBasketPaymentMethod';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var BasketPaymentMethod[] $BasketPaymentMethod
     */
    protected $BasketPaymentMethod = array();

    /**
     * @param  BasketPaymentMethod[]      $basketPaymentMethod
     * @return ArrayOfBasketPaymentMethod
     */
    public function setBasketPaymentMethod(array $basketPaymentMethod = array())
    {
        $this->BasketPaymentMethod = $basketPaymentMethod;

        return $this;
    }

    /**
     * @return BasketPaymentMethod[]
     */
    public function getBasketPaymentMethod()
    {
        return $this->BasketPaymentMethod;
    }
}
