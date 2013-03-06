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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var BasketItem|null $ValidatedBasketItem
     */
    protected $ValidatedBasketItem;

    /**
     * @param  BasketItem|null            $validatedBasketItem
     * @return BasketItemValidationResult
     */
    public function setValidatedBasketItem(BasketItem $validatedBasketItem = null)
    {
        $this->ValidatedBasketItem = $validatedBasketItem;

        return $this;
    }

    /**
     * @return BasketItem|null
     */
    public function getValidatedBasketItem()
    {
        return $this->ValidatedBasketItem;
    }

}
