<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FitnessActivityReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FitnessActivityReservation';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var integer
     */
    protected $ReservationNumber;

    /**
     * @var string
     */
    protected $ReservationDate;

    /**
     * @var string
     */
    protected $ConfirmationDate;

    /**
     * @var string
     */
    protected $CancelationDate;

    /**
     * @var SimpleType\FitnessActivityReservationStatus
     */
    protected $Status;

    /**
     * @var boolean
     */
    protected $NonMemberResevation;

    /**
     * @var float
     */
    protected $Warranty;

    /**
     * @var integer
     */
    protected $Credits;

    /**
     * @var float
     */
    protected $LineAmount;

    /**
     * @var float
     */
    protected $VatAmount;

    /**
     * @var float
     */
    protected $Amount;

    /**
     * @var FitnessActivity
     */
    protected $FitnessActivity;

    /**
     * @var FitnessActivityDay
     */
    protected $FitnessActivityDay;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var Person
     */
    protected $Person;

    /**
     * @var boolean
     */
    protected $WaitingList;

    /**
     * @param  SimpleType\Guid[optional]  $id
     * @return FitnessActivityReservation
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
     * @param  integer[optional]          $reservationNumber
     * @return FitnessActivityReservation
     */
    public function setReservationNumber($reservationNumber)
    {
        $this->ReservationNumber = $reservationNumber;

        return $this;
    }

    /**
     * @return integer
     */
    public function getReservationNumber()
    {
        return $this->ReservationNumber;
    }

    /**
     * @param  string[optional]           $reservationDate
     * @return FitnessActivityReservation
     */
    public function setReservationDate($reservationDate)
    {
        $this->ReservationDate = $reservationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getReservationDate()
    {
        return $this->ReservationDate;
    }

    /**
     * @param  string[optional]           $confirmationDate
     * @return FitnessActivityReservation
     */
    public function setConfirmationDate($confirmationDate)
    {
        $this->ConfirmationDate = $confirmationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationDate()
    {
        return $this->ConfirmationDate;
    }

    /**
     * @param  string[optional]           $cancelationDate
     * @return FitnessActivityReservation
     */
    public function setCancelationDate($cancelationDate)
    {
        $this->CancelationDate = $cancelationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getCancelationDate()
    {
        return $this->CancelationDate;
    }

    /**
     * @param  SimpleType\FitnessActivityReservationStatus[optional] $status
     * @return FitnessActivityReservation
     */
    public function setStatus(SimpleType\FitnessActivityReservationStatus $status = null)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * @return SimpleType\FitnessActivityReservationStatus
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param  boolean[optional]          $nonMemberResevation
     * @return FitnessActivityReservation
     */
    public function setNonMemberResevation($nonMemberResevation)
    {
        $this->NonMemberResevation = $nonMemberResevation;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getNonMemberResevation()
    {
        return $this->NonMemberResevation;
    }

    /**
     * @param  float[optional]            $warranty
     * @return FitnessActivityReservation
     */
    public function setWarranty($warranty)
    {
        $this->Warranty = $warranty;

        return $this;
    }

    /**
     * @return float
     */
    public function getWarranty()
    {
        return $this->Warranty;
    }

    /**
     * @param  integer[optional]          $credits
     * @return FitnessActivityReservation
     */
    public function setCredits($credits)
    {
        $this->Credits = $credits;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCredits()
    {
        return $this->Credits;
    }

    /**
     * @param  float[optional]            $lineAmount
     * @return FitnessActivityReservation
     */
    public function setLineAmount($lineAmount)
    {
        $this->LineAmount = $lineAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getLineAmount()
    {
        return $this->LineAmount;
    }

    /**
     * @param  float[optional]            $vatAmount
     * @return FitnessActivityReservation
     */
    public function setVatAmount($vatAmount)
    {
        $this->VatAmount = $vatAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getVatAmount()
    {
        return $this->VatAmount;
    }

    /**
     * @param  float[optional]            $amount
     * @return FitnessActivityReservation
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param  FitnessActivity[optional]  $fitnessActivity
     * @return FitnessActivityReservation
     */
    public function setFitnessActivity(FitnessActivity $fitnessActivity = null)
    {
        $this->FitnessActivity = $fitnessActivity;

        return $this;
    }

    /**
     * @return FitnessActivity
     */
    public function getFitnessActivity()
    {
        return $this->FitnessActivity;
    }

    /**
     * @param  FitnessActivityDay[optional] $fitnessActivityDay
     * @return FitnessActivityReservation
     */
    public function setFitnessActivityDay(FitnessActivityDay $fitnessActivityDay = null)
    {
        $this->FitnessActivityDay = $fitnessActivityDay;

        return $this;
    }

    /**
     * @return FitnessActivityDay
     */
    public function getFitnessActivityDay()
    {
        return $this->FitnessActivityDay;
    }

    /**
     * @param  SimpleType\Guid[optional]  $personId
     * @return FitnessActivityReservation
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
     * @param  Person[optional]           $person
     * @return FitnessActivityReservation
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
     * @param  boolean[optional]          $waitingList
     * @return FitnessActivityReservation
     */
    public function setWaitingList($waitingList)
    {
        $this->WaitingList = $waitingList;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getWaitingList()
    {
        return $this->WaitingList;
    }
}
