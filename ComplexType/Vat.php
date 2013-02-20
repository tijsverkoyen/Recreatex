<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Vat extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Vat';

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var float
     */
    protected $Value;

    /**
     * @param  SimpleType\Guid|null $id
     * @return Vat
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
     * @param  string|null $name
     * @return Vat
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
     * @param  float|null $value
     * @return Vat
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getValue()
    {
        return $this->Value;
    }
}
