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
     * @var array
     */
    protected $CultureReservation = array();

    /**
     * @param  array                     $cultureReservation
     * @return ArrayOfCultureReservation
     */
    public function setCultureReservation(array $cultureReservation = array())
    {
        $this->CultureReservation = $cultureReservation;

        return $this;
    }

    /**
     * @return array
     */
    public function getCultureReservation()
    {
        if (!is_array($this->CultureReservation)) {
            return array($this->CultureReservation);
        }

        return $this->CultureReservation;
    }
}
