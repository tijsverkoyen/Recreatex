<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfBasketItemValidationResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfBasketItemValidationResult';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var BasketItemValidationResult[] $BasketItemValidationResult
     */
    protected $BasketItemValidationResult = array();

    /**
     * @param  BasketItemValidationResult[]      $basketItemValidationResult
     * @return ArrayOfBasketItemValidationResult
     */
    public function setBasketItemValidationResult(array $basketItemValidationResult = array())
    {
        $this->BasketItemValidationResult = $basketItemValidationResult;

        return $this;
    }

    /**
     * @return BasketItemValidationResult[]
     */
    public function getBasketItemValidationResult()
    {
        return $this->BasketItemValidationResult;
    }

}
