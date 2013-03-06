<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Subscription extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Subscription';

    /**

     * maxOccurs = 1     * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * maxOccurs = 1     * @var string
     */
    protected $CreationDate;

    /**

     * maxOccurs = 1     * @var Article
     */
    protected $Article;

    /**

     * maxOccurs = 1     * @var Person
     */
    protected $Person;

    /**

     * maxOccurs = 1     * @var boolean
     */
    protected $Active;

    /**

     * maxOccurs = 1     * @var boolean
     */
    protected $Valid;

    /**

     * maxOccurs = 1     * @var string
     */
    protected $StartDateTime;

    /**

     * maxOccurs = 1     * @var string
     */
    protected $EndDateTime;

    /**

     * maxOccurs = 1     * @var integer
     */
    protected $NumberOfDays;

    /**

     * maxOccurs = 1     * @var integer
     */
    protected $RemainingDays;

    /**

     * maxOccurs = 1     * @var integer
     */
    protected $NumberOfTurns;

    /**

     * maxOccurs = 1     * @var integer
     */
    protected $RemainingTurns;

    /**

     * maxOccurs = 1     * @var string
     */
    protected $LastProlongationDate;

    /**

     * maxOccurs = 1     * @var boolean
     */
    protected $ProlongationAllowed;

    /**

     * maxOccurs = 1     * @var ArrayOfSubscriptionLog
     */
    protected $Logs;

    /**

     * maxOccurs = 1     * @var ArrayOfPersonCard
     */
    protected $PersonCards;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return Subscription
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string[optional] $creationDate
     * @return Subscription
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
     * @param  Article[optional] $article
     * @return Subscription
     */
    public function setArticle(Article $article = null)
    {
        $this->Article = $article;

        return $this;
    }

    /**
     * @return Article|null
     */
    public function getArticle()
    {
        return $this->Article;
    }

    /**
     * @param  Person[optional] $person
     * @return Subscription
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
     * @param  boolean[optional] $active
     * @return Subscription
     */
    public function setActive($active)
    {
        $this->Active = $active;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param  boolean[optional] $valid
     * @return Subscription
     */
    public function setValid($valid)
    {
        $this->Valid = $valid;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getValid()
    {
        return $this->Valid;
    }

    /**
     * @param  string[optional] $startDateTime
     * @return Subscription
     */
    public function setStartDateTime($startDateTime)
    {
        $this->StartDateTime = $startDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }

    /**
     * @param  string[optional] $endDateTime
     * @return Subscription
     */
    public function setEndDateTime($endDateTime)
    {
        $this->EndDateTime = $endDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndDateTime()
    {
        return $this->EndDateTime;
    }

    /**
     * @param  integer[optional] $numberOfDays
     * @return Subscription
     */
    public function setNumberOfDays($numberOfDays)
    {
        $this->NumberOfDays = $numberOfDays;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumberOfDays()
    {
        return $this->NumberOfDays;
    }

    /**
     * @param  integer[optional] $remainingDays
     * @return Subscription
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
     * @param  integer[optional] $numberOfTurns
     * @return Subscription
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
     * @param  integer[optional] $remainingTurns
     * @return Subscription
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
     * @param  string[optional] $lastProlongationDate
     * @return Subscription
     */
    public function setLastProlongationDate($lastProlongationDate)
    {
        $this->LastProlongationDate = $lastProlongationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastProlongationDate()
    {
        return $this->LastProlongationDate;
    }

    /**
     * @param  boolean[optional] $prolongationAllowed
     * @return Subscription
     */
    public function setProlongationAllowed($prolongationAllowed)
    {
        $this->ProlongationAllowed = $prolongationAllowed;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getProlongationAllowed()
    {
        return $this->ProlongationAllowed;
    }

    /**
     * @param  ArrayOfSubscriptionLog[optional] $logs
     * @return Subscription
     */
    public function setLogs(ArrayOfSubscriptionLog $logs = null)
    {
        $this->Logs = $logs;

        return $this;
    }

    /**
     * @return ArrayOfSubscriptionLog|null
     */
    public function getLogs()
    {
        return $this->Logs;
    }

    /**
     * @param  ArrayOfPersonCard[optional] $personCards
     * @return Subscription
     */
    public function setPersonCards(ArrayOfPersonCard $personCards = null)
    {
        $this->PersonCards = $personCards;

        return $this;
    }

    /**
     * @return ArrayOfPersonCard|null
     */
    public function getPersonCards()
    {
        return $this->PersonCards;
    }
}
