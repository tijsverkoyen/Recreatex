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
     * @var Address
     */
    protected $Address;

    /**
     * @var ArrayOfSeatBlock
     */
    protected $Blocks;

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var ArrayOfSeatRow
     */
    protected $Rows;

    /**
     * @param  Address[optional] $address
     * @return Hall
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

    /**
     * @param  ArrayOfSeatBlock[optional] $blocks
     * @return Hall
     */
    public function setBlocks(ArrayOfSeatBlock $blocks = null)
    {
        $this->Blocks = $blocks;

        return $this;
    }

    /**
     * @return ArrayOfSeatBlock
     */
    public function getBlocks()
    {
        return $this->Blocks;
    }

    /**
     * @param  string[optional] $code
     * @return Hall
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
     * @param  string[optional] $description
     * @return Hall
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return Hall
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
     * @return Hall
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
     * @param  ArrayOfSeatRow[optional] $rows
     * @return Hall
     */
    public function setRows(ArrayOfSeatRow $rows = null)
    {
        $this->Rows = $rows;

        return $this;
    }

    /**
     * @return ArrayOfSeatRow
     */
    public function getRows()
    {
        return $this->Rows;
    }
}
