<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class InvalidPeriod extends ComplexTypeAbstract
{
    const CLASS_NAME = 'InvalidPeriod';

    /**
     * @var ValidationResult
     */
    protected $ValidationResult;

    /**
     * @param  ValidationResult[optional] $validationResult
     * @return InvalidPeriod
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