<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class BusTripRequestSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'BusTripRequestSearchCriteria';

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
     * @var SimpleType\guid|null $RequestorId
     */
    protected $RequestorId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $NamePattern
     */
    protected $NamePattern;

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
     * @var SimpleType\guid|null $SeriesID
     */
    protected $SeriesID;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DepartureFromDateTime
     */
    protected $DepartureFromDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DepartureToDateTime
     */
    protected $DepartureToDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ArrivalFromDateTime
     */
    protected $ArrivalFromDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ArrivalToDateTime
     */
    protected $ArrivalToDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ReturnFromDateTime
     */
    protected $ReturnFromDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ReturnToDateTime
     */
    protected $ReturnToDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $RequestFromDateTime
     */
    protected $RequestFromDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $RequestToDateTime
     */
    protected $RequestToDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MinimumNumberOfPersons
     */
    protected $MinimumNumberOfPersons;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaximumNumberOfPersons
     */
    protected $MaximumNumberOfPersons;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var BusTripIncludes|null $Includes
     */
    protected $Includes;

    /**
     * @param  SimpleType\guid|null         $id
     * @return BusTripRequestSearchCriteria
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
     * @param  SimpleType\guid|null         $requestorId
     * @return BusTripRequestSearchCriteria
     */
    public function setRequestorId(SimpleType\guid $requestorId = null)
    {
        $this->RequestorId = $requestorId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getRequestorId()
    {
        return $this->RequestorId;
    }

    /**
     * @param  string|null                  $namePattern
     * @return BusTripRequestSearchCriteria
     */
    public function setNamePattern($namePattern)
    {
        $this->NamePattern = $namePattern;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNamePattern()
    {
        return $this->NamePattern;
    }

    /**
     * @param  integer|null                 $busTripNo
     * @return BusTripRequestSearchCriteria
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
     * @param  SimpleType\guid|null         $seriesID
     * @return BusTripRequestSearchCriteria
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
     * @param  string|null                  $departureFromDateTime
     * @return BusTripRequestSearchCriteria
     */
    public function setDepartureFromDateTime($departureFromDateTime)
    {
        $this->DepartureFromDateTime = $departureFromDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDepartureFromDateTime()
    {
        return $this->DepartureFromDateTime;
    }

    /**
     * @param  string|null                  $departureToDateTime
     * @return BusTripRequestSearchCriteria
     */
    public function setDepartureToDateTime($departureToDateTime)
    {
        $this->DepartureToDateTime = $departureToDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDepartureToDateTime()
    {
        return $this->DepartureToDateTime;
    }

    /**
     * @param  string|null                  $arrivalFromDateTime
     * @return BusTripRequestSearchCriteria
     */
    public function setArrivalFromDateTime($arrivalFromDateTime)
    {
        $this->ArrivalFromDateTime = $arrivalFromDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getArrivalFromDateTime()
    {
        return $this->ArrivalFromDateTime;
    }

    /**
     * @param  string|null                  $arrivalToDateTime
     * @return BusTripRequestSearchCriteria
     */
    public function setArrivalToDateTime($arrivalToDateTime)
    {
        $this->ArrivalToDateTime = $arrivalToDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getArrivalToDateTime()
    {
        return $this->ArrivalToDateTime;
    }

    /**
     * @param  string|null                  $returnFromDateTime
     * @return BusTripRequestSearchCriteria
     */
    public function setReturnFromDateTime($returnFromDateTime)
    {
        $this->ReturnFromDateTime = $returnFromDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReturnFromDateTime()
    {
        return $this->ReturnFromDateTime;
    }

    /**
     * @param  string|null                  $returnToDateTime
     * @return BusTripRequestSearchCriteria
     */
    public function setReturnToDateTime($returnToDateTime)
    {
        $this->ReturnToDateTime = $returnToDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReturnToDateTime()
    {
        return $this->ReturnToDateTime;
    }

    /**
     * @param  string|null                  $requestFromDateTime
     * @return BusTripRequestSearchCriteria
     */
    public function setRequestFromDateTime($requestFromDateTime)
    {
        $this->RequestFromDateTime = $requestFromDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRequestFromDateTime()
    {
        return $this->RequestFromDateTime;
    }

    /**
     * @param  string|null                  $requestToDateTime
     * @return BusTripRequestSearchCriteria
     */
    public function setRequestToDateTime($requestToDateTime)
    {
        $this->RequestToDateTime = $requestToDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRequestToDateTime()
    {
        return $this->RequestToDateTime;
    }

    /**
     * @param  integer|null                 $minimumNumberOfPersons
     * @return BusTripRequestSearchCriteria
     */
    public function setMinimumNumberOfPersons($minimumNumberOfPersons)
    {
        $this->MinimumNumberOfPersons = $minimumNumberOfPersons;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMinimumNumberOfPersons()
    {
        return $this->MinimumNumberOfPersons;
    }

    /**
     * @param  integer|null                 $maximumNumberOfPersons
     * @return BusTripRequestSearchCriteria
     */
    public function setMaximumNumberOfPersons($maximumNumberOfPersons)
    {
        $this->MaximumNumberOfPersons = $maximumNumberOfPersons;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaximumNumberOfPersons()
    {
        return $this->MaximumNumberOfPersons;
    }

    /**
     * @param  PagingCriteria|null          $paging
     * @return BusTripRequestSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria|null
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param  BusTripIncludes|null         $includes
     * @return BusTripRequestSearchCriteria
     */
    public function setIncludes(BusTripIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return BusTripIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

}
