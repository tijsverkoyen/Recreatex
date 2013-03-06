<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class LockBasketResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'LockBasketResult';

    /**
     * @var ArrayOfBasketItem
     */
    protected $BasketItems;

    /**
     * @var boolean
     */
    protected $IsLocked;

    /**
     * @var ValidationResult
     */
    protected $ValidationResult;

    /**
     * @param  ArrayOfBasketItem[optional] $basketItems
     * @return LockBasketResult
     */
    public function setBasketItems(ArrayOfBasketItem $basketItems = null)
    {
        $this->BasketItems = $basketItems;

        return $this;
    }

    /**
     * @return ArrayOfBasketItem
     */
    public function getBasketItems()
    {
        return $this->BasketItems;
    }

    /**
     * @param  boolean[optional] $isLocked
     * @return LockBasketResult
     */
    public function setIsLocked($isLocked)
    {
        $this->IsLocked = $isLocked;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLocked()
    {
        return $this->IsLocked;
    }

    /**
     * @param  ValidationResult[optional] $validationResult
     * @return LockBasketResult
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
}
