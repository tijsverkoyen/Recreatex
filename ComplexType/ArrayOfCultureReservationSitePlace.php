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

     * maxOccurs = unbounded     * @var array
     */
    protected $CultureReservationSitePlace = array();

    /**
     * @param  array                              $cultureReservationSitePlace
     * @return ArrayOfCultureReservationSitePlace
     */
    public function setCultureReservationSitePlace(array $cultureReservationSitePlace = array())
    {
        $this->CultureReservationSitePlace = $cultureReservationSitePlace;

        return $this;
    }

    /**
     * @return array
     */
    public function getCultureReservationSitePlace()
    {
        return $this->CultureReservationSitePlace;
    }
}
