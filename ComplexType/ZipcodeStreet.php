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
     * @var string|null $StreetName
     */
    protected $StreetName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfZipcode|null $Zipcodes
     */
    protected $Zipcodes;

    /**
     * @param  SimpleType\guid|null $id
     * @return ZipcodeStreet
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
     * @param  string|null   $streetName
     * @return ZipcodeStreet
     */
    public function setStreetName($streetName)
    {
        $this->StreetName = $streetName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->StreetName;
    }

    /**
     * @param  ArrayOfZipcode|null $zipcodes
     * @return ZipcodeStreet
     */
    public function setZipcodes(ArrayOfZipcode $zipcodes = null)
    {
        $this->Zipcodes = $zipcodes;

        return $this;
    }

    /**
     * @return ArrayOfZipcode|null
     */
    public function getZipcodes()
    {
        return $this->Zipcodes;
    }

}
