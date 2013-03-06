<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonCard extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonCard';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var Card
     */
    protected $Card;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var Person
     */
    protected $Person;

    /**
     * @param  SimpleType\guid[optional] $id
     * @return PersonCard
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string[optional] $description
     * @return PersonCard
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  Card[optional] $card
     * @return PersonCard
     */
    public function setCard(Card $card = null)
    {
        $this->Card = $card;

        return $this;
    }

    /**
     * @return Card
     */
    public function getCard()
    {
        return $this->Card;
    }

    /**
     * @param  SimpleType\guid[optional] $personId
     * @return PersonCard
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  Person[optional] $person
     * @return PersonCard
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
}
