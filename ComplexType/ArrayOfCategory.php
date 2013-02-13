<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCategory extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCategory';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Category[] $Category
     */
    protected $Category = array();


    /**
     * @param Category[] $category
     * @return ArrayOfCategory
     */
    public function setCategory(array $category = array())
    {
        $this->Category = $category;

        return $this;
    }

    /**
     * @return Category[]
     */
    public function getCategory()
    {
        return $this->Category;
    }


}

