<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ValidationResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ValidationResult';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsValid
     */
    protected $IsValid;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Message
     */
    protected $Message;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $brokenRuleName
     */
    protected $brokenRuleName;


    /**
     * @param boolean|null $isValid
     * @return ValidationResult
     */
    public function setIsValid($isValid)
    {
        $this->IsValid = $isValid;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsValid()
    {
        return $this->IsValid;
    }

    /**
     * @param string|null $message
     * @return ValidationResult
     */
    public function setMessage($message)
    {
        $this->Message = $message;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string|null $brokenRuleName
     * @return ValidationResult
     */
    public function setBrokenRuleName($brokenRuleName)
    {
        $this->brokenRuleName = $brokenRuleName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBrokenRuleName()
    {
        return $this->brokenRuleName;
    }


}

