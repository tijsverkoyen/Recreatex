<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ChildCareCentreEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ChildCareCentreEntry';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var Person
     */
    protected $Person;

    /**
     * @var SimpleTypeGuid
     */
    protected $ChildCareCentreId;

    /**
     * @var string
     */
    protected $EntryDate;

    /**
     * @var ChildCareEntryPeriod
     */
    protected $ChildCareEntryPeriod;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return ChildCareCentreEntry
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\Guid[optional] $personId
     * @return ChildCareCentreEntry
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  Person[optional]     $person
     * @return ChildCareCentreEntry
     */
    public function setPerson(Person $person = null)
    {
        $this->Person = $person;

        return $this;
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->Person;
    }

    /**
     * @param  SimpleType\Guid[optional] $childCareCentreId
     * @return ChildCareCentreEntry
     */
    public function setChildCareCentreId(SimpleType\Guid $childCareCentreId = null)
    {
        $this->ChildCareCentreId = $childCareCentreId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getChildCareCentreId()
    {
        return $this->ChildCareCentreId;
    }

    /**
     * @param  string[optional]     $entryDate
     * @return ChildCareCentreEntry
     */
    public function setEntryDate($entryDate)
    {
        $this->EntryDate = $entryDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntryDate()
    {
        return $this->EntryDate;
    }

    /**
     * @param  ChildCareEntryPeriod[optional] $childCareEntryPeriod
     * @return ChildCareCentreEntry
     */
    public function setChildCareEntryPeriod(ChildCareEntryPeriod $childCareEntryPeriod = null)
    {
        $this->ChildCareEntryPeriod = $childCareEntryPeriod;

        return $this;
    }

    /**
     * @return ChildCareEntryPeriod
     */
    public function getChildCareEntryPeriod()
    {
        return $this->ChildCareEntryPeriod;
    }
}
