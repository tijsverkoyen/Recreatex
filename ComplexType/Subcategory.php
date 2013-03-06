<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Subcategory extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Subcategory';

    /**
     * @var Category
     */
    protected $Category;

    /**
     * @var SimpleType\Guid
     */
    protected $CategoryId;

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @param  Category[optional] $category
     * @return Subcategory
     */
    public function setCategory(Category $category = null)
    {
        $this->Category = $category;

        return $this;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param  SimpleType\Guid[optional] $categoryId
     * @return Subcategory
     */
    public function setCategoryId(SimpleType\Guid $categoryId = null)
    {
        $this->CategoryId = $categoryId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCategoryId()
    {
        return $this->CategoryId;
    }

    /**
     * @param  string[optional] $code
     * @return Subcategory
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
     * @param  SimpleType\Guid[optional] $id
     * @return Subcategory
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
     * @param  string[optional] $name
     * @return Subcategory
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
}
