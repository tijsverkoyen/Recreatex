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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ValidationResult|null $ValidationResult
     */
    protected $ValidationResult;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ResultState|null $ResultState
     */
    protected $ResultState;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PurchaseOrder|null $PurchaseOrder
     */
    protected $PurchaseOrder;

    /**
     * @param  ValidationResult|null     $validationResult
     * @return DeletePurchaseOrderResult
     */
    public function setValidationResult(ValidationResult $validationResult = null)
    {
        $this->ValidationResult = $validationResult;

        return $this;
    }

    /**
     * @return ValidationResult|null
     */
    public function getValidationResult()
    {
        return $this->ValidationResult;
    }

    /**
     * @param  SimpleType\ResultState|null $resultState
     * @return DeletePurchaseOrderResult
     */
    public function setResultState(SimpleType\ResultState $resultState = null)
    {
        $this->ResultState = $resultState;

        return $this;
    }

    /**
     * @return SimpleType\ResultState|null
     */
    public function getResultState()
    {
        return $this->ResultState;
    }

    /**
     * @param  PurchaseOrder|null        $purchaseOrder
     * @return DeletePurchaseOrderResult
     */
    public function setPurchaseOrder(PurchaseOrder $purchaseOrder = null)
    {
        $this->PurchaseOrder = $purchaseOrder;

        return $this;
    }

    /**
     * @return PurchaseOrder|null
     */
    public function getPurchaseOrder()
    {
        return $this->PurchaseOrder;
    }

}
