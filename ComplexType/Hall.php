<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Hall extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Hall';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Address|null $Address
     */
    protected $Address;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfSeatBlock|null $Blocks
     */
    protected $Blocks;

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
     * @var string|null $Description
     */
    protected $Description;

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
     * @var ArrayOfSeatRow|null $Rows
     */
    protected $Rows;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfCultureSite|null $CultureSites
     */
    protected $CultureSites;

    /**
     * @param  Address|null $address
     * @return Hall
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

    /**
     * @param  ArrayOfSeatBlock|null $blocks
     * @return Hall
     */
    public function setBlocks(ArrayOfSeatBlock $blocks = null)
    {
        $this->Blocks = $blocks;

        return $this;
    }

    /**
     * @return ArrayOfSeatBlock|null
     */
    public function getBlocks()
    {
        return $this->Blocks;
    }

    /**
     * @param  string|null $code
     * @return Hall
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
     * @param  string|null $description
     * @return Hall
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  SimpleType\guid|null $id
     * @return Hall
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
     * @param  string|null $name
     * @return Hall
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
     * @param  ArrayOfSeatRow|null $rows
     * @return Hall
     */
    public function setRows(ArrayOfSeatRow $rows = null)
    {
        $this->Rows = $rows;

        return $this;
    }

    /**
     * @return ArrayOfSeatRow|null
     */
    public function getRows()
    {
        return $this->Rows;
    }

    /**
     * @param  ArrayOfCultureSite|null $cultureSites
     * @return Hall
     */
    public function setCultureSites(ArrayOfCultureSite $cultureSites = null)
    {
        $this->CultureSites = $cultureSites;

        return $this;
    }

    /**
     * @return ArrayOfCultureSite|null
     */
    public function getCultureSites()
    {
        return $this->CultureSites;
    }

}
