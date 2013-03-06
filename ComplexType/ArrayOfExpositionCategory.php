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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ExpositionCategory[] $ExpositionCategory
     */
    protected $ExpositionCategory = array();

    /**
     * @param  ExpositionCategory[]      $expositionCategory
     * @return ArrayOfExpositionCategory
     */
    public function setExpositionCategory(array $expositionCategory = array())
    {
        $this->ExpositionCategory = $expositionCategory;

        return $this;
    }

    /**
     * @return ExpositionCategory[]
     */
    public function getExpositionCategory()
    {
        return $this->ExpositionCategory;
    }

}
