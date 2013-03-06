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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PersonId
     */
    protected $PersonId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Person|null $Person
     */
    protected $Person;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ChildCareCentreId
     */
    protected $ChildCareCentreId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EntryDate
     */
    protected $EntryDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ChildCareEntryPeriod|null $ChildCareEntryPeriod
     */
    protected $ChildCareEntryPeriod;

    /**
     * @param  SimpleType\guid|null $id
     * @return ChildCareCentreEntry
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\guid|null $personId
     * @return ChildCareCentreEntry
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  Person|null          $person
     * @return ChildCareCentreEntry
     */
    public function setPerson(Person $person = null)
    {
        $this->Person = $person;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getPerson()
    {
        return $this->Person;
    }

    /**
     * @param  SimpleType\guid|null $childCareCentreId
     * @return ChildCareCentreEntry
     */
    public function setChildCareCentreId(SimpleType\guid $childCareCentreId = null)
    {
        $this->ChildCareCentreId = $childCareCentreId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getChildCareCentreId()
    {
        return $this->ChildCareCentreId;
    }

    /**
     * @param  string|null          $entryDate
     * @return ChildCareCentreEntry
     */
    public function setEntryDate($entryDate)
    {
        $this->EntryDate = $entryDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntryDate()
    {
        return $this->EntryDate;
    }

    /**
     * @param  ChildCareEntryPeriod|null $childCareEntryPeriod
     * @return ChildCareCentreEntry
     */
    public function setChildCareEntryPeriod(ChildCareEntryPeriod $childCareEntryPeriod = null)
    {
        $this->ChildCareEntryPeriod = $childCareEntryPeriod;

        return $this;
    }

    /**
     * @return ChildCareEntryPeriod|null
     */
    public function getChildCareEntryPeriod()
    {
        return $this->ChildCareEntryPeriod;
    }

}
