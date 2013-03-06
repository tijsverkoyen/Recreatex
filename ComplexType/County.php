<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class County extends ComplexTypeAbstract
{
    const CLASS_NAME = 'County';

    /**

     * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * @var string
     */
    protected $Code;

    /**

     * @var Country
     */
    protected $Country;

    /**

     * @var string
     */
    protected $Name;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return County
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
     * @param  string[optional] $code
     * @return County
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
     * @param  Country[optional] $country
     * @return County
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
     * @param  string[optional] $name
     * @return County
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
}
