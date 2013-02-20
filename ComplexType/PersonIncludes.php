<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonIncludes';

    /**
     * @var boolean
     */
    protected $Categories;

    /**
     * @var boolean
     */
    protected $PriceGroups;

    /**
     * @param  boolean[optional] $categories
     * @return PersonIncludes
     */
    public function setCategories($categories)
    {
        $this->Categories = $categories;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getCategories()
    {
        return $this->Categories;
    }

    /**
     * @param  boolean[optional] $priceGroups
     * @return PersonIncludes
     */
    public function setPriceGroups($priceGroups)
    {
        $this->PriceGroups = $priceGroups;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPriceGroups()
    {
        return $this->PriceGroups;
    }
}
