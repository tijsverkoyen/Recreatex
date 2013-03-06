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
     * @var string|null $Name
     */
    protected $Name;

    /**
     * The amount of base items there are in this unit. Ex. if the base unit is a [bottle],
     * then the BaseQuantity of [box] will be 24.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $BaseQuantity
     */
    protected $BaseQuantity;

    /**
     * @param  SimpleType\guid|null $id
     * @return ArticleUnit
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
     * @return ArticleUnit
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
     * @param  string|null $name
     * @return ArticleUnit
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
     * @param  float|null  $baseQuantity
     * @return ArticleUnit
     */
    public function setBaseQuantity($baseQuantity)
    {
        $this->BaseQuantity = $baseQuantity;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getBaseQuantity()
    {
        return $this->BaseQuantity;
    }

}
