<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureEventOption extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureEventOption';

    /**
     * @var SimpleType\Guid
     */
    protected $ArticleId;

    /**
     * @var integer
     */
    protected $Available;

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var integer
     */
    protected $MaxQuantity;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @param  SimpleType\Guid[optional] $articleId
     * @return CultureEventOption
     */
    public function setArticleId(SimpleType\Guid $articleId = null)
    {
        $this->ArticleId = $articleId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getArticleId()
    {
        return $this->ArticleId;
    }

    /**
     * @param  integer[optional]  $available
     * @return CultureEventOption
     */
    public function setAvailable($available)
    {
        $this->Available = $available;

        return $this;
    }

    /**
     * @return integer
     */
    public function getAvailable()
    {
        return $this->Available;
    }

    /**
     * @param  string[optional]   $code
     * @return CultureEventOption
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
     * @param  string[optional]   $description
     * @return CultureEventOption
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return CultureEventOption
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
     * @param  integer[optional]  $maxQuantity
     * @return CultureEventOption
     */
    public function setMaxQuantity($maxQuantity)
    {
        $this->MaxQuantity = $maxQuantity;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaxQuantity()
    {
        return $this->MaxQuantity;
    }

    /**
     * @param  string[optional]   $name
     * @return CultureEventOption
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
     * @param  float[optional]    $price
     * @return CultureEventOption
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }
}
