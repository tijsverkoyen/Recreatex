<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureWaitingListReservationIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureWaitingListReservationIncludes';

    /**
     * @var boolean
     */
    protected $PersonDetails;

    /**
     * @param  boolean[optional]                     $personDetails
     * @return CultureWaitingListReservationIncludes
     */
    public function setPersonDetails($personDetails)
    {
        $this->PersonDetails = $personDetails;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPersonDetails()
    {
        return $this->PersonDetails;
    }
}
