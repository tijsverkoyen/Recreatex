<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureEventOptionReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureEventOptionReservation';

    /**
     * @var array
     */
    protected $CultureEventOptionReservation = array();

    /**
     * @param  array                                $cultureEventOptionReservation
     * @return ArrayOfCultureEventOptionReservation
     */
    public function setCultureEventOptionReservation(array $cultureEventOptionReservation = array())
    {
        $this->CultureEventOptionReservation = $cultureEventOptionReservation;

        return $this;
    }

    /**
     * @return array
     */
    public function getCultureEventOptionReservation()
    {
	    if(!is_array($this->CultureEventOptionReservation)) {
		    return array($this->CultureEventOptionReservation);
	    }
	    return $this->CultureEventOptionReservation;
    }
}
