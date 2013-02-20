<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SeatRow extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SeatRow';

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
     * @var ArrayOfSeat
     */
    protected $Seats;

    /**
     * @param  string|null $code
     * @return SeatRow
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
     * @return SeatRow
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
     * @return SeatRow
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
     * @return SeatRow
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
     * @param  ArrayOfSeat|null $seats
     * @return SeatRow
     */
    public function setSeats(ArrayOfSeat $seats = null)
    {
        $this->Seats = $seats;

        return $this;
    }

    /**
     * @return ArrayOfSeat|null
     */
    public function getSeats()
    {
        return $this->Seats;
    }
}
