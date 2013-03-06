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
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Street;

    /**
     * @var SimpleTypeGuid
     */
    protected $ZipcodeId;

    /**
     * @var Zipcode
     */
    protected $Zipcode;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return ZipcodeCendrisStreet
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string[optional]     $street
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
     * @param  SimpleType\Guid[optional] $zipcodeId
     * @return ZipcodeCendrisStreet
     */
    public function setZipcodeId(SimpleType\Guid $zipcodeId = null)
    {
        $this->ZipcodeId = $zipcodeId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getZipcodeId()
    {
        return $this->ZipcodeId;
    }

    /**
     * @param  Zipcode[optional]    $zipcode
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
