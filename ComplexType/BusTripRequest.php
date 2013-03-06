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
     * @var integer|null $BusTripNo
     */
    protected $BusTripNo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ShortName
     */
    protected $ShortName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $SeriesID
     */
    protected $SeriesID;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $SeriesNo
     */
    protected $SeriesNo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Person|null $Requestor
     */
    protected $Requestor;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Contact|null $ContactPerson
     */
    protected $ContactPerson;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Address|null $DepartureAddress
     */
    protected $DepartureAddress;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DepartureDateTime
     */
    protected $DepartureDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Address|null $ArrivalAddress
     */
    protected $ArrivalAddress;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ArrivalDateTime
     */
    protected $ArrivalDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $TotalDistance
     */
    protected $TotalDistance;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $AlsoReturn
     */
    protected $AlsoReturn;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ReturnDateTime
     */
    protected $ReturnDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ReturnedDateTime
     */
    protected $ReturnedDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $RequestDate
     */
    protected $RequestDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $NumPersons
     */
    protected $NumPersons;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $NumCompanions
     */
    protected $NumCompanions;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ExtraLuggage
     */
    protected $ExtraLuggage;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Comments
     */
    protected $Comments;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Confirmed
     */
    protected $Confirmed;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\BustripStates|null $Status
     */
    protected $Status;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ModifiedFromSeries
     */
    protected $ModifiedFromSeries;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsTransfer
     */
    protected $IsTransfer;

    /**
     * @param  SimpleType\guid|null $id
     * @return BusTripRequest
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
     * @param  integer|null   $busTripNo
     * @return BusTripRequest
     */
    public function setBusTripNo($busTripNo)
    {
        $this->BusTripNo = $busTripNo;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getBusTripNo()
    {
        return $this->BusTripNo;
    }

    /**
     * @param  string|null    $shortName
     * @return BusTripRequest
     */
    public function setShortName($shortName)
    {
        $this->ShortName = $shortName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getShortName()
    {
        return $this->ShortName;
    }

    /**
     * @param  string|null    $description
     * @return BusTripRequest
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
     * @param  SimpleType\guid|null $seriesID
     * @return BusTripRequest
     */
    public function setSeriesID(SimpleType\guid $seriesID = null)
    {
        $this->SeriesID = $seriesID;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSeriesID()
    {
        return $this->SeriesID;
    }

    /**
     * @param  integer|null   $seriesNo
     * @return BusTripRequest
     */
    public function setSeriesNo($seriesNo)
    {
        $this->SeriesNo = $seriesNo;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getSeriesNo()
    {
        return $this->SeriesNo;
    }

    /**
     * @param  Person|null    $requestor
     * @return BusTripRequest
     */
    public function setRequestor(Person $requestor = null)
    {
        $this->Requestor = $requestor;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getRequestor()
    {
        return $this->Requestor;
    }

    /**
     * @param  Contact|null   $contactPerson
     * @return BusTripRequest
     */
    public function setContactPerson(Contact $contactPerson = null)
    {
        $this->ContactPerson = $contactPerson;

        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getContactPerson()
    {
        return $this->ContactPerson;
    }

    /**
     * @param  Address|null   $departureAddress
     * @return BusTripRequest
     */
    public function setDepartureAddress(Address $departureAddress = null)
    {
        $this->DepartureAddress = $departureAddress;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getDepartureAddress()
    {
        return $this->DepartureAddress;
    }

    /**
     * @param  string|null    $departureDateTime
     * @return BusTripRequest
     */
    public function setDepartureDateTime($departureDateTime)
    {
        $this->DepartureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDepartureDateTime()
    {
        return $this->DepartureDateTime;
    }

    /**
     * @param  Address|null   $arrivalAddress
     * @return BusTripRequest
     */
    public function setArrivalAddress(Address $arrivalAddress = null)
    {
        $this->ArrivalAddress = $arrivalAddress;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getArrivalAddress()
    {
        return $this->ArrivalAddress;
    }

    /**
     * @param  string|null    $arrivalDateTime
     * @return BusTripRequest
     */
    public function setArrivalDateTime($arrivalDateTime)
    {
        $this->ArrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getArrivalDateTime()
    {
        return $this->ArrivalDateTime;
    }

    /**
     * @param  float|null     $totalDistance
     * @return BusTripRequest
     */
    public function setTotalDistance($totalDistance)
    {
        $this->TotalDistance = $totalDistance;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalDistance()
    {
        return $this->TotalDistance;
    }

    /**
     * @param  boolean|null   $alsoReturn
     * @return BusTripRequest
     */
    public function setAlsoReturn($alsoReturn)
    {
        $this->AlsoReturn = $alsoReturn;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getAlsoReturn()
    {
        return $this->AlsoReturn;
    }

    /**
     * @param  string|null    $returnDateTime
     * @return BusTripRequest
     */
    public function setReturnDateTime($returnDateTime)
    {
        $this->ReturnDateTime = $returnDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReturnDateTime()
    {
        return $this->ReturnDateTime;
    }

    /**
     * @param  string|null    $returnedDateTime
     * @return BusTripRequest
     */
    public function setReturnedDateTime($returnedDateTime)
    {
        $this->ReturnedDateTime = $returnedDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReturnedDateTime()
    {
        return $this->ReturnedDateTime;
    }

    /**
     * @param  string|null    $requestDate
     * @return BusTripRequest
     */
    public function setRequestDate($requestDate)
    {
        $this->RequestDate = $requestDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRequestDate()
    {
        return $this->RequestDate;
    }

    /**
     * @param  integer|null   $numPersons
     * @return BusTripRequest
     */
    public function setNumPersons($numPersons)
    {
        $this->NumPersons = $numPersons;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumPersons()
    {
        return $this->NumPersons;
    }

    /**
     * @param  integer|null   $numCompanions
     * @return BusTripRequest
     */
    public function setNumCompanions($numCompanions)
    {
        $this->NumCompanions = $numCompanions;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumCompanions()
    {
        return $this->NumCompanions;
    }

    /**
     * @param  boolean|null   $extraLuggage
     * @return BusTripRequest
     */
    public function setExtraLuggage($extraLuggage)
    {
        $this->ExtraLuggage = $extraLuggage;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getExtraLuggage()
    {
        return $this->ExtraLuggage;
    }

    /**
     * @param  string|null    $comments
     * @return BusTripRequest
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param  boolean|null   $confirmed
     * @return BusTripRequest
     */
    public function setConfirmed($confirmed)
    {
        $this->Confirmed = $confirmed;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getConfirmed()
    {
        return $this->Confirmed;
    }

    /**
     * @param  SimpleType\BustripStates|null $status
     * @return BusTripRequest
     */
    public function setStatus(SimpleType\BustripStates $status = null)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * @return SimpleType\BustripStates|null
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param  boolean|null   $modifiedFromSeries
     * @return BusTripRequest
     */
    public function setModifiedFromSeries($modifiedFromSeries)
    {
        $this->ModifiedFromSeries = $modifiedFromSeries;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getModifiedFromSeries()
    {
        return $this->ModifiedFromSeries;
    }

    /**
     * @param  boolean|null   $isTransfer
     * @return BusTripRequest
     */
    public function setIsTransfer($isTransfer)
    {
        $this->IsTransfer = $isTransfer;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsTransfer()
    {
        return $this->IsTransfer;
    }

}
