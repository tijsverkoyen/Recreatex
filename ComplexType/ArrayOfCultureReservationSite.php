<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureReservationSite extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureReservationSite';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CultureReservationSite[] $CultureReservationSite
     */
    protected $CultureReservationSite = array();

    /**
     * @param  CultureReservationSite[]      $cultureReservationSite
     * @return ArrayOfCultureReservationSite
     */
    public function setCultureReservationSite(array $cultureReservationSite = array())
    {
        $this->CultureReservationSite = $cultureReservationSite;

        return $this;
    }

    /**
     * @return CultureReservationSite[]
     */
    public function getCultureReservationSite()
    {
        return $this->CultureReservationSite;
    }

}
