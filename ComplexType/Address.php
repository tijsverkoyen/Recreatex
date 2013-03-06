<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Address extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Address';

    /**
     * @var string
     */
    protected $Box;

    /**
     * @var string
     */
    protected $Country;

    /**
     * @var string
     */
    protected $Number;

    /**
     * @var string
     */
    protected $Street;

    /**
     * @var string
     */
    protected $Town;

    /**
     * @var string
     */
    protected $ZipCode;

    /**
     * @param  string[optional] $box
     * @return Address
     */
    public function setBox($box)
    {
        $this->Box = $box;

        return $this;
    }

    /**
     * @return string
     */
    public function getBox()
    {
        return $this->Box;
    }

    /**
     * @param  string[optional] $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->Country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param  string[optional] $number
     * @return Address
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param  string[optional] $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->Street = $street;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param  string[optional] $town
     * @return Address
     */
    public function setTown($town)
    {
        $this->Town = $town;

        return $this;
    }

    /**
     * @return string
     */
    public function getTown()
    {
        return $this->Town;
    }

    /**
     * @param  string[optional] $zipCode
     * @return Address
     */
    public function setZipCode($zipCode)
    {
        $this->ZipCode = $zipCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }
}
