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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var BasketItem[] $BasketItem
     */
    protected $BasketItem = array();

    /**
     * @param  BasketItem[]      $basketItem
     * @return ArrayOfBasketItem
     */
    public function setBasketItem(array $basketItem = array())
    {
        $this->BasketItem = $basketItem;

        return $this;
    }

    /**
     * @return BasketItem[]
     */
    public function getBasketItem()
    {
        return $this->BasketItem;
    }

}
