<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ChildCareCentreEntryIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ChildCareCentreEntryIncludes';

    /**
     * @var boolean
     */
    protected $PersonDetails;

    /**
     * @var boolean
     */
    protected $PersonContacts;

    /**
     * @var boolean
     */
    protected $PersonParentRelations;

    /**
     * @param  boolean[optional]            $personDetails
     * @return ChildCareCentreEntryIncludes
     */
    public function setPersonDetails($personDetails)
    {
        $this->PersonDetails = $personDetails;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPersonDetails()
    {
        return $this->PersonDetails;
    }

    /**
     * @param  boolean[optional]            $personContacts
     * @return ChildCareCentreEntryIncludes
     */
    public function setPersonContacts($personContacts)
    {
        $this->PersonContacts = $personContacts;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPersonContacts()
    {
        return $this->PersonContacts;
    }

    /**
     * @param  boolean[optional]            $personParentRelations
     * @return ChildCareCentreEntryIncludes
     */
    public function setPersonParentRelations($personParentRelations)
    {
        $this->PersonParentRelations = $personParentRelations;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPersonParentRelations()
    {
        return $this->PersonParentRelations;
    }
}
