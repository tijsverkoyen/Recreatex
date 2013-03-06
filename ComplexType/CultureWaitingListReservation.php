<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureWaitingListReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureWaitingListReservation';

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
     * @var SimpleType\guid|null $CultureEventId
     */
    protected $CultureEventId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CultureEvent|null $CultureEvent
     */
    protected $CultureEvent;

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
     * @var SimpleType\guid|null $CustomerId
     */
    protected $CustomerId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Person|null $Customer
     */
    protected $Customer;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $NumberOfSeats
     */
    protected $NumberOfSeats;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $NumberOfSitePlaces
     */
    protected $NumberOfSitePlaces;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Comment
     */
    protected $Comment;

    /**
     * @param  SimpleType\guid|null          $id
     * @return CultureWaitingListReservation
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
     * @param  SimpleType\guid|null          $cultureEventId
     * @return CultureWaitingListReservation
     */
    public function setCultureEventId(SimpleType\guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  CultureEvent|null             $cultureEvent
     * @return CultureWaitingListReservation
     */
    public function setCultureEvent(CultureEvent $cultureEvent = null)
    {
        $this->CultureEvent = $cultureEvent;

        return $this;
    }

    /**
     * @return CultureEvent|null
     */
    public function getCultureEvent()
    {
        return $this->CultureEvent;
    }

    /**
     * @param  string|null                   $creationDate
     * @return CultureWaitingListReservation
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
     * @param  SimpleType\guid|null          $customerId
     * @return CultureWaitingListReservation
     */
    public function setCustomerId(SimpleType\guid $customerId = null)
    {
        $this->CustomerId = $customerId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param  Person|null                   $customer
     * @return CultureWaitingListReservation
     */
    public function setCustomer(Person $customer = null)
    {
        $this->Customer = $customer;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param  integer|null                  $numberOfSeats
     * @return CultureWaitingListReservation
     */
    public function setNumberOfSeats($numberOfSeats)
    {
        $this->NumberOfSeats = $numberOfSeats;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumberOfSeats()
    {
        return $this->NumberOfSeats;
    }

    /**
     * @param  integer|null                  $numberOfSitePlaces
     * @return CultureWaitingListReservation
     */
    public function setNumberOfSitePlaces($numberOfSitePlaces)
    {
        $this->NumberOfSitePlaces = $numberOfSitePlaces;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumberOfSitePlaces()
    {
        return $this->NumberOfSitePlaces;
    }

    /**
     * @param  string|null                   $comment
     * @return CultureWaitingListReservation
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }

}
