<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExpositionSubCategoryIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpositionSubCategoryIncludes';

    /**
     * @var boolean
     */
    protected $ExpositionCategory;

    /**
     * @param  boolean[optional]             $expositionCategory
     * @return ExpositionSubCategoryIncludes
     */
    public function setExpositionCategory($expositionCategory)
    {
        $this->ExpositionCategory = $expositionCategory;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getExpositionCategory()
    {
        return $this->ExpositionCategory;
    }
}
