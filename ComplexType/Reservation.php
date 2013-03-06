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
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * Reservation description
     * @var string
     */
    protected $Description;

    /**
     * Reservation No
     * @var integer
     */
    protected $ReservationNo;

    /**
     * If the reservation is part of a serie, then this will contain the number of the serie.     * @var integer
     */
    protected $SeriesNumber;

    /**
     * If the reservation is part of a reservationset, then this will contain the number of
     * the set
     * @var integer
     */
    protected $SetNumber;

    /**
     * OGM number of the reservation
     * @var string
     */
    protected $OGM;

    /**
     * Date and time of the start of the reservationperiod.
     * @var string
     */
    protected $StartDateTime;

    /**
     * Date and time of the end of the reservationperiod
     * @var string
     */
    protected $EndDateTime;

    /**
     * Actual count of reservation participants
     * @var integer
     */
    protected $ParticipantsCount;

    /**
     * Amount of the reservation
     * @var float
     */
    protected $Amount;

    /**
     * Posted amount of the reservation
     * @var float
     */
    protected $PostedAmount;

    /**
     * Rental price of the reservation
     * @var float
     */
    protected $RentalPrice;

    /**
     * Sales price of the reservation
     * @var float
     */
    protected $SalesPrice;

    /**
     * Balance of the reservation
     * @var float
     */
    protected $Balance;

    /**
     * Has the reservation been invoiced ?
     * @var boolean
     */
    protected $HasBeenInvoiced;

    /**
     * Is the reservation already payed ?
     * @var boolean
     */
    protected $ToPay;

    /**
     * Is the reservation optional ?
     * @var boolean
     */
    protected $IsOption;

    /**
     * Is the reservation deleted ?
     * @var boolean
     */
    protected $IsDeleted;

    /**
     * Date time when the reservation has been last changed
     * @var string
     */
    protected $DateLastModfied;

    /**
     * Date time the reservation was deleted
     * @var string
     */
    protected $DateDeleted;

    /**
     * The reservation Customer
     * @var Person
     */
    protected $Customer;

    /**
     * The place of the reservation
     * @var Place
     */
    protected $Place;

    /**
     * The infrastructure of the place of the reservation
     * @var Infrastructure
     */
    protected $Infrastructure;

    /**
     * The reservationactivity of the reservation
     * @var ReservationActivity
     */
    protected $ReservationActivity;

    /**
     * May the reservation be cancelled?
     * @var boolean
     */
    protected $Deletable;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return Reservation
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
     * @param  string[optional] $description
     * @return Reservation
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
     * @param  integer[optional] $reservationNo
     * @return Reservation
     */
    public function setReservationNo($reservationNo)
    {
        $this->ReservationNo = $reservationNo;

        return $this;
    }

    /**
     * @return integer
     */
    public function getReservationNo()
    {
        return $this->ReservationNo;
    }

    /**
     * @param  integer[optional] $seriesNumber
     * @return Reservation
     */
    public function setSeriesNumber($seriesNumber)
    {
        $this->SeriesNumber = $seriesNumber;

        return $this;
    }

    /**
     * @return integer
     */
    public function getSeriesNumber()
    {
        return $this->SeriesNumber;
    }

    /**
     * @param  integer[optional] $setNumber
     * @return Reservation
     */
    public function setSetNumber($setNumber)
    {
        $this->SetNumber = $setNumber;

        return $this;
    }

    /**
     * @return integer
     */
    public function getSetNumber()
    {
        return $this->SetNumber;
    }

    /**
     * @param  string[optional] $oGM
     * @return Reservation
     */
    public function setOGM($oGM)
    {
        $this->OGM = $oGM;

        return $this;
    }

    /**
     * @return string
     */
    public function getOGM()
    {
        return $this->OGM;
    }

    /**
     * @param  string[optional] $startDateTime
     * @return Reservation
     */
    public function setStartDateTime($startDateTime)
    {
        $this->StartDateTime = $startDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }

    /**
     * @param  string[optional] $endDateTime
     * @return Reservation
     */
    public function setEndDateTime($endDateTime)
    {
        $this->EndDateTime = $endDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndDateTime()
    {
        return $this->EndDateTime;
    }

    /**
     * @param  integer[optional] $participantsCount
     * @return Reservation
     */
    public function setParticipantsCount($participantsCount)
    {
        $this->ParticipantsCount = $participantsCount;

        return $this;
    }

    /**
     * @return integer
     */
    public function getParticipantsCount()
    {
        return $this->ParticipantsCount;
    }

    /**
     * @param  float[optional] $amount
     * @return Reservation
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
     * @param  float[optional] $postedAmount
     * @return Reservation
     */
    public function setPostedAmount($postedAmount)
    {
        $this->PostedAmount = $postedAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getPostedAmount()
    {
        return $this->PostedAmount;
    }

    /**
     * @param  float[optional] $rentalPrice
     * @return Reservation
     */
    public function setRentalPrice($rentalPrice)
    {
        $this->RentalPrice = $rentalPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getRentalPrice()
    {
        return $this->RentalPrice;
    }

    /**
     * @param  float[optional] $salesPrice
     * @return Reservation
     */
    public function setSalesPrice($salesPrice)
    {
        $this->SalesPrice = $salesPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getSalesPrice()
    {
        return $this->SalesPrice;
    }

    /**
     * @param  float[optional] $balance
     * @return Reservation
     */
    public function setBalance($balance)
    {
        $this->Balance = $balance;

        return $this;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * @param  boolean[optional] $hasBeenInvoiced
     * @return Reservation
     */
    public function setHasBeenInvoiced($hasBeenInvoiced)
    {
        $this->HasBeenInvoiced = $hasBeenInvoiced;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasBeenInvoiced()
    {
        return $this->HasBeenInvoiced;
    }

    /**
     * @param  boolean[optional] $toPay
     * @return Reservation
     */
    public function setToPay($toPay)
    {
        $this->ToPay = $toPay;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getToPay()
    {
        return $this->ToPay;
    }

    /**
     * @param  boolean[optional] $isOption
     * @return Reservation
     */
    public function setIsOption($isOption)
    {
        $this->IsOption = $isOption;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOption()
    {
        return $this->IsOption;
    }

    /**
     * @param  boolean[optional] $isDeleted
     * @return Reservation
     */
    public function setIsDeleted($isDeleted)
    {
        $this->IsDeleted = $isDeleted;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDeleted()
    {
        return $this->IsDeleted;
    }

    /**
     * @param  string[optional] $dateLastModfied
     * @return Reservation
     */
    public function setDateLastModfied($dateLastModfied)
    {
        $this->DateLastModfied = $dateLastModfied;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateLastModfied()
    {
        return $this->DateLastModfied;
    }

    /**
     * @param  string[optional] $dateDeleted
     * @return Reservation
     */
    public function setDateDeleted($dateDeleted)
    {
        $this->DateDeleted = $dateDeleted;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateDeleted()
    {
        return $this->DateDeleted;
    }

    /**
     * @param  Person[optional] $customer
     * @return Reservation
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
     * @param  Place[optional] $place
     * @return Reservation
     */
    public function setPlace(Place $place = null)
    {
        $this->Place = $place;

        return $this;
    }

    /**
     * @return Place
     */
    public function getPlace()
    {
        return $this->Place;
    }

    /**
     * @param  Infrastructure[optional] $infrastructure
     * @return Reservation
     */
    public function setInfrastructure(Infrastructure $infrastructure = null)
    {
        $this->Infrastructure = $infrastructure;

        return $this;
    }

    /**
     * @return Infrastructure
     */
    public function getInfrastructure()
    {
        return $this->Infrastructure;
    }

    /**
     * @param  ReservationActivity[optional] $reservationActivity
     * @return Reservation
     */
    public function setReservationActivity(ReservationActivity $reservationActivity = null)
    {
        $this->ReservationActivity = $reservationActivity;

        return $this;
    }

    /**
     * @return ReservationActivity
     */
    public function getReservationActivity()
    {
        return $this->ReservationActivity;
    }

    /**
     * @param  boolean[optional] $deletable
     * @return Reservation
     */
    public function setDeletable($deletable)
    {
        $this->Deletable = $deletable;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDeletable()
    {
        return $this->Deletable;
    }
}
