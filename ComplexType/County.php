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
     * @var Country|null $Country
     */
    protected $Country;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

    /**
     * @param  SimpleType\guid|null $id
     * @return County
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
     * @param  Country|null $country
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
     * @param  string|null $name
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
