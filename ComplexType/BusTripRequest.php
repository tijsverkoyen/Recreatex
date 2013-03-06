<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class BusTripRequest extends ComplexTypeAbstract
{
    const CLASS_NAME = 'BusTripRequest';

    /**

     * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * @var integer
     */
    protected $BusTripNo;

    /**

     * @var string
     */
    protected $ShortName;

    /**

     * @var string
     */
    protected $Description;

    /**

     * @var SimpleTypeGuid
     */
    protected $SeriesID;

    /**

     * @var integer
     */
    protected $SeriesNo;

    /**

     * @var Person
     */
    protected $Requestor;

    /**

     * @var Contact
     */
    protected $ContactPerson;

    /**

     * @var Address
     */
    protected $DepartureAddress;

    /**

     * @var string
     */
    protected $DepartureDateTime;

    /**

     * @var Address
     */
    protected $ArrivalAddress;

    /**

     * @var string
     */
    protected $ArrivalDateTime;

    /**

     * @var float
     */
    protected $TotalDistance;

    /**

     * @var boolean
     */
    protected $AlsoReturn;

    /**

     * @var string
     */
    protected $ReturnDateTime;

    /**

     * @var string
     */
    protected $ReturnedDateTime;

    /**

     * @var string
     */
    protected $RequestDate;

    /**

     * @var integer
     */
    protected $NumPersons;

    /**

     * @var integer
     */
    protected $NumCompanions;

    /**

     * @var boolean
     */
    protected $ExtraLuggage;

    /**

     * @var string
     */
    protected $Comments;

    /**

     * @var boolean
     */
    protected $Confirmed;

    /**

     * @var SimpleType\BustripStates
     */
    protected $Status;

    /**

     * @var boolean
     */
    protected $ModifiedFromSeries;

    /**

     * @var boolean
     */
    protected $IsTransfer;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return BusTripRequest
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
     * @param  integer[optional] $busTripNo
     * @return BusTripRequest
     */
    public function setBusTripNo($busTripNo)
    {
        $this->BusTripNo = $busTripNo;

        return $this;
    }

    /**
     * @return integer
     */
    public function getBusTripNo()
    {
        return $this->BusTripNo;
    }

    /**
     * @param  string[optional] $shortName
     * @return BusTripRequest
     */
    public function setShortName($shortName)
    {
        $this->ShortName = $shortName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->ShortName;
    }

    /**
     * @param  string[optional] $description
     * @return BusTripRequest
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
     * @param  SimpleType\Guid[optional] $seriesID
     * @return BusTripRequest
     */
    public function setSeriesID(SimpleType\Guid $seriesID = null)
    {
        $this->SeriesID = $seriesID;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getSeriesID()
    {
        return $this->SeriesID;
    }

    /**
     * @param  integer[optional] $seriesNo
     * @return BusTripRequest
     */
    public function setSeriesNo($seriesNo)
    {
        $this->SeriesNo = $seriesNo;

        return $this;
    }

    /**
     * @return integer
     */
    public function getSeriesNo()
    {
        return $this->SeriesNo;
    }

    /**
     * @param  Person[optional] $requestor
     * @return BusTripRequest
     */
    public function setRequestor(Person $requestor = null)
    {
        $this->Requestor = $requestor;

        return $this;
    }

    /**
     * @return Person
     */
    public function getRequestor()
    {
        return $this->Requestor;
    }

    /**
     * @param  Contact[optional] $contactPerson
     * @return BusTripRequest
     */
    public function setContactPerson(Contact $contactPerson = null)
    {
        $this->ContactPerson = $contactPerson;

        return $this;
    }

    /**
     * @return Contact
     */
    public function getContactPerson()
    {
        return $this->ContactPerson;
    }

    /**
     * @param  Address[optional] $departureAddress
     * @return BusTripRequest
     */
    public function setDepartureAddress(Address $departureAddress = null)
    {
        $this->DepartureAddress = $departureAddress;

        return $this;
    }

    /**
     * @return Address
     */
    public function getDepartureAddress()
    {
        return $this->DepartureAddress;
    }

    /**
     * @param  string[optional] $departureDateTime
     * @return BusTripRequest
     */
    public function setDepartureDateTime($departureDateTime)
    {
        $this->DepartureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getDepartureDateTime()
    {
        return $this->DepartureDateTime;
    }

    /**
     * @param  Address[optional] $arrivalAddress
     * @return BusTripRequest
     */
    public function setArrivalAddress(Address $arrivalAddress = null)
    {
        $this->ArrivalAddress = $arrivalAddress;

        return $this;
    }

    /**
     * @return Address
     */
    public function getArrivalAddress()
    {
        return $this->ArrivalAddress;
    }

    /**
     * @param  string[optional] $arrivalDateTime
     * @return BusTripRequest
     */
    public function setArrivalDateTime($arrivalDateTime)
    {
        $this->ArrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getArrivalDateTime()
    {
        return $this->ArrivalDateTime;
    }

    /**
     * @param  float[optional] $totalDistance
     * @return BusTripRequest
     */
    public function setTotalDistance($totalDistance)
    {
        $this->TotalDistance = $totalDistance;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDistance()
    {
        return $this->TotalDistance;
    }

    /**
     * @param  boolean[optional] $alsoReturn
     * @return BusTripRequest
     */
    public function setAlsoReturn($alsoReturn)
    {
        $this->AlsoReturn = $alsoReturn;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAlsoReturn()
    {
        return $this->AlsoReturn;
    }

    /**
     * @param  string[optional] $returnDateTime
     * @return BusTripRequest
     */
    public function setReturnDateTime($returnDateTime)
    {
        $this->ReturnDateTime = $returnDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnDateTime()
    {
        return $this->ReturnDateTime;
    }

    /**
     * @param  string[optional] $returnedDateTime
     * @return BusTripRequest
     */
    public function setReturnedDateTime($returnedDateTime)
    {
        $this->ReturnedDateTime = $returnedDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnedDateTime()
    {
        return $this->ReturnedDateTime;
    }

    /**
     * @param  string[optional] $requestDate
     * @return BusTripRequest
     */
    public function setRequestDate($requestDate)
    {
        $this->RequestDate = $requestDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestDate()
    {
        return $this->RequestDate;
    }

    /**
     * @param  integer[optional] $numPersons
     * @return BusTripRequest
     */
    public function setNumPersons($numPersons)
    {
        $this->NumPersons = $numPersons;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumPersons()
    {
        return $this->NumPersons;
    }

    /**
     * @param  integer[optional] $numCompanions
     * @return BusTripRequest
     */
    public function setNumCompanions($numCompanions)
    {
        $this->NumCompanions = $numCompanions;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumCompanions()
    {
        return $this->NumCompanions;
    }

    /**
     * @param  boolean[optional] $extraLuggage
     * @return BusTripRequest
     */
    public function setExtraLuggage($extraLuggage)
    {
        $this->ExtraLuggage = $extraLuggage;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getExtraLuggage()
    {
        return $this->ExtraLuggage;
    }

    /**
     * @param  string[optional] $comments
     * @return BusTripRequest
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param  boolean[optional] $confirmed
     * @return BusTripRequest
     */
    public function setConfirmed($confirmed)
    {
        $this->Confirmed = $confirmed;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getConfirmed()
    {
        return $this->Confirmed;
    }

    /**
     * @param  SimpleType\BustripStates[optional] $status
     * @return BusTripRequest
     */
    public function setStatus(SimpleType\BustripStates $status = null)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * @return SimpleType\BustripStates
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param  boolean[optional] $modifiedFromSeries
     * @return BusTripRequest
     */
    public function setModifiedFromSeries($modifiedFromSeries)
    {
        $this->ModifiedFromSeries = $modifiedFromSeries;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getModifiedFromSeries()
    {
        return $this->ModifiedFromSeries;
    }

    /**
     * @param  boolean[optional] $isTransfer
     * @return BusTripRequest
     */
    public function setIsTransfer($isTransfer)
    {
        $this->IsTransfer = $isTransfer;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTransfer()
    {
        return $this->IsTransfer;
    }
}
