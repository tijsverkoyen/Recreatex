<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ValidationResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ValidationResult';

    /**
     * @var boolean
     */
    protected $IsValid;

    /**
     * @var string
     */
    protected $Message;

    /**
     * @var string
     */
    protected $brokenRuleName;

    /**
     * @param  boolean[optional] $isValid
     * @return ValidationResult
     */
    public function setIsValid($isValid)
    {
        $this->IsValid = $isValid;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsValid()
    {
        return $this->IsValid;
    }

    /**
     * @param  string[optional] $message
     * @return ValidationResult
     */
    public function setMessage($message)
    {
        $this->Message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param  string[optional] $brokenRuleName
     * @return ValidationResult
     */
    public function setBrokenRuleName($brokenRuleName)
    {
        $this->brokenRuleName = $brokenRuleName;

        return $this;
    }

    /**
     * @return string
     */
    public function getBrokenRuleName()
    {
        return $this->brokenRuleName;
    }
}
