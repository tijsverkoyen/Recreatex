<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * Reservation Domain Object
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Reservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Reservation';

    /**
     * Reservation Unique Identifier
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**
     * Reservation description
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**
     * Reservation No
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $ReservationNo
     */
    protected $ReservationNo;

    /**
     * If the reservation is part of a serie, then this will contain the number of the serie.
     *
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $SeriesNumber
     */
    protected $SeriesNumber;

    /**
     * If the reservation is part of a reservationset, then this will contain the number of
     * the set
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $SetNumber
     */
    protected $SetNumber;

    /**
     * OGM number of the reservation
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $OGM
     */
    protected $OGM;

    /**
     * Date and time of the start of the reservationperiod.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $StartDateTime
     */
    protected $StartDateTime;

    /**
     * Date and time of the end of the reservationperiod
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EndDateTime
     */
    protected $EndDateTime;

    /**
     * Actual count of reservation participants
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $ParticipantsCount
     */
    protected $ParticipantsCount;

    /**
     * Amount of the reservation
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Amount
     */
    protected $Amount;

    /**
     * Posted amount of the reservation
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $PostedAmount
     */
    protected $PostedAmount;

    /**
     * Rental price of the reservation
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $RentalPrice
     */
    protected $RentalPrice;

    /**
     * Sales price of the reservation
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $SalesPrice
     */
    protected $SalesPrice;

    /**
     * Balance of the reservation
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Balance
     */
    protected $Balance;

    /**
     * Has the reservation been invoiced ?
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $HasBeenInvoiced
     */
    protected $HasBeenInvoiced;

    /**
     * Is the reservation already payed ?
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ToPay
     */
    protected $ToPay;

    /**
     * Is the reservation optional ?
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsOption
     */
    protected $IsOption;

    /**
     * Is the reservation deleted ?
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsDeleted
     */
    protected $IsDeleted;

    /**
     * Date time when the reservation has been last changed
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DateLastModfied
     */
    protected $DateLastModfied;

    /**
     * Date time the reservation was deleted
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DateDeleted
     */
    protected $DateDeleted;

    /**
     * The reservation Customer
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Person|null $Customer
     */
    protected $Customer;

    /**
     * The place of the reservation
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Place|null $Place
     */
    protected $Place;

    /**
     * The infrastructure of the place of the reservation
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Infrastructure|null $Infrastructure
     */
    protected $Infrastructure;

    /**
     * The reservationactivity of the reservation
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ReservationActivity|null $ReservationActivity
     */
    protected $ReservationActivity;

    /**
     * May the reservation be cancelled?
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Deletable
     */
    protected $Deletable;

    /**
     * @param  SimpleType\guid|null $id
     * @return Reservation
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
     * @param  string|null $description
     * @return Reservation
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  integer|null $reservationNo
     * @return Reservation
     */
    public function setReservationNo($reservationNo)
    {
        $this->ReservationNo = $reservationNo;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getReservationNo()
    {
        return $this->ReservationNo;
    }

    /**
     * @param  integer|null $seriesNumber
     * @return Reservation
     */
    public function setSeriesNumber($seriesNumber)
    {
        $this->SeriesNumber = $seriesNumber;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getSeriesNumber()
    {
        return $this->SeriesNumber;
    }

    /**
     * @param  integer|null $setNumber
     * @return Reservation
     */
    public function setSetNumber($setNumber)
    {
        $this->SetNumber = $setNumber;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getSetNumber()
    {
        return $this->SetNumber;
    }

    /**
     * @param  string|null $oGM
     * @return Reservation
     */
    public function setOGM($oGM)
    {
        $this->OGM = $oGM;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOGM()
    {
        return $this->OGM;
    }

    /**
     * @param  string|null $startDateTime
     * @return Reservation
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
     * @param  string|null $endDateTime
     * @return Reservation
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
     * @param  integer|null $participantsCount
     * @return Reservation
     */
    public function setParticipantsCount($participantsCount)
    {
        $this->ParticipantsCount = $participantsCount;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getParticipantsCount()
    {
        return $this->ParticipantsCount;
    }

    /**
     * @param  float|null  $amount
     * @return Reservation
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
     * @param  float|null  $postedAmount
     * @return Reservation
     */
    public function setPostedAmount($postedAmount)
    {
        $this->PostedAmount = $postedAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPostedAmount()
    {
        return $this->PostedAmount;
    }

    /**
     * @param  float|null  $rentalPrice
     * @return Reservation
     */
    public function setRentalPrice($rentalPrice)
    {
        $this->RentalPrice = $rentalPrice;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getRentalPrice()
    {
        return $this->RentalPrice;
    }

    /**
     * @param  float|null  $salesPrice
     * @return Reservation
     */
    public function setSalesPrice($salesPrice)
    {
        $this->SalesPrice = $salesPrice;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getSalesPrice()
    {
        return $this->SalesPrice;
    }

    /**
     * @param  float|null  $balance
     * @return Reservation
     */
    public function setBalance($balance)
    {
        $this->Balance = $balance;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * @param  boolean|null $hasBeenInvoiced
     * @return Reservation
     */
    public function setHasBeenInvoiced($hasBeenInvoiced)
    {
        $this->HasBeenInvoiced = $hasBeenInvoiced;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getHasBeenInvoiced()
    {
        return $this->HasBeenInvoiced;
    }

    /**
     * @param  boolean|null $toPay
     * @return Reservation
     */
    public function setToPay($toPay)
    {
        $this->ToPay = $toPay;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getToPay()
    {
        return $this->ToPay;
    }

    /**
     * @param  boolean|null $isOption
     * @return Reservation
     */
    public function setIsOption($isOption)
    {
        $this->IsOption = $isOption;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsOption()
    {
        return $this->IsOption;
    }

    /**
     * @param  boolean|null $isDeleted
     * @return Reservation
     */
    public function setIsDeleted($isDeleted)
    {
        $this->IsDeleted = $isDeleted;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsDeleted()
    {
        return $this->IsDeleted;
    }

    /**
     * @param  string|null $dateLastModfied
     * @return Reservation
     */
    public function setDateLastModfied($dateLastModfied)
    {
        $this->DateLastModfied = $dateLastModfied;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateLastModfied()
    {
        return $this->DateLastModfied;
    }

    /**
     * @param  string|null $dateDeleted
     * @return Reservation
     */
    public function setDateDeleted($dateDeleted)
    {
        $this->DateDeleted = $dateDeleted;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateDeleted()
    {
        return $this->DateDeleted;
    }

    /**
     * @param  Person|null $customer
     * @return Reservation
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
     * @param  Place|null  $place
     * @return Reservation
     */
    public function setPlace(Place $place = null)
    {
        $this->Place = $place;

        return $this;
    }

    /**
     * @return Place|null
     */
    public function getPlace()
    {
        return $this->Place;
    }

    /**
     * @param  Infrastructure|null $infrastructure
     * @return Reservation
     */
    public function setInfrastructure(Infrastructure $infrastructure = null)
    {
        $this->Infrastructure = $infrastructure;

        return $this;
    }

    /**
     * @return Infrastructure|null
     */
    public function getInfrastructure()
    {
        return $this->Infrastructure;
    }

    /**
     * @param  ReservationActivity|null $reservationActivity
     * @return Reservation
     */
    public function setReservationActivity(ReservationActivity $reservationActivity = null)
    {
        $this->ReservationActivity = $reservationActivity;

        return $this;
    }

    /**
     * @return ReservationActivity|null
     */
    public function getReservationActivity()
    {
        return $this->ReservationActivity;
    }

    /**
     * @param  boolean|null $deletable
     * @return Reservation
     */
    public function setDeletable($deletable)
    {
        $this->Deletable = $deletable;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getDeletable()
    {
        return $this->Deletable;
    }

}
