<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class DeletePurchaseLineResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'DeletePurchaseLineResult';

    /**

     * @var ValidationResult
     */
    protected $ValidationResult;

    /**

     * @var SimpleType\ResultState
     */
    protected $ResultState;

    /**

     * @var PurchaseLine
     */
    protected $PurchaseLine;

    /**
     * @param  ValidationResult[optional] $validationResult
     * @return DeletePurchaseLineResult
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
     * @return DeletePurchaseLineResult
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
     * @param  PurchaseLine[optional]   $purchaseLine
     * @return DeletePurchaseLineResult
     */
    public function setPurchaseLine(PurchaseLine $purchaseLine = null)
    {
        $this->PurchaseLine = $purchaseLine;

        return $this;
    }

    /**
     * @return PurchaseLine
     */
    public function getPurchaseLine()
    {
        return $this->PurchaseLine;
    }
}
