<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfFitnessActivityDaySlot extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfFitnessActivityDaySlot';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var FitnessActivityDaySlot[] $FitnessActivityDaySlot
     */
    protected $FitnessActivityDaySlot = array();

    /**
     * @param  FitnessActivityDaySlot[]      $fitnessActivityDaySlot
     * @return ArrayOfFitnessActivityDaySlot
     */
    public function setFitnessActivityDaySlot(array $fitnessActivityDaySlot = array())
    {
        $this->FitnessActivityDaySlot = $fitnessActivityDaySlot;

        return $this;
    }

    /**
     * @return FitnessActivityDaySlot[]
     */
    public function getFitnessActivityDaySlot()
    {
        return $this->FitnessActivityDaySlot;
    }

}
