<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * The unit of an article : ex. Box, Bottle, Kg, M., Piece ...
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArticleUnit extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArticleUnit';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var string
     */
    protected $Name;

    /**
     * The amount of base items there are in this unit. Ex. if the base unit is a [bottle],
     * then the BaseQuantity of [box] will be 24.
     * @var float
     */
    protected $BaseQuantity;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return ArticleUnit
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
     * @return ArticleUnit
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
     * @return ArticleUnit
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
     * @param  float[optional] $baseQuantity
     * @return ArticleUnit
     */
    public function setBaseQuantity($baseQuantity)
    {
        $this->BaseQuantity = $baseQuantity;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseQuantity()
    {
        return $this->BaseQuantity;
    }
}
