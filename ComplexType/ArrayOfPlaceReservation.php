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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var PlaceReservation[] $PlaceReservation
     */
    protected $PlaceReservation = array();

    /**
     * @param  PlaceReservation[]      $placeReservation
     * @return ArrayOfPlaceReservation
     */
    public function setPlaceReservation(array $placeReservation = array())
    {
        $this->PlaceReservation = $placeReservation;

        return $this;
    }

    /**
     * @return PlaceReservation[]
     */
    public function getPlaceReservation()
    {
        return $this->PlaceReservation;
    }

}
