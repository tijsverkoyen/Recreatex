<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ZipcodesSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ZipcodesSearchCriteria';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CityNamePattern
     */
    protected $CityNamePattern;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CountryShortName
     */
    protected $CountryShortName;

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
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ZipcodePattern
     */
    protected $ZipcodePattern;

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
     * @var integer|null $Number
     */
    protected $Number;

    /**
     * @param  string|null            $cityNamePattern
     * @return ZipcodesSearchCriteria
     */
    public function setCityNamePattern($cityNamePattern)
    {
        $this->CityNamePattern = $cityNamePattern;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCityNamePattern()
    {
        return $this->CityNamePattern;
    }

    /**
     * @param  string|null            $countryShortName
     * @return ZipcodesSearchCriteria
     */
    public function setCountryShortName($countryShortName)
    {
        $this->CountryShortName = $countryShortName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountryShortName()
    {
        return $this->CountryShortName;
    }

    /**
     * @param  SimpleType\guid|null   $id
     * @return ZipcodesSearchCriteria
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
     * @param  PagingCriteria|null    $paging
     * @return ZipcodesSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria|null
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param  string|null            $zipcodePattern
     * @return ZipcodesSearchCriteria
     */
    public function setZipcodePattern($zipcodePattern)
    {
        $this->ZipcodePattern = $zipcodePattern;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipcodePattern()
    {
        return $this->ZipcodePattern;
    }

    /**
     * @param  string|null            $street
     * @return ZipcodesSearchCriteria
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
     * @param  integer|null           $number
     * @return ZipcodesSearchCriteria
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

}
