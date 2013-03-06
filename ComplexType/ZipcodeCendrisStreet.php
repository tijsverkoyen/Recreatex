<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ZipcodeCendrisStreet extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ZipcodeCendrisStreet';

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
     * @var string|null $Street
     */
    protected $Street;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ZipcodeId
     */
    protected $ZipcodeId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Zipcode|null $Zipcode
     */
    protected $Zipcode;

    /**
     * @param  SimpleType\guid|null $id
     * @return ZipcodeCendrisStreet
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
     * @param  string|null          $street
     * @return ZipcodeCendrisStreet
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
     * @param  SimpleType\guid|null $zipcodeId
     * @return ZipcodeCendrisStreet
     */
    public function setZipcodeId(SimpleType\guid $zipcodeId = null)
    {
        $this->ZipcodeId = $zipcodeId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getZipcodeId()
    {
        return $this->ZipcodeId;
    }

    /**
     * @param  Zipcode|null         $zipcode
     * @return ZipcodeCendrisStreet
     */
    public function setZipcode(Zipcode $zipcode = null)
    {
        $this->Zipcode = $zipcode;

        return $this;
    }

    /**
     * @return Zipcode|null
     */
    public function getZipcode()
    {
        return $this->Zipcode;
    }

}
