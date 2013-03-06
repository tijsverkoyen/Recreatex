<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RecurringPattern extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RecurringPattern';

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
     * @var string|null $StartTime
     */
    protected $StartTime;

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
     * @var string|null $EndTime
     */
    protected $EndTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaximumIterations
     */
    protected $MaximumIterations;

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
     * @var ArrayOfdateTime|null $ExclusionDates
     */
    protected $ExclusionDates;

    /**
     * @param  string|null      $startDate
     * @return RecurringPattern
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
     * @param  string|null      $startTime
     * @return RecurringPattern
     */
    public function setStartTime($startTime)
    {
        $this->StartTime = $startTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * @param  string|null      $endDate
     * @return RecurringPattern
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
     * @param  string|null      $endTime
     * @return RecurringPattern
     */
    public function setEndTime($endTime)
    {
        $this->EndTime = $endTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * @param  integer|null     $maximumIterations
     * @return RecurringPattern
     */
    public function setMaximumIterations($maximumIterations)
    {
        $this->MaximumIterations = $maximumIterations;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaximumIterations()
    {
        return $this->MaximumIterations;
    }

    /**
     * @param  SimpleType\FrequencyTypes|null $frequencyType
     * @return RecurringPattern
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
     * @return RecurringPattern
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
     * @return RecurringPattern
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
     * @return RecurringPattern
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
     * @return RecurringPattern
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
     * @param  ArrayOfdateTime|null $exclusionDates
     * @return RecurringPattern
     */
    public function setExclusionDates(ArrayOfdateTime $exclusionDates = null)
    {
        $this->ExclusionDates = $exclusionDates;

        return $this;
    }

    /**
     * @return ArrayOfdateTime|null
     */
    public function getExclusionDates()
    {
        return $this->ExclusionDates;
    }

}
