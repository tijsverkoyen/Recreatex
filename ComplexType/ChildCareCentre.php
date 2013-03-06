<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ChildCareCentre extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ChildCareCentre';

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

     * @var integer
     */
    protected $MaxChildren;

    /**

     * @var Credential
     */
    protected $Credential;

    /**

     * @var boolean
     */
    protected $IsBlocked;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return ChildCareCentre
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
     * @return ChildCareCentre
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
     * @return ChildCareCentre
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
     * @param  AddressLocation[optional] $location
     * @return ChildCareCentre
     */
    public function setLocation(AddressLocation $location = null)
    {
        $this->Location = $location;

        return $this;
    }

    /**
     * @return AddressLocation
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param  integer[optional] $maxChildren
     * @return ChildCareCentre
     */
    public function setMaxChildren($maxChildren)
    {
        $this->MaxChildren = $maxChildren;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaxChildren()
    {
        return $this->MaxChildren;
    }

    /**
     * @param  Credential[optional] $credential
     * @return ChildCareCentre
     */
    public function setCredential(Credential $credential = null)
    {
        $this->Credential = $credential;

        return $this;
    }

    /**
     * @return Credential
     */
    public function getCredential()
    {
        return $this->Credential;
    }

    /**
     * @param  boolean[optional] $isBlocked
     * @return ChildCareCentre
     */
    public function setIsBlocked($isBlocked)
    {
        $this->IsBlocked = $isBlocked;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBlocked()
    {
        return $this->IsBlocked;
    }
}
