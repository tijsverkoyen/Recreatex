<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureSite extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureSite';

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
     * @var string|null $Code
     */
    protected $Code;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $TotalPlaces
     */
    protected $TotalPlaces;

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
     * @var Location|null $Location
     */
    protected $Location;

    /**
     * @param  SimpleType\guid|null $id
     * @return CultureSite
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
     * @param  string|null $code
     * @return CultureSite
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
     * @param  integer|null $totalPlaces
     * @return CultureSite
     */
    public function setTotalPlaces($totalPlaces)
    {
        $this->TotalPlaces = $totalPlaces;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getTotalPlaces()
    {
        return $this->TotalPlaces;
    }

    /**
     * @param  string|null $name
     * @return CultureSite
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
     * @param  Location|null $location
     * @return CultureSite
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

}
