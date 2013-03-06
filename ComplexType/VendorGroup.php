<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class VendorGroup extends ComplexTypeAbstract
{
    const CLASS_NAME = 'VendorGroup';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return VendorGroup
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
     * @param  string[optional] $code
     * @return VendorGroup
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
     * @param  string[optional] $name
     * @return VendorGroup
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
}
