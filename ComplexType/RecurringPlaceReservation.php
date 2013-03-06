<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RecurringPlaceReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RecurringPlaceReservation';

    /**
     * @var RecurringPattern
     */
    protected $Pattern;

    /**
     * @var ArrayOfPlaceReservation
     */
    protected $PlaceReservations;

    /**
     * @var ArrayOfPeriod
     */
    protected $ValidPeriods;

    /**
     * @var ArrayOfInvalidPeriod
     */
    protected $InvalidPeriods;

    /**
     * @param  RecurringPattern[optional] $pattern
     * @return RecurringPlaceReservation
     */
    public function setPattern(RecurringPattern $pattern = null)
    {
        $this->Pattern = $pattern;

        return $this;
    }

    /**
     * @return RecurringPattern
     */
    public function getPattern()
    {
        return $this->Pattern;
    }

    /**
     * @param  ArrayOfPlaceReservation[optional] $placeReservations
     * @return RecurringPlaceReservation
     */
    public function setPlaceReservations(ArrayOfPlaceReservation $placeReservations = null)
    {
        $this->PlaceReservations = $placeReservations;

        return $this;
    }

    /**
     * @return ArrayOfPlaceReservation
     */
    public function getPlaceReservations()
    {
        return $this->PlaceReservations;
    }

    /**
     * @param  ArrayOfPeriod[optional]   $validPeriods
     * @return RecurringPlaceReservation
     */
    public function setValidPeriods(ArrayOfPeriod $validPeriods = null)
    {
        $this->ValidPeriods = $validPeriods;

        return $this;
    }

    /**
     * @return ArrayOfPeriod
     */
    public function getValidPeriods()
    {
        return $this->ValidPeriods;
    }

    /**
     * @param  ArrayOfInvalidPeriod[optional] $invalidPeriods
     * @return RecurringPlaceReservation
     */
    public function setInvalidPeriods(ArrayOfInvalidPeriod $invalidPeriods = null)
    {
        $this->InvalidPeriods = $invalidPeriods;

        return $this;
    }

    /**
     * @return ArrayOfInvalidPeriod
     */
    public function getInvalidPeriods()
    {
        return $this->InvalidPeriods;
    }
}
