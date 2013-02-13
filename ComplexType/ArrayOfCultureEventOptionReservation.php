<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureEventOptionReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureEventOptionReservation';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CultureEventOptionReservation[] $CultureEventOptionReservation
     */
    protected $CultureEventOptionReservation = array();


    /**
     * @param CultureEventOptionReservation[] $cultureEventOptionReservation
     * @return ArrayOfCultureEventOptionReservation
     */
    public function setCultureEventOptionReservation(array $cultureEventOptionReservation = array())
    {
        $this->CultureEventOptionReservation = $cultureEventOptionReservation;

        return $this;
    }

    /**
     * @return CultureEventOptionReservation[]
     */
    public function getCultureEventOptionReservation()
    {
        return $this->CultureEventOptionReservation;
    }


}

