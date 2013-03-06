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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var InvalidPeriod[] $InvalidPeriod
     */
    protected $InvalidPeriod = array();

    /**
     * @param  InvalidPeriod[]      $invalidPeriod
     * @return ArrayOfInvalidPeriod
     */
    public function setInvalidPeriod(array $invalidPeriod = array())
    {
        $this->InvalidPeriod = $invalidPeriod;

        return $this;
    }

    /**
     * @return InvalidPeriod[]
     */
    public function getInvalidPeriod()
    {
        return $this->InvalidPeriod;
    }

}
