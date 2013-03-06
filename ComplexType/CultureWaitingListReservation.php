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
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $CultureEventId;

    /**
     * @var CultureEvent
     */
    protected $CultureEvent;

    /**
     * @var string
     */
    protected $CreationDate;

    /**
     * @var SimpleTypeGuid
     */
    protected $CustomerId;

    /**
     * @var Person
     */
    protected $Customer;

    /**
     * @var integer
     */
    protected $NumberOfSeats;

    /**
     * @var integer
     */
    protected $NumberOfSitePlaces;

    /**
     * @var string
     */
    protected $Comment;

    /**
     * @param  SimpleType\Guid[optional]     $id
     * @return CultureWaitingListReservation
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
     * @param  SimpleType\Guid[optional]     $cultureEventId
     * @return CultureWaitingListReservation
     */
    public function setCultureEventId(SimpleType\Guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  CultureEvent[optional]        $cultureEvent
     * @return CultureWaitingListReservation
     */
    public function setCultureEvent(CultureEvent $cultureEvent = null)
    {
        $this->CultureEvent = $cultureEvent;

        return $this;
    }

    /**
     * @return CultureEvent
     */
    public function getCultureEvent()
    {
        return $this->CultureEvent;
    }

    /**
     * @param  string[optional]              $creationDate
     * @return CultureWaitingListReservation
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
     * @param  SimpleType\Guid[optional]     $customerId
     * @return CultureWaitingListReservation
     */
    public function setCustomerId(SimpleType\Guid $customerId = null)
    {
        $this->CustomerId = $customerId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param  Person[optional]              $customer
     * @return CultureWaitingListReservation
     */
    public function setCustomer(Person $customer = null)
    {
        $this->Customer = $customer;

        return $this;
    }

    /**
     * @return Person
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param  integer[optional]             $numberOfSeats
     * @return CultureWaitingListReservation
     */
    public function setNumberOfSeats($numberOfSeats)
    {
        $this->NumberOfSeats = $numberOfSeats;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberOfSeats()
    {
        return $this->NumberOfSeats;
    }

    /**
     * @param  integer[optional]             $numberOfSitePlaces
     * @return CultureWaitingListReservation
     */
    public function setNumberOfSitePlaces($numberOfSitePlaces)
    {
        $this->NumberOfSitePlaces = $numberOfSitePlaces;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberOfSitePlaces()
    {
        return $this->NumberOfSitePlaces;
    }

    /**
     * @param  string[optional]              $comment
     * @return CultureWaitingListReservation
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }
}
