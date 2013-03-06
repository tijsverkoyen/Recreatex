<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPlaceReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPlaceReservation';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $PlaceReservation = array();

    /**
     * @param  array                   $placeReservation
     * @return ArrayOfPlaceReservation
     */
    public function setPlaceReservation(array $placeReservation = array())
    {
        $this->PlaceReservation = $placeReservation;

        return $this;
    }

    /**
     * @return array
     */
    public function getPlaceReservation()
    {
        return $this->PlaceReservation;
    }
}
