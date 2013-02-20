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
     * @param  Category|null $category
     * @return Subcategory
     */
    public function setCategory(Category $category = null)
    {
        $this->Category = $category;

        return $this;
    }

    /**
     * @return Category|null
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param  SimpleType\Guid|null $categoryId
     * @return Subcategory
     */
    public function setCategoryId(SimpleType\Guid $categoryId = null)
    {
        $this->CategoryId = $categoryId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCategoryId()
    {
        return $this->CategoryId;
    }

    /**
     * @param  string|null $code
     * @return Subcategory
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
     * @param  SimpleType\Guid|null $id
     * @return Subcategory
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
     * @return Subcategory
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
