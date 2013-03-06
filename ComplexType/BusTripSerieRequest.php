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
     * @var SimpleType\guid|null $SerieId
     */
    protected $SerieId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $SerieNo
     */
    protected $SerieNo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $StartDate
     */
    protected $StartDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FromHour
     */
    protected $FromHour;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ToHour
     */
    protected $ToHour;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EndDate
     */
    protected $EndDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Iterations
     */
    protected $Iterations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\FrequencyTypes|null $FrequencyType
     */
    protected $FrequencyType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SerieFrequency|null $Frequency
     */
    protected $Frequency;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfWeekDayRange|null $WeekPattern
     */
    protected $WeekPattern;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SerieMonthPattern|null $MonthPattern
     */
    protected $MonthPattern;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SerieYearPattern|null $YearPattern
     */
    protected $YearPattern;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfdateTime|null $Dates
     */
    protected $Dates;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfBusTripRequest|null $Bustrips
     */
    protected $Bustrips;

    /**
     * @param  SimpleType\guid|null $id
     * @return BusTripSerieRequest
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
     * @param  SimpleType\guid|null $serieId
     * @return BusTripSerieRequest
     */
    public function setSerieId(SimpleType\guid $serieId = null)
    {
        $this->SerieId = $serieId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSerieId()
    {
        return $this->SerieId;
    }

    /**
     * @param  integer|null        $serieNo
     * @return BusTripSerieRequest
     */
    public function setSerieNo($serieNo)
    {
        $this->SerieNo = $serieNo;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getSerieNo()
    {
        return $this->SerieNo;
    }

    /**
     * @param  string|null         $startDate
     * @return BusTripSerieRequest
     */
    public function setStartDate($startDate)
    {
        $this->StartDate = $startDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param  string|null         $fromHour
     * @return BusTripSerieRequest
     */
    public function setFromHour($fromHour)
    {
        $this->FromHour = $fromHour;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromHour()
    {
        return $this->FromHour;
    }

    /**
     * @param  string|null         $toHour
     * @return BusTripSerieRequest
     */
    public function setToHour($toHour)
    {
        $this->ToHour = $toHour;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getToHour()
    {
        return $this->ToHour;
    }

    /**
     * @param  string|null         $endDate
     * @return BusTripSerieRequest
     */
    public function setEndDate($endDate)
    {
        $this->EndDate = $endDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param  integer|null        $iterations
     * @return BusTripSerieRequest
     */
    public function setIterations($iterations)
    {
        $this->Iterations = $iterations;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getIterations()
    {
        return $this->Iterations;
    }

    /**
     * @param  SimpleType\FrequencyTypes|null $frequencyType
     * @return BusTripSerieRequest
     */
    public function setFrequencyType(SimpleType\FrequencyTypes $frequencyType = null)
    {
        $this->FrequencyType = $frequencyType;

        return $this;
    }

    /**
     * @return SimpleType\FrequencyTypes|null
     */
    public function getFrequencyType()
    {
        return $this->FrequencyType;
    }

    /**
     * @param  SerieFrequency|null $frequency
     * @return BusTripSerieRequest
     */
    public function setFrequency(SerieFrequency $frequency = null)
    {
        $this->Frequency = $frequency;

        return $this;
    }

    /**
     * @return SerieFrequency|null
     */
    public function getFrequency()
    {
        return $this->Frequency;
    }

    /**
     * @param  ArrayOfWeekDayRange|null $weekPattern
     * @return BusTripSerieRequest
     */
    public function setWeekPattern(ArrayOfWeekDayRange $weekPattern = null)
    {
        $this->WeekPattern = $weekPattern;

        return $this;
    }

    /**
     * @return ArrayOfWeekDayRange|null
     */
    public function getWeekPattern()
    {
        return $this->WeekPattern;
    }

    /**
     * @param  SerieMonthPattern|null $monthPattern
     * @return BusTripSerieRequest
     */
    public function setMonthPattern(SerieMonthPattern $monthPattern = null)
    {
        $this->MonthPattern = $monthPattern;

        return $this;
    }

    /**
     * @return SerieMonthPattern|null
     */
    public function getMonthPattern()
    {
        return $this->MonthPattern;
    }

    /**
     * @param  SerieYearPattern|null $yearPattern
     * @return BusTripSerieRequest
     */
    public function setYearPattern(SerieYearPattern $yearPattern = null)
    {
        $this->YearPattern = $yearPattern;

        return $this;
    }

    /**
     * @return SerieYearPattern|null
     */
    public function getYearPattern()
    {
        return $this->YearPattern;
    }

    /**
     * @param  ArrayOfdateTime|null $dates
     * @return BusTripSerieRequest
     */
    public function setDates(ArrayOfdateTime $dates = null)
    {
        $this->Dates = $dates;

        return $this;
    }

    /**
     * @return ArrayOfdateTime|null
     */
    public function getDates()
    {
        return $this->Dates;
    }

    /**
     * @param  ArrayOfBusTripRequest|null $bustrips
     * @return BusTripSerieRequest
     */
    public function setBustrips(ArrayOfBusTripRequest $bustrips = null)
    {
        $this->Bustrips = $bustrips;

        return $this;
    }

    /**
     * @return ArrayOfBusTripRequest|null
     */
    public function getBustrips()
    {
        return $this->Bustrips;
    }

}
