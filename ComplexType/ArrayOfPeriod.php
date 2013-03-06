<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPeriod extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPeriod';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Period[] $Period
     */
    protected $Period = array();

    /**
     * @param  Period[]      $period
     * @return ArrayOfPeriod
     */
    public function setPeriod(array $period = array())
    {
        $this->Period = $period;

        return $this;
    }

    /**
     * @return Period[]
     */
    public function getPeriod()
    {
        return $this->Period;
    }

}
