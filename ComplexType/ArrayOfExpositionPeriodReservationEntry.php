<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfExpositionPeriodReservationEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfExpositionPeriodReservationEntry';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ExpositionPeriodReservationEntry[] $ExpositionPeriodReservationEntry
     */
    protected $ExpositionPeriodReservationEntry = array();


    /**
     * @param ExpositionPeriodReservationEntry[] $expositionPeriodReservationEntry
     * @return ArrayOfExpositionPeriodReservationEntry
     */
    public function setExpositionPeriodReservationEntry(array $expositionPeriodReservationEntry = array())
    {
        $this->ExpositionPeriodReservationEntry = $expositionPeriodReservationEntry;

        return $this;
    }

    /**
     * @return ExpositionPeriodReservationEntry[]
     */
    public function getExpositionPeriodReservationEntry()
    {
        return $this->ExpositionPeriodReservationEntry;
    }


}

