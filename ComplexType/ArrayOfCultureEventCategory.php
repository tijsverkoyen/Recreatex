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
     * @var array
     */
    protected $CultureEventCategory = array();

    /**
     * @param  array                       $cultureEventCategory
     * @return ArrayOfCultureEventCategory
     */
    public function setCultureEventCategory(array $cultureEventCategory = array())
    {
        $this->CultureEventCategory = $cultureEventCategory;

        return $this;
    }

    /**
     * @return array
     */
    public function getCultureEventCategory()
    {
        if (!is_array($this->CultureEventCategory)) {
            return array($this->CultureEventCategory);
        }

        return $this->CultureEventCategory;
    }
}
