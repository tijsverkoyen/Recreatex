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
     * @var string
     */
    protected $Description;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $CategoryId;

    /**
     * @var ExpositionCategory
     */
    protected $Category;

    /**
     * @param  string[optional]      $description
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
     * @param  string[optional]      $name
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
     * @param  SimpleType\Guid[optional] $id
     * @return ExpositionSubcategory
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
     * @param  SimpleType\Guid[optional] $categoryId
     * @return ExpositionSubcategory
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
     * @param  ExpositionCategory[optional] $category
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
