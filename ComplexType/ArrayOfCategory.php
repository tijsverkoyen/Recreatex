<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCategory extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCategory';

    /**
     * @var array
     */
    protected $Category = array();

    /**
     * @param  array      $category
     * @return ArrayOfCategory
     */
    public function setCategory(array $category = array())
    {
        $this->Category = $category;

        return $this;
    }

    /**
     * @return array
     */
    public function getCategory()
    {
        return $this->Category;
    }
}
