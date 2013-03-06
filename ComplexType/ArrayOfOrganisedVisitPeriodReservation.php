<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfOrganisedVisitPeriodReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfOrganisedVisitPeriodReservation';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $OrganisedVisitPeriodReservation = array();

    /**
     * @param  array                                  $organisedVisitPeriodReservation
     * @return ArrayOfOrganisedVisitPeriodReservation
     */
    public function setOrganisedVisitPeriodReservation(array $organisedVisitPeriodReservation = array())
    {
        $this->OrganisedVisitPeriodReservation = $organisedVisitPeriodReservation;

        return $this;
    }

    /**
     * @return array
     */
    public function getOrganisedVisitPeriodReservation()
    {
        return $this->OrganisedVisitPeriodReservation;
    }
}
