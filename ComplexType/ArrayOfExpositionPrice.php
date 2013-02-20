<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfExpositionPrice extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfExpositionPrice';

    /**
     * @var array
     */
    protected $ExpositionPrice = array();

    /**
     * @param  array      $expositionPrice
     * @return ArrayOfExpositionPrice
     */
    public function setExpositionPrice(array $expositionPrice = array())
    {
        $this->ExpositionPrice = $expositionPrice;

        return $this;
    }

    /**
     * @return array
     */
    public function getExpositionPrice()
    {
        return $this->ExpositionPrice;
    }
}
