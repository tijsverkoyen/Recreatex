<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfExpositionSubcategory extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfExpositionSubcategory';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $ExpositionSubcategory = array();

    /**
     * @param  array                        $expositionSubcategory
     * @return ArrayOfExpositionSubcategory
     */
    public function setExpositionSubcategory(array $expositionSubcategory = array())
    {
        $this->ExpositionSubcategory = $expositionSubcategory;

        return $this;
    }

    /**
     * @return array
     */
    public function getExpositionSubcategory()
    {
        return $this->ExpositionSubcategory;
    }
}
