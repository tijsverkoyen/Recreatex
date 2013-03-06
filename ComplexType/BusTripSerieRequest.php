<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class BusTripSerieRequest extends ComplexTypeAbstract
{
    const CLASS_NAME = 'BusTripSerieRequest';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $SerieId;

    /**
     * @var integer
     */
    protected $SerieNo;

    /**
     * @var string
     */
    protected $StartDate;

    /**
     * @var string
     */
    protected $FromHour;

    /**
     * @var string
     */
    protected $ToHour;

    /**
     * @var string
     */
    protected $EndDate;

    /**
     * @var integer
     */
    protected $Iterations;

    /**
     * @var SimpleType\FrequencyTypes
     */
    protected $FrequencyType;

    /**
     * @var SerieFrequency
     */
    protected $Frequency;

    /**
     * @var ArrayOfWeekDayRange
     */
    protected $WeekPattern;

    /**
     * @var SerieMonthPattern
     */
    protected $MonthPattern;

    /**
     * @var SerieYearPattern
     */
    protected $YearPattern;

    /**
     * @var ArrayOfdateTime
     */
    protected $Dates;

    /**
     * @var ArrayOfBusTripRequest
     */
    protected $Bustrips;

    /**
     * @param  SimpleType\guid[optional] $id
     * @return BusTripSerieRequest
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\guid[optional] $serieId
     * @return BusTripSerieRequest
     */
    public function setSerieId(SimpleType\guid $serieId = null)
    {
        $this->SerieId = $serieId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getSerieId()
    {
        return $this->SerieId;
    }

    /**
     * @param  integer[optional]   $serieNo
     * @return BusTripSerieRequest
     */
    public function setSerieNo($serieNo)
    {
        $this->SerieNo = $serieNo;

        return $this;
    }

    /**
     * @return integer
     */
    public function getSerieNo()
    {
        return $this->SerieNo;
    }

    /**
     * @param  string[optional]    $startDate
     * @return BusTripSerieRequest
     */
    public function setStartDate($startDate)
    {
        $this->StartDate = $startDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param  string[optional]    $fromHour
     * @return BusTripSerieRequest
     */
    public function setFromHour($fromHour)
    {
        $this->FromHour = $fromHour;

        return $this;
    }

    /**
     * @return string
     */
    public function getFromHour()
    {
        return $this->FromHour;
    }

    /**
     * @param  string[optional]    $toHour
     * @return BusTripSerieRequest
     */
    public function setToHour($toHour)
    {
        $this->ToHour = $toHour;

        return $this;
    }

    /**
     * @return string
     */
    public function getToHour()
    {
        return $this->ToHour;
    }

    /**
     * @param  string[optional]    $endDate
     * @return BusTripSerieRequest
     */
    public function setEndDate($endDate)
    {
        $this->EndDate = $endDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param  integer[optional]   $iterations
     * @return BusTripSerieRequest
     */
    public function setIterations($iterations)
    {
        $this->Iterations = $iterations;

        return $this;
    }

    /**
     * @return integer
     */
    public function getIterations()
    {
        return $this->Iterations;
    }

    /**
     * @param  SimpleType\FrequencyTypes[optional] $frequencyType
     * @return BusTripSerieRequest
     */
    public function setFrequencyType(SimpleType\FrequencyTypes $frequencyType = null)
    {
        $this->FrequencyType = $frequencyType;

        return $this;
    }

    /**
     * @return SimpleType\FrequencyTypes
     */
    public function getFrequencyType()
    {
        return $this->FrequencyType;
    }

    /**
     * @param  SerieFrequency[optional] $frequency
     * @return BusTripSerieRequest
     */
    public function setFrequency(SerieFrequency $frequency = null)
    {
        $this->Frequency = $frequency;

        return $this;
    }

    /**
     * @return SerieFrequency
     */
    public function getFrequency()
    {
        return $this->Frequency;
    }

    /**
     * @param  ArrayOfWeekDayRange[optional] $weekPattern
     * @return BusTripSerieRequest
     */
    public function setWeekPattern(ArrayOfWeekDayRange $weekPattern = null)
    {
        $this->WeekPattern = $weekPattern;

        return $this;
    }

    /**
     * @return ArrayOfWeekDayRange
     */
    public function getWeekPattern()
    {
        return $this->WeekPattern;
    }

    /**
     * @param  SerieMonthPattern[optional] $monthPattern
     * @return BusTripSerieRequest
     */
    public function setMonthPattern(SerieMonthPattern $monthPattern = null)
    {
        $this->MonthPattern = $monthPattern;

        return $this;
    }

    /**
     * @return SerieMonthPattern
     */
    public function getMonthPattern()
    {
        return $this->MonthPattern;
    }

    /**
     * @param  SerieYearPattern[optional] $yearPattern
     * @return BusTripSerieRequest
     */
    public function setYearPattern(SerieYearPattern $yearPattern = null)
    {
        $this->YearPattern = $yearPattern;

        return $this;
    }

    /**
     * @return SerieYearPattern
     */
    public function getYearPattern()
    {
        return $this->YearPattern;
    }

    /**
     * @param  ArrayOfdateTime[optional] $dates
     * @return BusTripSerieRequest
     */
    public function setDates(ArrayOfdateTime $dates = null)
    {
        $this->Dates = $dates;

        return $this;
    }

    /**
     * @return ArrayOfdateTime
     */
    public function getDates()
    {
        return $this->Dates;
    }

    /**
     * @param  ArrayOfBusTripRequest[optional] $bustrips
     * @return BusTripSerieRequest
     */
    public function setBustrips(ArrayOfBusTripRequest $bustrips = null)
    {
        $this->Bustrips = $bustrips;

        return $this;
    }

    /**
     * @return ArrayOfBusTripRequest
     */
    public function getBustrips()
    {
        return $this->Bustrips;
    }
}
