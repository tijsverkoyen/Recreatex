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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ExpositionPrice[] $ExpositionPrice
     */
    protected $ExpositionPrice = array();

    /**
     * @param  ExpositionPrice[]      $expositionPrice
     * @return ArrayOfExpositionPrice
     */
    public function setExpositionPrice(array $expositionPrice = array())
    {
        $this->ExpositionPrice = $expositionPrice;

        return $this;
    }

    /**
     * @return ExpositionPrice[]
     */
    public function getExpositionPrice()
    {
        return $this->ExpositionPrice;
    }
}
