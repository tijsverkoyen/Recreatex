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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Code
     */
    protected $Code;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $DefaultCashPaymentMethod
     */
    protected $DefaultCashPaymentMethod;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $DefaultIncassoPaymentMethod
     */
    protected $DefaultIncassoPaymentMethod;

    /**
     * @param  string|null         $code
     * @return BasketPaymentMethod
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  SimpleType\guid|null $id
     * @return BasketPaymentMethod
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string|null         $name
     * @return BasketPaymentMethod
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  boolean|null        $defaultCashPaymentMethod
     * @return BasketPaymentMethod
     */
    public function setDefaultCashPaymentMethod($defaultCashPaymentMethod)
    {
        $this->DefaultCashPaymentMethod = $defaultCashPaymentMethod;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getDefaultCashPaymentMethod()
    {
        return $this->DefaultCashPaymentMethod;
    }

    /**
     * @param  boolean|null        $defaultIncassoPaymentMethod
     * @return BasketPaymentMethod
     */
    public function setDefaultIncassoPaymentMethod($defaultIncassoPaymentMethod)
    {
        $this->DefaultIncassoPaymentMethod = $defaultIncassoPaymentMethod;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getDefaultIncassoPaymentMethod()
    {
        return $this->DefaultIncassoPaymentMethod;
    }

}
