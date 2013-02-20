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
     * @var array
     */
    protected $ValidationResult = array();

    /**
     * @param  array                   $validationResult
     * @return ArrayOfValidationResult
     */
    public function setValidationResult(array $validationResult = array())
    {
        $this->ValidationResult = $validationResult;

        return $this;
    }

    /**
     * @return array
     */
    public function getValidationResult()
    {
        return $this->ValidationResult;
    }
}
