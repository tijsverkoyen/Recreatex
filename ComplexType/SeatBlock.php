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
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Location|null $Location
     */
    protected $Location;

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
     * @param  SimpleType\guid|null $id
     * @return SeatBlock
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
