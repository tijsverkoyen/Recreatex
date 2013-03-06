<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Zipcode extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Zipcode';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $City
     */
    protected $City;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Country|null $Country
     */
    protected $Country;

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
     * @var string|null $Zip
     */
    protected $Zip;

    /**
     * @param  string|null $city
     * @return Zipcode
     */
    public function setCity($city)
    {
        $this->City = $city;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param  Country|null $country
     * @return Zipcode
     */
    public function setCountry(Country $country = null)
    {
        $this->Country = $country;

        return $this;
    }

    /**
     * @return Country|null
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param  SimpleType\guid|null $id
     * @return Zipcode
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
     * @param  string|null $zip
     * @return Zipcode
     */
    public function setZip($zip)
    {
        $this->Zip = $zip;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getZip()
    {
        return $this->Zip;
    }

}
