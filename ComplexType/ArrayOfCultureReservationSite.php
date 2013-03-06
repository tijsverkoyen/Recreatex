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

     * maxOccurs = unbounded     * @var array
     */
    protected $CultureReservationSite = array();

    /**
     * @param  array                         $cultureReservationSite
     * @return ArrayOfCultureReservationSite
     */
    public function setCultureReservationSite(array $cultureReservationSite = array())
    {
        $this->CultureReservationSite = $cultureReservationSite;

        return $this;
    }

    /**
     * @return array
     */
    public function getCultureReservationSite()
    {
        return $this->CultureReservationSite;
    }
}
