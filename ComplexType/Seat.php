<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Seat extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Seat';

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
     * @var integer
     */
    protected $Sequence;

    /**
     * @var integer
     */
    protected $Number;

    /**
     * @var Seat
     */
    protected $Range;

    /**
     * @param  string[optional] $code
     * @return Seat
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
     * @param  SimpleType\Guid[optional] $id
     * @return Seat
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
     * @param  Location[optional] $location
     * @return Seat
     */
    public function setLocation(Location $location = null)
    {
        $this->Location = $location;

        return $this;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param  integer[optional] $sequence
     * @return Seat
     */
    public function setSequence($sequence)
    {
        $this->Sequence = $sequence;

        return $this;
    }

    /**
     * @return integer
     */
    public function getSequence()
    {
        return $this->Sequence;
    }

    /**
     * @param  integer[optional] $number
     * @return Seat
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param  SeatRange[optional] $range
     * @return Seat
     */
    public function setRange(SeatRange $range = null)
    {
        $this->Range = $range;

        return $this;
    }

    /**
     * @return SeatRange
     */
    public function getRange()
    {
        return $this->Range;
    }
}
