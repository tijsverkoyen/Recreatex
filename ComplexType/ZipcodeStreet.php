<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ZipcodeStreet extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ZipcodeStreet';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $StreetName;

    /**
     * @var ArrayOfZipcode
     */
    protected $Zipcodes;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return ZipcodeStreet
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
     * @param  string[optional] $streetName
     * @return ZipcodeStreet
     */
    public function setStreetName($streetName)
    {
        $this->StreetName = $streetName;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->StreetName;
    }

    /**
     * @param  ArrayOfZipcode[optional] $zipcodes
     * @return ZipcodeStreet
     */
    public function setZipcodes(ArrayOfZipcode $zipcodes = null)
    {
        $this->Zipcodes = $zipcodes;

        return $this;
    }

    /**
     * @return ArrayOfZipcode
     */
    public function getZipcodes()
    {
        return $this->Zipcodes;
    }
}
