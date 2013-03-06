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
     * @var string|null $Code
     */
    protected $Code;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var AddressName|null $Name
     */
    protected $Name;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Address|null $Address
     */
    protected $Address;

    /**
     * @param  SimpleType\guid|null $id
     * @return AddressLocation
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
     * @param  string|null     $code
     * @return AddressLocation
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
     * @param  AddressName|null $name
     * @return AddressLocation
     */
    public function setName(AddressName $name = null)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return AddressName|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  Address|null    $address
     * @return AddressLocation
     */
    public function setAddress(Address $address = null)
    {
        $this->Address = $address;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }

}
