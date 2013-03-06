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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfBasketItem|null $BasketItems
     */
    protected $BasketItems;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsLocked
     */
    protected $IsLocked;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ValidationResult|null $ValidationResult
     */
    protected $ValidationResult;

    /**
     * @param  ArrayOfBasketItem|null $basketItems
     * @return LockBasketResult
     */
    public function setBasketItems(ArrayOfBasketItem $basketItems = null)
    {
        $this->BasketItems = $basketItems;

        return $this;
    }

    /**
     * @return ArrayOfBasketItem|null
     */
    public function getBasketItems()
    {
        return $this->BasketItems;
    }

    /**
     * @param  boolean|null     $isLocked
     * @return LockBasketResult
     */
    public function setIsLocked($isLocked)
    {
        $this->IsLocked = $isLocked;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsLocked()
    {
        return $this->IsLocked;
    }

    /**
     * @param  ValidationResult|null $validationResult
     * @return LockBasketResult
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

}
