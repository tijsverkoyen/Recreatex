<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class EmployeeIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'EmployeeIncludes';

    /**

     * @var boolean
     */
    protected $IncludeImage;

    /**
     * @param  boolean[optional] $includeImage
     * @return EmployeeIncludes
     */
    public function setIncludeImage($includeImage)
    {
        $this->IncludeImage = $includeImage;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIncludeImage()
    {
        return $this->IncludeImage;
    }
}
