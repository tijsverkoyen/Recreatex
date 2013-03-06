<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfExpositionCategory extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfExpositionCategory';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $ExpositionCategory = array();

    /**
     * @param  array                     $expositionCategory
     * @return ArrayOfExpositionCategory
     */
    public function setExpositionCategory(array $expositionCategory = array())
    {
        $this->ExpositionCategory = $expositionCategory;

        return $this;
    }

    /**
     * @return array
     */
    public function getExpositionCategory()
    {
        return $this->ExpositionCategory;
    }
}
