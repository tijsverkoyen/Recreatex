<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExpositionCategory extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpositionCategory';

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
     * @var ArrayOfExpositionSubcategory
     */
    protected $Subcategories;

    /**
     * @param  string[optional]   $description
     * @return ExpositionCategory
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
     * @param  string[optional]   $name
     * @return ExpositionCategory
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
     * @param  SimpleType\Guid[optional] $id
     * @return ExpositionCategory
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
     * @param  ArrayOfExpositionSubcategory[optional] $subcategories
     * @return ExpositionCategory
     */
    public function setSubcategories(ArrayOfExpositionSubcategory $subcategories = null)
    {
        $this->Subcategories = $subcategories;

        return $this;
    }

    /**
     * @return ArrayOfExpositionSubcategory
     */
    public function getSubcategories()
    {
        return $this->Subcategories;
    }
}
