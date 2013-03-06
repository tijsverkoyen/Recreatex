<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Reason extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Reason';

    /**

     * @var string
     */
    protected $Code;

    /**

     * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * @var string
     */
    protected $Name;

    /**

     * @var SimpleType\ReasonType
     */
    protected $ReasonType;

    /**
     * @param  string[optional] $code
     * @return Reason
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
     * @return Reason
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
     * @param  string[optional] $name
     * @return Reason
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
     * @param  SimpleType\ReasonType[optional] $reasonType
     * @return Reason
     */
    public function setReasonType(SimpleType\ReasonType $reasonType = null)
    {
        $this->ReasonType = $reasonType;

        return $this;
    }

    /**
     * @return SimpleType\ReasonType
     */
    public function getReasonType()
    {
        return $this->ReasonType;
    }
}
