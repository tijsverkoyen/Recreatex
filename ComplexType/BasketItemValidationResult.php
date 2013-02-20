<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class BasketItemValidationResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'BasketItemValidationResult';

    /**
     * @var BasketItem
     */
    protected $ValidatedBasketItem;

    /**
     * @param  BasketItem[optional]       $validatedBasketItem
     * @return BasketItemValidationResult
     */
    public function setValidatedBasketItem(BasketItem $validatedBasketItem = null)
    {
        $this->ValidatedBasketItem = $validatedBasketItem;

        return $this;
    }

    /**
     * @return BasketItem
     */
    public function getValidatedBasketItem()
    {
        return $this->ValidatedBasketItem;
    }
}
