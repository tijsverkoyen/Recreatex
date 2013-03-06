<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class DeletePurchaseOrderResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'DeletePurchaseOrderResult';

    /**

     * @var ValidationResult
     */
    protected $ValidationResult;

    /**

     * @var SimpleType\ResultState
     */
    protected $ResultState;

    /**

     * @var PurchaseOrder
     */
    protected $PurchaseOrder;

    /**
     * @param  ValidationResult[optional] $validationResult
     * @return DeletePurchaseOrderResult
     */
    public function setValidationResult(ValidationResult $validationResult = null)
    {
        $this->ValidationResult = $validationResult;

        return $this;
    }

    /**
     * @return ValidationResult
     */
    public function getValidationResult()
    {
        return $this->ValidationResult;
    }

    /**
     * @param  SimpleType\ResultState[optional] $resultState
     * @return DeletePurchaseOrderResult
     */
    public function setResultState(SimpleType\ResultState $resultState = null)
    {
        $this->ResultState = $resultState;

        return $this;
    }

    /**
     * @return SimpleType\ResultState
     */
    public function getResultState()
    {
        return $this->ResultState;
    }

    /**
     * @param  PurchaseOrder[optional]   $purchaseOrder
     * @return DeletePurchaseOrderResult
     */
    public function setPurchaseOrder(PurchaseOrder $purchaseOrder = null)
    {
        $this->PurchaseOrder = $purchaseOrder;

        return $this;
    }

    /**
     * @return PurchaseOrder
     */
    public function getPurchaseOrder()
    {
        return $this->PurchaseOrder;
    }
}
