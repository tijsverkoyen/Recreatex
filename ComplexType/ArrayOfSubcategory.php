<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfSubcategory extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfSubcategory';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Subcategory[] $Subcategory
     */
    protected $Subcategory = array();

    /**
     * @param  Subcategory[]      $subcategory
     * @return ArrayOfSubcategory
     */
    public function setSubcategory(array $subcategory = array())
    {
        $this->Subcategory = $subcategory;

        return $this;
    }

    /**
     * @return Subcategory[]
     */
    public function getSubcategory()
    {
        return $this->Subcategory;
    }
}
