<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfFitnessActivityDay extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfFitnessActivityDay';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $FitnessActivityDay = array();

    /**
     * @param  array                     $fitnessActivityDay
     * @return ArrayOfFitnessActivityDay
     */
    public function setFitnessActivityDay(array $fitnessActivityDay = array())
    {
        $this->FitnessActivityDay = $fitnessActivityDay;

        return $this;
    }

    /**
     * @return array
     */
    public function getFitnessActivityDay()
    {
        return $this->FitnessActivityDay;
    }
}
