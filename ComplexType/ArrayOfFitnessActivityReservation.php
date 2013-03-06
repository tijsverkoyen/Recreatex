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

     * maxOccurs = unbounded     * @var array
     */
    protected $FitnessActivityReservation = array();

    /**
     * @param  array                             $fitnessActivityReservation
     * @return ArrayOfFitnessActivityReservation
     */
    public function setFitnessActivityReservation(array $fitnessActivityReservation = array())
    {
        $this->FitnessActivityReservation = $fitnessActivityReservation;

        return $this;
    }

    /**
     * @return array
     */
    public function getFitnessActivityReservation()
    {
        return $this->FitnessActivityReservation;
    }
}
