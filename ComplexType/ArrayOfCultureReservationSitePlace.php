<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureReservationSitePlace extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureReservationSitePlace';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CultureReservationSitePlace[] $CultureReservationSitePlace
     */
    protected $CultureReservationSitePlace = array();

    /**
     * @param  CultureReservationSitePlace[]      $cultureReservationSitePlace
     * @return ArrayOfCultureReservationSitePlace
     */
    public function setCultureReservationSitePlace(array $cultureReservationSitePlace = array())
    {
        $this->CultureReservationSitePlace = $cultureReservationSitePlace;

        return $this;
    }

    /**
     * @return CultureReservationSitePlace[]
     */
    public function getCultureReservationSitePlace()
    {
        return $this->CultureReservationSitePlace;
    }

}
