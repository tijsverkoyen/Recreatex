<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfExpositionPeriod extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfExpositionPeriod';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ExpositionPeriod[] $ExpositionPeriod
     */
    protected $ExpositionPeriod = array();

    /**
     * @param  ExpositionPeriod[]      $expositionPeriod
     * @return ArrayOfExpositionPeriod
     */
    public function setExpositionPeriod(array $expositionPeriod = array())
    {
        $this->ExpositionPeriod = $expositionPeriod;

        return $this;
    }

    /**
     * @return ExpositionPeriod[]
     */
    public function getExpositionPeriod()
    {
        return $this->ExpositionPeriod;
    }

}
