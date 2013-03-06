<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonCardIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonCardIncludes';

    /**
     * @var boolean
     */
    protected $PersonDetails;

    /**
     * @param  boolean[optional]  $personDetails
     * @return PersonCardIncludes
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
