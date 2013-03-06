<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfFitnessActivityReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfFitnessActivityReservation';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var FitnessActivityReservation[] $FitnessActivityReservation
     */
    protected $FitnessActivityReservation = array();

    /**
     * @param  FitnessActivityReservation[]      $fitnessActivityReservation
     * @return ArrayOfFitnessActivityReservation
     */
    public function setFitnessActivityReservation(array $fitnessActivityReservation = array())
    {
        $this->FitnessActivityReservation = $fitnessActivityReservation;

        return $this;
    }

    /**
     * @return FitnessActivityReservation[]
     */
    public function getFitnessActivityReservation()
    {
        return $this->FitnessActivityReservation;
    }

}
