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
     * @var SimpleType\guid|null $SubscriptionId
     */
    protected $SubscriptionId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CreationDate
     */
    protected $CreationDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\SubscriptionLogType|null $LogType
     */
    protected $LogType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\SubscriptionLogSubType|null $SubType
     */
    protected $SubType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $NumberOfTurns
     */
    protected $NumberOfTurns;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $RemainingTurns
     */
    protected $RemainingTurns;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $RemainingDays
     */
    protected $RemainingDays;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Card|null $Card
     */
    protected $Card;

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
     * @var Division|null $Division
     */
    protected $Division;

    /**
     * @param  SimpleType\guid|null $id
     * @return SubscriptionLog
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
     * @param  SimpleType\guid|null $subscriptionId
     * @return SubscriptionLog
     */
    public function setSubscriptionId(SimpleType\guid $subscriptionId = null)
    {
        $this->SubscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }

    /**
     * @param  string|null     $creationDate
     * @return SubscriptionLog
     */
    public function setCreationDate($creationDate)
    {
        $this->CreationDate = $creationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }

    /**
     * @param  SimpleType\SubscriptionLogType|null $logType
     * @return SubscriptionLog
     */
    public function setLogType(SimpleType\SubscriptionLogType $logType = null)
    {
        $this->LogType = $logType;

        return $this;
    }

    /**
     * @return SimpleType\SubscriptionLogType|null
     */
    public function getLogType()
    {
        return $this->LogType;
    }

    /**
     * @param  SimpleType\SubscriptionLogSubType|null $subType
     * @return SubscriptionLog
     */
    public function setSubType(SimpleType\SubscriptionLogSubType $subType = null)
    {
        $this->SubType = $subType;

        return $this;
    }

    /**
     * @return SimpleType\SubscriptionLogSubType|null
     */
    public function getSubType()
    {
        return $this->SubType;
    }

    /**
     * @param  integer|null    $numberOfTurns
     * @return SubscriptionLog
     */
    public function setNumberOfTurns($numberOfTurns)
    {
        $this->NumberOfTurns = $numberOfTurns;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumberOfTurns()
    {
        return $this->NumberOfTurns;
    }

    /**
     * @param  integer|null    $remainingTurns
     * @return SubscriptionLog
     */
    public function setRemainingTurns($remainingTurns)
    {
        $this->RemainingTurns = $remainingTurns;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getRemainingTurns()
    {
        return $this->RemainingTurns;
    }

    /**
     * @param  integer|null    $remainingDays
     * @return SubscriptionLog
     */
    public function setRemainingDays($remainingDays)
    {
        $this->RemainingDays = $remainingDays;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getRemainingDays()
    {
        return $this->RemainingDays;
    }

    /**
     * @param  Card|null       $card
     * @return SubscriptionLog
     */
    public function setCard(Card $card = null)
    {
        $this->Card = $card;

        return $this;
    }

    /**
     * @return Card|null
     */
    public function getCard()
    {
        return $this->Card;
    }

    /**
     * @param  SimpleType\guid|null $personId
     * @return SubscriptionLog
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
     * @param  Person|null     $person
     * @return SubscriptionLog
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
     * @param  Division|null   $division
     * @return SubscriptionLog
     */
    public function setDivision(Division $division = null)
    {
        $this->Division = $division;

        return $this;
    }

    /**
     * @return Division|null
     */
    public function getDivision()
    {
        return $this->Division;
    }

}
