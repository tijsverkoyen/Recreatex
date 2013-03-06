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
     * @var integer|null $Sequence
     */
    protected $Sequence;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Number
     */
    protected $Number;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SeatRange|null $Range
     */
    protected $Range;

    /**
     * @param  string|null $code
     * @return Seat
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
     * @return Seat
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
     * @return Seat
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
     * @param  integer|null $sequence
     * @return Seat
     */
    public function setSequence($sequence)
    {
        $this->Sequence = $sequence;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getSequence()
    {
        return $this->Sequence;
    }

    /**
     * @param  integer|null $number
     * @return Seat
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param  SeatRange|null $range
     * @return Seat
     */
    public function setRange(SeatRange $range = null)
    {
        $this->Range = $range;

        return $this;
    }

    /**
     * @return SeatRange|null
     */
    public function getRange()
    {
        return $this->Range;
    }

}
