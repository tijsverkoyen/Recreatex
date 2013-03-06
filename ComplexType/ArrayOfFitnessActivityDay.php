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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var FitnessActivityDay[] $FitnessActivityDay
     */
    protected $FitnessActivityDay = array();

    /**
     * @param  FitnessActivityDay[]      $fitnessActivityDay
     * @return ArrayOfFitnessActivityDay
     */
    public function setFitnessActivityDay(array $fitnessActivityDay = array())
    {
        $this->FitnessActivityDay = $fitnessActivityDay;

        return $this;
    }

    /**
     * @return FitnessActivityDay[]
     */
    public function getFitnessActivityDay()
    {
        return $this->FitnessActivityDay;
    }

}
