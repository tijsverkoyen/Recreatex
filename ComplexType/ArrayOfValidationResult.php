<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfValidationResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfValidationResult';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ValidationResult[] $ValidationResult
     */
    protected $ValidationResult = array();

    /**
     * @param  ValidationResult[]      $validationResult
     * @return ArrayOfValidationResult
     */
    public function setValidationResult(array $validationResult = array())
    {
        $this->ValidationResult = $validationResult;

        return $this;
    }

    /**
     * @return ValidationResult[]
     */
    public function getValidationResult()
    {
        return $this->ValidationResult;
    }

}
