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
     * @var string|null $CreationDate
     */
    protected $CreationDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Article|null $Article
     */
    protected $Article;

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
     * @var boolean|null $Active
     */
    protected $Active;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Valid
     */
    protected $Valid;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $StartDateTime
     */
    protected $StartDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EndDateTime
     */
    protected $EndDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $NumberOfDays
     */
    protected $NumberOfDays;

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
     * @var string|null $LastProlongationDate
     */
    protected $LastProlongationDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ProlongationAllowed
     */
    protected $ProlongationAllowed;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfSubscriptionLog|null $Logs
     */
    protected $Logs;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfPersonCard|null $PersonCards
     */
    protected $PersonCards;

    /**
     * @param  SimpleType\guid|null $id
     * @return Subscription
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
     * @param  string|null  $creationDate
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
     * @param  Article|null $article
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
     * @param  Person|null  $person
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
     * @param  boolean|null $active
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
     * @param  boolean|null $valid
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
     * @param  string|null  $startDateTime
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
     * @param  string|null  $endDateTime
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
     * @param  integer|null $numberOfDays
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
     * @param  integer|null $remainingDays
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
     * @param  integer|null $numberOfTurns
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
     * @param  integer|null $remainingTurns
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
     * @param  string|null  $lastProlongationDate
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
     * @param  boolean|null $prolongationAllowed
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
     * @param  ArrayOfSubscriptionLog|null $logs
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
     * @param  ArrayOfPersonCard|null $personCards
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
