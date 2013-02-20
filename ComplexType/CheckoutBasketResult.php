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
     * @var BasketValidationResult
     */
    protected $BasketValidationResult;

    /**
     * @var SimpleTypeCheckoutResultState
     */
    protected $ResultState;

    /**
     * @var SimpleTypeCheckoutResultState
     */
    protected $SalesItems;

    /**
     * @param  BasketValidationResult[optional] $basketValidationResult
     * @return CheckoutBasketResult
     */
    public function setBasketValidationResult(BasketValidationResult $basketValidationResult = null)
    {
        $this->BasketValidationResult = $basketValidationResult;

        return $this;
    }

    /**
     * @return BasketValidationResult
     */
    public function getBasketValidationResult()
    {
        return $this->BasketValidationResult;
    }

    /**
     * @param  SimpleType\CheckoutResultState[optional] $resultState
     * @return CheckoutBasketResult
     */
    public function setResultState(SimpleType\CheckoutResultState $resultState = null)
    {
        $this->ResultState = $resultState;

        return $this;
    }

    /**
     * @return SimpleType\CheckoutResultState
     */
    public function getResultState()
    {
        return $this->ResultState;
    }

    /**
     * @param  ArrayOfSalesItem[optional] $salesItems
     * @return CheckoutBasketResult
     */
    public function setSalesItems(ArrayOfSalesItem $salesItems = null)
    {
        $this->SalesItems = $salesItems;

        return $this;
    }

    /**
     * @return ArrayOfSalesItem
     */
    public function getSalesItems()
    {
        return $this->SalesItems;
    }
}
