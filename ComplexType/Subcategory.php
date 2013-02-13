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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Category|null $Category
     */
    protected $Category;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $CategoryId
     */
    protected $CategoryId;

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
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;


    /**
     * @param Category|null $category
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
     * @param SimpleType\guid|null $categoryId
     * @return Subcategory
     */
    public function setCategoryId(SimpleType\guid $categoryId = null)
    {
        $this->CategoryId = $categoryId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCategoryId()
    {
        return $this->CategoryId;
    }

    /**
     * @param string|null $code
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
     * @param SimpleType\guid|null $id
     * @return Subcategory
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
     * @param string|null $name
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

