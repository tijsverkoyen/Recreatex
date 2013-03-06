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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var RecurringPattern|null $Pattern
     */
    protected $Pattern;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfPlaceReservation|null $PlaceReservations
     */
    protected $PlaceReservations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfPeriod|null $ValidPeriods
     */
    protected $ValidPeriods;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfInvalidPeriod|null $InvalidPeriods
     */
    protected $InvalidPeriods;

    /**
     * @param  RecurringPattern|null     $pattern
     * @return RecurringPlaceReservation
     */
    public function setPattern(RecurringPattern $pattern = null)
    {
        $this->Pattern = $pattern;

        return $this;
    }

    /**
     * @return RecurringPattern|null
     */
    public function getPattern()
    {
        return $this->Pattern;
    }

    /**
     * @param  ArrayOfPlaceReservation|null $placeReservations
     * @return RecurringPlaceReservation
     */
    public function setPlaceReservations(ArrayOfPlaceReservation $placeReservations = null)
    {
        $this->PlaceReservations = $placeReservations;

        return $this;
    }

    /**
     * @return ArrayOfPlaceReservation|null
     */
    public function getPlaceReservations()
    {
        return $this->PlaceReservations;
    }

    /**
     * @param  ArrayOfPeriod|null        $validPeriods
     * @return RecurringPlaceReservation
     */
    public function setValidPeriods(ArrayOfPeriod $validPeriods = null)
    {
        $this->ValidPeriods = $validPeriods;

        return $this;
    }

    /**
     * @return ArrayOfPeriod|null
     */
    public function getValidPeriods()
    {
        return $this->ValidPeriods;
    }

    /**
     * @param  ArrayOfInvalidPeriod|null $invalidPeriods
     * @return RecurringPlaceReservation
     */
    public function setInvalidPeriods(ArrayOfInvalidPeriod $invalidPeriods = null)
    {
        $this->InvalidPeriods = $invalidPeriods;

        return $this;
    }

    /**
     * @return ArrayOfInvalidPeriod|null
     */
    public function getInvalidPeriods()
    {
        return $this->InvalidPeriods;
    }

}
