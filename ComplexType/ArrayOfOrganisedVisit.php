<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfOrganisedVisit extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfOrganisedVisit';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $OrganisedVisit = array();

    /**
     * @param  array                 $organisedVisit
     * @return ArrayOfOrganisedVisit
     */
    public function setOrganisedVisit(array $organisedVisit = array())
    {
        $this->OrganisedVisit = $organisedVisit;

        return $this;
    }

    /**
     * @return array
     */
    public function getOrganisedVisit()
    {
        return $this->OrganisedVisit;
    }
}
