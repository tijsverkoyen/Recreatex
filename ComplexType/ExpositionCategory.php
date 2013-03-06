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
     * @var ArrayOfExpositionSubcategory|null $Subcategories
     */
    protected $Subcategories;

    /**
     * @param  string|null        $description
     * @return ExpositionCategory
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
     * @param  string|null        $name
     * @return ExpositionCategory
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
     * @param  SimpleType\guid|null $id
     * @return ExpositionCategory
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
     * @param  ArrayOfExpositionSubcategory|null $subcategories
     * @return ExpositionCategory
     */
    public function setSubcategories(ArrayOfExpositionSubcategory $subcategories = null)
    {
        $this->Subcategories = $subcategories;

        return $this;
    }

    /**
     * @return ArrayOfExpositionSubcategory|null
     */
    public function getSubcategories()
    {
        return $this->Subcategories;
    }

}
