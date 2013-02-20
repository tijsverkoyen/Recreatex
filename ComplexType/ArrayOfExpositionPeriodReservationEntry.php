<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfExpositionPeriodReservationEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfExpositionPeriodReservationEntry';

    /**
     * @var array
     */
    protected $ExpositionPeriodReservationEntry = array();

    /**
     * @param  array      $expositionPeriodReservationEntry
     * @return ArrayOfExpositionPeriodReservationEntry
     */
    public function setExpositionPeriodReservationEntry(array $expositionPeriodReservationEntry = array())
    {
        $this->ExpositionPeriodReservationEntry = $expositionPeriodReservationEntry;

        return $this;
    }

    /**
     * @return array
     */
    public function getExpositionPeriodReservationEntry()
    {
        return $this->ExpositionPeriodReservationEntry;
    }
}
