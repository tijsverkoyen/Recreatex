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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PersonDetails
     */
    protected $PersonDetails;

    /**
     * @param  boolean|null                          $personDetails
     * @return CultureWaitingListReservationIncludes
     */
    public function setPersonDetails($personDetails)
    {
        $this->PersonDetails = $personDetails;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPersonDetails()
    {
        return $this->PersonDetails;
    }

}
