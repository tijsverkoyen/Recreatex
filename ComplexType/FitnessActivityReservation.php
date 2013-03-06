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
     * @var integer|null $ReservationNumber
     */
    protected $ReservationNumber;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ReservationDate
     */
    protected $ReservationDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ConfirmationDate
     */
    protected $ConfirmationDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CancelationDate
     */
    protected $CancelationDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\FitnessActivityReservationStatus|null $Status
     */
    protected $Status;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $NonMemberResevation
     */
    protected $NonMemberResevation;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Warranty
     */
    protected $Warranty;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Credits
     */
    protected $Credits;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $LineAmount
     */
    protected $LineAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $VatAmount
     */
    protected $VatAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Amount
     */
    protected $Amount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var FitnessActivity|null $FitnessActivity
     */
    protected $FitnessActivity;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var FitnessActivityDay|null $FitnessActivityDay
     */
    protected $FitnessActivityDay;

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
     * @var boolean|null $WaitingList
     */
    protected $WaitingList;

    /**
     * @param  SimpleType\guid|null       $id
     * @return FitnessActivityReservation
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
     * @param  integer|null               $reservationNumber
     * @return FitnessActivityReservation
     */
    public function setReservationNumber($reservationNumber)
    {
        $this->ReservationNumber = $reservationNumber;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getReservationNumber()
    {
        return $this->ReservationNumber;
    }

    /**
     * @param  string|null                $reservationDate
     * @return FitnessActivityReservation
     */
    public function setReservationDate($reservationDate)
    {
        $this->ReservationDate = $reservationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReservationDate()
    {
        return $this->ReservationDate;
    }

    /**
     * @param  string|null                $confirmationDate
     * @return FitnessActivityReservation
     */
    public function setConfirmationDate($confirmationDate)
    {
        $this->ConfirmationDate = $confirmationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getConfirmationDate()
    {
        return $this->ConfirmationDate;
    }

    /**
     * @param  string|null                $cancelationDate
     * @return FitnessActivityReservation
     */
    public function setCancelationDate($cancelationDate)
    {
        $this->CancelationDate = $cancelationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCancelationDate()
    {
        return $this->CancelationDate;
    }

    /**
     * @param  SimpleType\FitnessActivityReservationStatus|null $status
     * @return FitnessActivityReservation
     */
    public function setStatus(SimpleType\FitnessActivityReservationStatus $status = null)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * @return SimpleType\FitnessActivityReservationStatus|null
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param  boolean|null               $nonMemberResevation
     * @return FitnessActivityReservation
     */
    public function setNonMemberResevation($nonMemberResevation)
    {
        $this->NonMemberResevation = $nonMemberResevation;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getNonMemberResevation()
    {
        return $this->NonMemberResevation;
    }

    /**
     * @param  float|null                 $warranty
     * @return FitnessActivityReservation
     */
    public function setWarranty($warranty)
    {
        $this->Warranty = $warranty;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getWarranty()
    {
        return $this->Warranty;
    }

    /**
     * @param  integer|null               $credits
     * @return FitnessActivityReservation
     */
    public function setCredits($credits)
    {
        $this->Credits = $credits;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getCredits()
    {
        return $this->Credits;
    }

    /**
     * @param  float|null                 $lineAmount
     * @return FitnessActivityReservation
     */
    public function setLineAmount($lineAmount)
    {
        $this->LineAmount = $lineAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getLineAmount()
    {
        return $this->LineAmount;
    }

    /**
     * @param  float|null                 $vatAmount
     * @return FitnessActivityReservation
     */
    public function setVatAmount($vatAmount)
    {
        $this->VatAmount = $vatAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getVatAmount()
    {
        return $this->VatAmount;
    }

    /**
     * @param  float|null                 $amount
     * @return FitnessActivityReservation
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param  FitnessActivity|null       $fitnessActivity
     * @return FitnessActivityReservation
     */
    public function setFitnessActivity(FitnessActivity $fitnessActivity = null)
    {
        $this->FitnessActivity = $fitnessActivity;

        return $this;
    }

    /**
     * @return FitnessActivity|null
     */
    public function getFitnessActivity()
    {
        return $this->FitnessActivity;
    }

    /**
     * @param  FitnessActivityDay|null    $fitnessActivityDay
     * @return FitnessActivityReservation
     */
    public function setFitnessActivityDay(FitnessActivityDay $fitnessActivityDay = null)
    {
        $this->FitnessActivityDay = $fitnessActivityDay;

        return $this;
    }

    /**
     * @return FitnessActivityDay|null
     */
    public function getFitnessActivityDay()
    {
        return $this->FitnessActivityDay;
    }

    /**
     * @param  SimpleType\guid|null       $personId
     * @return FitnessActivityReservation
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
     * @param  Person|null                $person
     * @return FitnessActivityReservation
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
     * @param  boolean|null               $waitingList
     * @return FitnessActivityReservation
     */
    public function setWaitingList($waitingList)
    {
        $this->WaitingList = $waitingList;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getWaitingList()
    {
        return $this->WaitingList;
    }

}
