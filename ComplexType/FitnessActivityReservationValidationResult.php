<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FitnessActivityReservationValidationResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FitnessActivityReservationValidationResult';

    /**
     * @var FitnessActivityReservation
     */
    protected $ValidatedFitnessActivityReservation;

    /**
     * @param  FitnessActivityReservation[optional]       $validatedFitnessActivityReservation
     * @return FitnessActivityReservationValidationResult
     */
    public function setValidatedFitnessActivityReservation(
        FitnessActivityReservation $validatedFitnessActivityReservation = null
    ) {
        $this->ValidatedFitnessActivityReservation = $validatedFitnessActivityReservation;

        return $this;
    }

    /**
     * @return FitnessActivityReservation
     */
    public function getValidatedFitnessActivityReservation()
    {
        return $this->ValidatedFitnessActivityReservation;
    }
}