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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ExpositionSubcategory[] $ExpositionSubcategory
     */
    protected $ExpositionSubcategory = array();

    /**
     * @param  ExpositionSubcategory[]      $expositionSubcategory
     * @return ArrayOfExpositionSubcategory
     */
    public function setExpositionSubcategory(array $expositionSubcategory = array())
    {
        $this->ExpositionSubcategory = $expositionSubcategory;

        return $this;
    }

    /**
     * @return ExpositionSubcategory[]
     */
    public function getExpositionSubcategory()
    {
        return $this->ExpositionSubcategory;
    }

}
