<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfRentalReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfRentalReservation';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var RentalReservation[] $RentalReservation
     */
    protected $RentalReservation = array();

    /**
     * @param  RentalReservation[]      $rentalReservation
     * @return ArrayOfRentalReservation
     */
    public function setRentalReservation(array $rentalReservation = array())
    {
        $this->RentalReservation = $rentalReservation;

        return $this;
    }

    /**
     * @return RentalReservation[]
     */
    public function getRentalReservation()
    {
        return $this->RentalReservation;
    }

}
