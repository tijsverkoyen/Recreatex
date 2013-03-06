<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureWaitingListReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureWaitingListReservation';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CultureWaitingListReservation[] $CultureWaitingListReservation
     */
    protected $CultureWaitingListReservation = array();

    /**
     * @param  CultureWaitingListReservation[]      $cultureWaitingListReservation
     * @return ArrayOfCultureWaitingListReservation
     */
    public function setCultureWaitingListReservation(array $cultureWaitingListReservation = array())
    {
        $this->CultureWaitingListReservation = $cultureWaitingListReservation;

        return $this;
    }

    /**
     * @return CultureWaitingListReservation[]
     */
    public function getCultureWaitingListReservation()
    {
        return $this->CultureWaitingListReservation;
    }

}
