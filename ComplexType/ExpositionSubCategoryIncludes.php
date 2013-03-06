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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ExpositionCategory
     */
    protected $ExpositionCategory;

    /**
     * @param  boolean|null                  $expositionCategory
     * @return ExpositionSubCategoryIncludes
     */
    public function setExpositionCategory($expositionCategory)
    {
        $this->ExpositionCategory = $expositionCategory;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getExpositionCategory()
    {
        return $this->ExpositionCategory;
    }

}
