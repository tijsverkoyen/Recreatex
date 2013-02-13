<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class BasketValidationResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'BasketValidationResult';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfBasketItemValidationResult|null $BasketItemValidationResults
     */
    protected $BasketItemValidationResults;

    /**
     * @param  ArrayOfBasketItemValidationResult|null $basketItemValidationResults
     * @return BasketValidationResult
     */
    public function setBasketItemValidationResults(
        ArrayOfBasketItemValidationResult $basketItemValidationResults = null
    ) {
        $this->BasketItemValidationResults = $basketItemValidationResults;

        return $this;
    }

    /**
     * @return ArrayOfBasketItemValidationResult|null
     */
    public function getBasketItemValidationResults()
    {
        return $this->BasketItemValidationResults;
    }
}
