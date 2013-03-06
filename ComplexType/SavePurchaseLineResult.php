<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SavePurchaseLineResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SavePurchaseLineResult';

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
     * @var PurchaseLine|null $PurchaseLine
     */
    protected $PurchaseLine;

    /**
     * @param  ValidationResult|null  $validationResult
     * @return SavePurchaseLineResult
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
     * @return SavePurchaseLineResult
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
     * @param  PurchaseLine|null      $purchaseLine
     * @return SavePurchaseLineResult
     */
    public function setPurchaseLine(PurchaseLine $purchaseLine = null)
    {
        $this->PurchaseLine = $purchaseLine;

        return $this;
    }

    /**
     * @return PurchaseLine|null
     */
    public function getPurchaseLine()
    {
        return $this->PurchaseLine;
    }

}
