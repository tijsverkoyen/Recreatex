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
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $RequestorId;

    /**
     * @var string
     */
    protected $NamePattern;

    /**
     * @var integer
     */
    protected $BusTripNo;

    /**
     * @var SimpleTypeGuid
     */
    protected $SeriesID;

    /**
     * @var string
     */
    protected $DepartureFromDateTime;

    /**
     * @var string
     */
    protected $DepartureToDateTime;

    /**
     * @var string
     */
    protected $ArrivalFromDateTime;

    /**
     * @var string
     */
    protected $ArrivalToDateTime;

    /**
     * @var string
     */
    protected $ReturnFromDateTime;

    /**
     * @var string
     */
    protected $ReturnToDateTime;

    /**
     * @var string
     */
    protected $RequestFromDateTime;

    /**
     * @var string
     */
    protected $RequestToDateTime;

    /**
     * @var integer
     */
    protected $MinimumNumberOfPersons;

    /**
     * @var integer
     */
    protected $MaximumNumberOfPersons;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var BusTripIncludes
     */
    protected $Includes;

    /**
     * @param  SimpleType\Guid[optional]    $id
     * @return BusTripRequestSearchCriteria
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\Guid[optional]    $requestorId
     * @return BusTripRequestSearchCriteria
     */
    public function setRequestorId(SimpleType\Guid $requestorId = null)
    {
        $this->RequestorId = $requestorId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getRequestorId()
    {
        return $this->RequestorId;
    }

    /**
     * @param  string[optional]             $namePattern
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
     * @param  integer[optional]            $busTripNo
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
     * @param  SimpleType\Guid[optional]    $seriesID
     * @return BusTripRequestSearchCriteria
     */
    public function setSeriesID(SimpleType\Guid $seriesID = null)
    {
        $this->SeriesID = $seriesID;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getSeriesID()
    {
        return $this->SeriesID;
    }

    /**
     * @param  string[optional]             $departureFromDateTime
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
     * @param  string[optional]             $departureToDateTime
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
     * @param  string[optional]             $arrivalFromDateTime
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
     * @param  string[optional]             $arrivalToDateTime
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
     * @param  string[optional]             $returnFromDateTime
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
     * @param  string[optional]             $returnToDateTime
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
     * @param  string[optional]             $requestFromDateTime
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
     * @param  string[optional]             $requestToDateTime
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
     * @param  integer[optional]            $minimumNumberOfPersons
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
     * @param  integer[optional]            $maximumNumberOfPersons
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
     * @param  PagingCriteria[optional]     $paging
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
     * @param  BusTripIncludes[optional]    $includes
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
