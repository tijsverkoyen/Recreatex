<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CheckoutBasketResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CheckoutBasketResult';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var BasketValidationResult|null $BasketValidationResult
     */
    protected $BasketValidationResult;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\CheckoutResultState|null $ResultState
     */
    protected $ResultState;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfSalesItem|null $SalesItems
     */
    protected $SalesItems;

    /**
     * @param  BasketValidationResult|null $basketValidationResult
     * @return CheckoutBasketResult
     */
    public function setBasketValidationResult(BasketValidationResult $basketValidationResult = null)
    {
        $this->BasketValidationResult = $basketValidationResult;

        return $this;
    }

    /**
     * @return BasketValidationResult|null
     */
    public function getBasketValidationResult()
    {
        return $this->BasketValidationResult;
    }

    /**
     * @param  SimpleType\CheckoutResultState|null $resultState
     * @return CheckoutBasketResult
     */
    public function setResultState(SimpleType\CheckoutResultState $resultState = null)
    {
        $this->ResultState = $resultState;

        return $this;
    }

    /**
     * @return SimpleType\CheckoutResultState|null
     */
    public function getResultState()
    {
        return $this->ResultState;
    }

    /**
     * @param  ArrayOfSalesItem|null $salesItems
     * @return CheckoutBasketResult
     */
    public function setSalesItems(ArrayOfSalesItem $salesItems = null)
    {
        $this->SalesItems = $salesItems;

        return $this;
    }

    /**
     * @return ArrayOfSalesItem|null
     */
    public function getSalesItems()
    {
        return $this->SalesItems;
    }
}
