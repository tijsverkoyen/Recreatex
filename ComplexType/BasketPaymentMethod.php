<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class BasketPaymentMethod extends ComplexTypeAbstract
{
    const CLASS_NAME = 'BasketPaymentMethod';

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var boolean
     */
    protected $DefaultCashPaymentMethod;

    /**
     * @var boolean
     */
    protected $DefaultIncassoPaymentMethod;

    /**
     * @param  string[optional]    $code
     * @return BasketPaymentMethod
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return BasketPaymentMethod
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string[optional]    $name
     * @return BasketPaymentMethod
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  boolean[optional]   $defaultCashPaymentMethod
     * @return BasketPaymentMethod
     */
    public function setDefaultCashPaymentMethod($defaultCashPaymentMethod)
    {
        $this->DefaultCashPaymentMethod = $defaultCashPaymentMethod;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultCashPaymentMethod()
    {
        return $this->DefaultCashPaymentMethod;
    }

    /**
     * @param  boolean[optional]   $defaultIncassoPaymentMethod
     * @return BasketPaymentMethod
     */
    public function setDefaultIncassoPaymentMethod($defaultIncassoPaymentMethod)
    {
        $this->DefaultIncassoPaymentMethod = $defaultIncassoPaymentMethod;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultIncassoPaymentMethod()
    {
        return $this->DefaultIncassoPaymentMethod;
    }
}
