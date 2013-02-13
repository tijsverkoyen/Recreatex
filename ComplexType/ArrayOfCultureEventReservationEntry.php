<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureEventReservationEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureEventReservationEntry';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CultureEventReservationEntry[] $CultureEventReservationEntry
     */
    protected $CultureEventReservationEntry = array();

    /**
     * @param  CultureEventReservationEntry[]      $cultureEventReservationEntry
     * @return ArrayOfCultureEventReservationEntry
     */
    public function setCultureEventReservationEntry(array $cultureEventReservationEntry = array())
    {
        $this->CultureEventReservationEntry = $cultureEventReservationEntry;

        return $this;
    }

    /**
     * @return CultureEventReservationEntry[]
     */
    public function getCultureEventReservationEntry()
    {
        return $this->CultureEventReservationEntry;
    }
}
