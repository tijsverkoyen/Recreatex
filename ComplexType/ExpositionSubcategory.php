<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExpositionSubcategory extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpositionSubcategory';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

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
     * @var SimpleType\guid|null $CategoryId
     */
    protected $CategoryId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ExpositionCategory|null $Category
     */
    protected $Category;

    /**
     * @param  string|null           $description
     * @return ExpositionSubcategory
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
     * @param  string|null           $name
     * @return ExpositionSubcategory
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
     * @param  SimpleType\guid|null  $id
     * @return ExpositionSubcategory
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
     * @param  SimpleType\guid|null  $categoryId
     * @return ExpositionSubcategory
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
     * @param  ExpositionCategory|null $category
     * @return ExpositionSubcategory
     */
    public function setCategory(ExpositionCategory $category = null)
    {
        $this->Category = $category;

        return $this;
    }

    /**
     * @return ExpositionCategory|null
     */
    public function getCategory()
    {
        return $this->Category;
    }

}
