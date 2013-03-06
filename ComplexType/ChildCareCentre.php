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
     * @var string|null $Name
     */
    protected $Name;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var AddressLocation|null $Location
     */
    protected $Location;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaxChildren
     */
    protected $MaxChildren;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Credential|null $Credential
     */
    protected $Credential;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsBlocked
     */
    protected $IsBlocked;

    /**
     * @param  SimpleType\guid|null $id
     * @return ChildCareCentre
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
     * @return ChildCareCentre
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
     * @param  string|null     $name
     * @return ChildCareCentre
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
     * @param  AddressLocation|null $location
     * @return ChildCareCentre
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

    /**
     * @param  integer|null    $maxChildren
     * @return ChildCareCentre
     */
    public function setMaxChildren($maxChildren)
    {
        $this->MaxChildren = $maxChildren;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaxChildren()
    {
        return $this->MaxChildren;
    }

    /**
     * @param  Credential|null $credential
     * @return ChildCareCentre
     */
    public function setCredential(Credential $credential = null)
    {
        $this->Credential = $credential;

        return $this;
    }

    /**
     * @return Credential|null
     */
    public function getCredential()
    {
        return $this->Credential;
    }

    /**
     * @param  boolean|null    $isBlocked
     * @return ChildCareCentre
     */
    public function setIsBlocked($isBlocked)
    {
        $this->IsBlocked = $isBlocked;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsBlocked()
    {
        return $this->IsBlocked;
    }

}
