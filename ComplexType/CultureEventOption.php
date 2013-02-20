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
     * @param  SimpleType\Guid|null $articleId
     * @return CultureEventOption
     */
    public function setArticleId(SimpleType\Guid $articleId = null)
    {
        $this->ArticleId = $articleId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getArticleId()
    {
        return $this->ArticleId;
    }

    /**
     * @param  integer|null       $available
     * @return CultureEventOption
     */
    public function setAvailable($available)
    {
        $this->Available = $available;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getAvailable()
    {
        return $this->Available;
    }

    /**
     * @param  string|null        $code
     * @return CultureEventOption
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
     * @param  string|null        $description
     * @return CultureEventOption
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  SimpleType\Guid|null $id
     * @return CultureEventOption
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
     * @param  integer|null       $maxQuantity
     * @return CultureEventOption
     */
    public function setMaxQuantity($maxQuantity)
    {
        $this->MaxQuantity = $maxQuantity;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaxQuantity()
    {
        return $this->MaxQuantity;
    }

    /**
     * @param  string|null        $name
     * @return CultureEventOption
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
     * @param  float|null         $price
     * @return CultureEventOption
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
}
