<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfInvalidPeriod extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfInvalidPeriod';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $InvalidPeriod = array();

    /**
     * @param  array                $invalidPeriod
     * @return ArrayOfInvalidPeriod
     */
    public function setInvalidPeriod(array $invalidPeriod = array())
    {
        $this->InvalidPeriod = $invalidPeriod;

        return $this;
    }

    /**
     * @return array
     */
    public function getInvalidPeriod()
    {
        return $this->InvalidPeriod;
    }
}
