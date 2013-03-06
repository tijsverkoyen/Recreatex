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
     * @var array
     */
    protected $BasketPayment = array();

    /**
     * @param  array                $basketPayment
     * @return ArrayOfBasketPayment
     */
    public function setBasketPayment(array $basketPayment = array())
    {
        $this->BasketPayment = $basketPayment;

        return $this;
    }

    /**
     * @return array
     */
    public function getBasketPayment()
    {
        if (!is_array($this->BasketPayment)) {
            return array($this->BasketPayment);
        }

        return $this->BasketPayment;
    }
}
