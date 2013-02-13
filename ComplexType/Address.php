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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Box
     */
    protected $Box;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Country
     */
    protected $Country;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Number
     */
    protected $Number;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Street
     */
    protected $Street;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Town
     */
    protected $Town;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ZipCode
     */
    protected $ZipCode;

    /**
     * @param  string|null $box
     * @return Address
     */
    public function setBox($box)
    {
        $this->Box = $box;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBox()
    {
        return $this->Box;
    }

    /**
     * @param  string|null $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->Country = $country;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param  string|null $number
     * @return Address
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param  string|null $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->Street = $street;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param  string|null $town
     * @return Address
     */
    public function setTown($town)
    {
        $this->Town = $town;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTown()
    {
        return $this->Town;
    }

    /**
     * @param  string|null $zipCode
     * @return Address
     */
    public function setZipCode($zipCode)
    {
        $this->ZipCode = $zipCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }
}
