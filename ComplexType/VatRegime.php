<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class VatRegime extends ComplexTypeAbstract
{
    const CLASS_NAME = 'VatRegime';

    /**

     * maxOccurs = 1     * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * maxOccurs = 1     * @var string
     */
    protected $Code;

    /**

     * maxOccurs = 1     * @var string
     */
    protected $Name;

    /**

     * maxOccurs = 1     * @var Vat
     */
    protected $Vat;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return VatRegime
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
     * @param  string[optional] $code
     * @return VatRegime
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string[optional] $name
     * @return VatRegime
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  Vat[optional] $vat
     * @return VatRegime
     */
    public function setVat(Vat $vat = null)
    {
        $this->Vat = $vat;

        return $this;
    }

    /**
     * @return Vat
     */
    public function getVat()
    {
        return $this->Vat;
    }
}
