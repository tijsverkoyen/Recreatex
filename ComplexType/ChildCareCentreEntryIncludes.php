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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PersonDetails
     */
    protected $PersonDetails;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PersonContacts
     */
    protected $PersonContacts;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PersonParentRelations
     */
    protected $PersonParentRelations;

    /**
     * @param  boolean|null                 $personDetails
     * @return ChildCareCentreEntryIncludes
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

    /**
     * @param  boolean|null                 $personContacts
     * @return ChildCareCentreEntryIncludes
     */
    public function setPersonContacts($personContacts)
    {
        $this->PersonContacts = $personContacts;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPersonContacts()
    {
        return $this->PersonContacts;
    }

    /**
     * @param  boolean|null                 $personParentRelations
     * @return ChildCareCentreEntryIncludes
     */
    public function setPersonParentRelations($personParentRelations)
    {
        $this->PersonParentRelations = $personParentRelations;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPersonParentRelations()
    {
        return $this->PersonParentRelations;
    }

}
