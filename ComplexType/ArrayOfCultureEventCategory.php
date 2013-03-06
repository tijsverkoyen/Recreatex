<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureEventCategory extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureEventCategory';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CultureEventCategory[] $CultureEventCategory
     */
    protected $CultureEventCategory = array();

    /**
     * @param  CultureEventCategory[]      $cultureEventCategory
     * @return ArrayOfCultureEventCategory
     */
    public function setCultureEventCategory(array $cultureEventCategory = array())
    {
        $this->CultureEventCategory = $cultureEventCategory;

        return $this;
    }

    /**
     * @return CultureEventCategory[]
     */
    public function getCultureEventCategory()
    {
        return $this->CultureEventCategory;
    }

}
