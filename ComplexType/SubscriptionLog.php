<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SubscriptionLog extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SubscriptionLog';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $SubscriptionId;

    /**
     * @var string
     */
    protected $CreationDate;

    /**
     * @var SimpleType\SubscriptionLogType
     */
    protected $LogType;

    /**
     * @var SimpleType\SubscriptionLogSubType
     */
    protected $SubType;

    /**
     * @var integer
     */
    protected $NumberOfTurns;

    /**
     * @var integer
     */
    protected $RemainingTurns;

    /**
     * @var integer
     */
    protected $RemainingDays;

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
     * @var Division
     */
    protected $Division;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return SubscriptionLog
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
     * @param  SimpleType\Guid[optional] $subscriptionId
     * @return SubscriptionLog
     */
    public function setSubscriptionId(SimpleType\Guid $subscriptionId = null)
    {
        $this->SubscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }

    /**
     * @param  string[optional] $creationDate
     * @return SubscriptionLog
     */
    public function setCreationDate($creationDate)
    {
        $this->CreationDate = $creationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }

    /**
     * @param  SimpleType\SubscriptionLogType[optional] $logType
     * @return SubscriptionLog
     */
    public function setLogType(SimpleType\SubscriptionLogType $logType = null)
    {
        $this->LogType = $logType;

        return $this;
    }

    /**
     * @return SimpleType\SubscriptionLogType
     */
    public function getLogType()
    {
        return $this->LogType;
    }

    /**
     * @param  SimpleType\SubscriptionLogSubType[optional] $subType
     * @return SubscriptionLog
     */
    public function setSubType(SimpleType\SubscriptionLogSubType $subType = null)
    {
        $this->SubType = $subType;

        return $this;
    }

    /**
     * @return SimpleType\SubscriptionLogSubType
     */
    public function getSubType()
    {
        return $this->SubType;
    }

    /**
     * @param  integer[optional] $numberOfTurns
     * @return SubscriptionLog
     */
    public function setNumberOfTurns($numberOfTurns)
    {
        $this->NumberOfTurns = $numberOfTurns;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberOfTurns()
    {
        return $this->NumberOfTurns;
    }

    /**
     * @param  integer[optional] $remainingTurns
     * @return SubscriptionLog
     */
    public function setRemainingTurns($remainingTurns)
    {
        $this->RemainingTurns = $remainingTurns;

        return $this;
    }

    /**
     * @return integer
     */
    public function getRemainingTurns()
    {
        return $this->RemainingTurns;
    }

    /**
     * @param  integer[optional] $remainingDays
     * @return SubscriptionLog
     */
    public function setRemainingDays($remainingDays)
    {
        $this->RemainingDays = $remainingDays;

        return $this;
    }

    /**
     * @return integer
     */
    public function getRemainingDays()
    {
        return $this->RemainingDays;
    }

    /**
     * @param  Card[optional]  $card
     * @return SubscriptionLog
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
     * @param  SimpleType\Guid[optional] $personId
     * @return SubscriptionLog
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
     * @param  Person[optional] $person
     * @return SubscriptionLog
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
     * @param  Division[optional] $division
     * @return SubscriptionLog
     */
    public function setDivision(Division $division = null)
    {
        $this->Division = $division;

        return $this;
    }

    /**
     * @return Division
     */
    public function getDivision()
    {
        return $this->Division;
    }
}
