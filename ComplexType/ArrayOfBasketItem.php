<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfBasketItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfBasketItem';

    /**
     * @var array
     */
    protected $BasketItem = array();

    /**
     * @param  array             $basketItem
     * @return ArrayOfBasketItem
     */
    public function setBasketItem(array $basketItem = array())
    {
        $this->BasketItem = $basketItem;

        return $this;
    }

    /**
     * @return array
     */
    public function getBasketItem()
    {
	    if(!is_array($this->BasketItem)) {
		    return array($this->BasketItem);
	    }
	    return $this->BasketItem;
    }
}
