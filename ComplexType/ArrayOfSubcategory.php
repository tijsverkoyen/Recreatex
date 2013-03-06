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
     * @var array
     */
    protected $Subcategory = array();

    /**
     * @param  array              $subcategory
     * @return ArrayOfSubcategory
     */
    public function setSubcategory(array $subcategory = array())
    {
        $this->Subcategory = $subcategory;

        return $this;
    }

    /**
     * @return array
     */
    public function getSubcategory()
    {
	    if(!is_array($this->Subcategory)) {
		    return array($this->Subcategory);
	    }
	    return $this->Subcategory;
    }
}
