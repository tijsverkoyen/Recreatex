<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureReservation';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CultureReservation[] $CultureReservation
     */
    protected $CultureReservation = array();

    /**
     * @param  CultureReservation[]      $cultureReservation
     * @return ArrayOfCultureReservation
     */
    public function setCultureReservation(array $cultureReservation = array())
    {
        $this->CultureReservation = $cultureReservation;

        return $this;
    }

    /**
     * @return CultureReservation[]
     */
    public function getCultureReservation()
    {
        return $this->CultureReservation;
    }

}
