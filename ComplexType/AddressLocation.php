<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class AddressLocation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'AddressLocation';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var AddressName
     */
    protected $Name;

    /**
     * @var Address
     */
    protected $Address;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return AddressLocation
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
     * @return AddressLocation
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
     * @param  AddressName[optional] $name
     * @return AddressLocation
     */
    public function setName(AddressName $name = null)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return AddressName
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  Address[optional] $address
     * @return AddressLocation
     */
    public function setAddress(Address $address = null)
    {
        $this->Address = $address;

        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }
}
