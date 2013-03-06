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
     * @var array
     */
    protected $BasketPaymentMethod = array();

    /**
     * @param  array                      $basketPaymentMethod
     * @return ArrayOfBasketPaymentMethod
     */
    public function setBasketPaymentMethod(array $basketPaymentMethod = array())
    {
        $this->BasketPaymentMethod = $basketPaymentMethod;

        return $this;
    }

    /**
     * @return array
     */
    public function getBasketPaymentMethod()
    {
	    if(!is_array($this->BasketPaymentMethod)) {
		    return array($this->BasketPaymentMethod);
	    }
	    return $this->BasketPaymentMethod;
    }
}
