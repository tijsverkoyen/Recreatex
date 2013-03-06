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
     * @var string
     */
    protected $CityNamePattern;

    /**
     * @var string
     */
    protected $CountryShortName;

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var string
     */
    protected $ZipcodePattern;

    /**
     * @var string
     */
    protected $Street;

    /**
     * @var integer
     */
    protected $Number;

    /**
     * @param  string[optional]       $cityNamePattern
     * @return ZipcodesSearchCriteria
     */
    public function setCityNamePattern($cityNamePattern)
    {
        $this->CityNamePattern = $cityNamePattern;

        return $this;
    }

    /**
     * @return string
     */
    public function getCityNamePattern()
    {
        return $this->CityNamePattern;
    }

    /**
     * @param  string[optional]       $countryShortName
     * @return ZipcodesSearchCriteria
     */
    public function setCountryShortName($countryShortName)
    {
        $this->CountryShortName = $countryShortName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryShortName()
    {
        return $this->CountryShortName;
    }

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return ZipcodesSearchCriteria
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
     * @param  PagingCriteria[optional] $paging
     * @return ZipcodesSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param  string[optional]       $zipcodePattern
     * @return ZipcodesSearchCriteria
     */
    public function setZipcodePattern($zipcodePattern)
    {
        $this->ZipcodePattern = $zipcodePattern;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipcodePattern()
    {
        return $this->ZipcodePattern;
    }

    /**
     * @param  string[optional]       $street
     * @return ZipcodesSearchCriteria
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
     * @param  integer[optional]      $number
     * @return ZipcodesSearchCriteria
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
}
