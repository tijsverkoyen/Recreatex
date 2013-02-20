<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SeatBlock extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SeatBlock';

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var Location
     */
    protected $Location;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var ArrayOfSeatRow
     */
    protected $Rows;

    /**
     * @param  string|null $code
     * @return SeatBlock
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
     * @param  SimpleType\Guid|null $id
     * @return SeatBlock
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  Location|null $location
     * @return SeatBlock
     */
    public function setLocation(Location $location = null)
    {
        $this->Location = $location;

        return $this;
    }

    /**
     * @return Location|null
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param  string|null $name
     * @return SeatBlock
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
     * @return SeatBlock
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
}
