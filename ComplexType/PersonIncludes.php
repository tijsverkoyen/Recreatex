<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonIncludes';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Categories
     */
    protected $Categories;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PriceGroups
     */
    protected $PriceGroups;


    /**
     * @param boolean|null $categories
     * @return PersonIncludes
     */
    public function setCategories($categories)
    {
        $this->Categories = $categories;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getCategories()
    {
        return $this->Categories;
    }

    /**
     * @param boolean|null $priceGroups
     * @return PersonIncludes
     */
    public function setPriceGroups($priceGroups)
    {
        $this->PriceGroups = $priceGroups;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPriceGroups()
    {
        return $this->PriceGroups;
    }


}

