<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * Exposition Domain Object 
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Exposition extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Exposition';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfAudience|null $Audiences
     */
    protected $Audiences;

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
     * @var string|null $Description
     */
    protected $Description;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $DivisionId
     */
    protected $DivisionId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ExpositionType|null $ExpositionType
     */
    protected $ExpositionType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $From
     */
    protected $From;

    /**
     * Exposition Unique Identifier 
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
     * @var Picture|null $Image
     */
    protected $Image;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Location
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
     * @var ArrayOfExpositionPeriod|null $Periods
     */
    protected $Periods;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfExpositionPrice|null $Prices
     */
    protected $Prices;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Until
     */
    protected $Until;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Vat|null $VAT
     */
    protected $VAT;


    /**
     * @param ArrayOfAudience|null $audiences
     * @return Exposition
     */
    public function setAudiences(ArrayOfAudience $audiences = null)
    {
        $this->Audiences = $audiences;

        return $this;
    }

    /**
     * @return ArrayOfAudience|null
     */
    public function getAudiences()
    {
        return $this->Audiences;
    }

    /**
     * @param string|null $code
     * @return Exposition
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
     * @param string|null $description
     * @return Exposition
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param SimpleType\guid|null $divisionId
     * @return Exposition
     */
    public function setDivisionId(SimpleType\guid $divisionId = null)
    {
        $this->DivisionId = $divisionId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getDivisionId()
    {
        return $this->DivisionId;
    }

    /**
     * @param ExpositionType|null $expositionType
     * @return Exposition
     */
    public function setExpositionType(ExpositionType $expositionType = null)
    {
        $this->ExpositionType = $expositionType;

        return $this;
    }

    /**
     * @return ExpositionType|null
     */
    public function getExpositionType()
    {
        return $this->ExpositionType;
    }

    /**
     * @param string|null $from
     * @return Exposition
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param SimpleType\guid|null $id
     * @return Exposition
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
     * @param Picture|null $image
     * @return Exposition
     */
    public function setImage(Picture $image = null)
    {
        $this->Image = $image;

        return $this;
    }

    /**
     * @return Picture|null
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param string|null $location
     * @return Exposition
     */
    public function setLocation($location)
    {
        $this->Location = $location;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param string|null $name
     * @return Exposition
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
     * @param ArrayOfExpositionPeriod|null $periods
     * @return Exposition
     */
    public function setPeriods(ArrayOfExpositionPeriod $periods = null)
    {
        $this->Periods = $periods;

        return $this;
    }

    /**
     * @return ArrayOfExpositionPeriod|null
     */
    public function getPeriods()
    {
        return $this->Periods;
    }

    /**
     * @param ArrayOfExpositionPrice|null $prices
     * @return Exposition
     */
    public function setPrices(ArrayOfExpositionPrice $prices = null)
    {
        $this->Prices = $prices;

        return $this;
    }

    /**
     * @return ArrayOfExpositionPrice|null
     */
    public function getPrices()
    {
        return $this->Prices;
    }

    /**
     * @param string|null $until
     * @return Exposition
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUntil()
    {
        return $this->Until;
    }

    /**
     * @param Vat|null $vAT
     * @return Exposition
     */
    public function setVAT(Vat $vAT = null)
    {
        $this->VAT = $vAT;

        return $this;
    }

    /**
     * @return Vat|null
     */
    public function getVAT()
    {
        return $this->VAT;
    }


}

