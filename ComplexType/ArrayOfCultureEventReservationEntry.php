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
     * @var array
     */
    protected $CultureEventReservationEntry = array();

    /**
     * @param  array                               $cultureEventReservationEntry
     * @return ArrayOfCultureEventReservationEntry
     */
    public function setCultureEventReservationEntry(array $cultureEventReservationEntry = array())
    {
        $this->CultureEventReservationEntry = $cultureEventReservationEntry;

        return $this;
    }

    /**
     * @return array
     */
    public function getCultureEventReservationEntry()
    {
	    if(!is_array($this->CultureEventReservationEntry)) {
		    return array($this->CultureEventReservationEntry);
	    }
	    return $this->CultureEventReservationEntry;
    }
}
