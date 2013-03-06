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
     * @var string
     */
    protected $StartDate;

    /**
     * @var string
     */
    protected $StartTime;

    /**
     * @var string
     */
    protected $EndDate;

    /**
     * @var string
     */
    protected $EndTime;

    /**
     * @var integer
     */
    protected $MaximumIterations;

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
    protected $ExclusionDates;

    /**
     * @param  string[optional] $startDate
     * @return RecurringPattern
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
     * @param  string[optional] $startTime
     * @return RecurringPattern
     */
    public function setStartTime($startTime)
    {
        $this->StartTime = $startTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * @param  string[optional] $endDate
     * @return RecurringPattern
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
     * @param  string[optional] $endTime
     * @return RecurringPattern
     */
    public function setEndTime($endTime)
    {
        $this->EndTime = $endTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * @param  integer[optional] $maximumIterations
     * @return RecurringPattern
     */
    public function setMaximumIterations($maximumIterations)
    {
        $this->MaximumIterations = $maximumIterations;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaximumIterations()
    {
        return $this->MaximumIterations;
    }

    /**
     * @param  SimpleType\FrequencyTypes[optional] $frequencyType
     * @return RecurringPattern
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
     * @return RecurringPattern
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
     * @return RecurringPattern
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
     * @return RecurringPattern
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
     * @return RecurringPattern
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
     * @param  ArrayOfdateTime[optional] $exclusionDates
     * @return RecurringPattern
     */
    public function setExclusionDates(ArrayOfdateTime $exclusionDates = null)
    {
        $this->ExclusionDates = $exclusionDates;

        return $this;
    }

    /**
     * @return ArrayOfdateTime
     */
    public function getExclusionDates()
    {
        return $this->ExclusionDates;
    }
}
