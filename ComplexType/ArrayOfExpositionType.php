<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfExpositionType extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfExpositionType';

    /**
     * @var array
     */
    protected $ExpositionType = array();

    /**
     * @param  array                 $expositionType
     * @return ArrayOfExpositionType
     */
    public function setExpositionType(array $expositionType = array())
    {
        $this->ExpositionType = $expositionType;

        return $this;
    }

    /**
     * @return array
     */
    public function getExpositionType()
    {
        return $this->ExpositionType;
    }
}
