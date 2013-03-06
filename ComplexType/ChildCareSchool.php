<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ChildCareSchool extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ChildCareSchool';

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
     * @var AddressLocation
     */
    protected $Location;

    /**
     * @param  SimpleType\guid[optional] $id
     * @return ChildCareSchool
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
     * @param  string[optional] $code
     * @return ChildCareSchool
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
     * @param  string[optional] $name
     * @return ChildCareSchool
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
     * @param  AddressLocation[optional] $location
     * @return ChildCareSchool
     */
    public function setLocation(AddressLocation $location = null)
    {
        $this->Location = $location;

        return $this;
    }

    /**
     * @return AddressLocation|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
}
