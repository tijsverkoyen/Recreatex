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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var OrganisedVisit[] $OrganisedVisit
     */
    protected $OrganisedVisit = array();

    /**
     * @param  OrganisedVisit[]      $organisedVisit
     * @return ArrayOfOrganisedVisit
     */
    public function setOrganisedVisit(array $organisedVisit = array())
    {
        $this->OrganisedVisit = $organisedVisit;

        return $this;
    }

    /**
     * @return OrganisedVisit[]
     */
    public function getOrganisedVisit()
    {
        return $this->OrganisedVisit;
    }

}
