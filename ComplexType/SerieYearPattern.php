<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SerieYearPattern extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SerieYearPattern';

    /**
     * @var SimpleType\WeekDays
     */
    protected $DayOfTheWeek;

    /**
     * @var integer
     */
    protected $DayOfTheMonth;

    /**
     * @var integer
     */
    protected $MonthNumber;

    /**
     * @param  SimpleType\WeekDays[optional] $dayOfTheWeek
     * @return SerieYearPattern
     */
    public function setDayOfTheWeek(SimpleType\WeekDays $dayOfTheWeek = null)
    {
        $this->DayOfTheWeek = $dayOfTheWeek;

        return $this;
    }

    /**
     * @return SimpleType\WeekDays
     */
    public function getDayOfTheWeek()
    {
        return $this->DayOfTheWeek;
    }

    /**
     * @param  integer[optional] $dayOfTheMonth
     * @return SerieYearPattern
     */
    public function setDayOfTheMonth($dayOfTheMonth)
    {
        $this->DayOfTheMonth = $dayOfTheMonth;

        return $this;
    }

    /**
     * @return integer
     */
    public function getDayOfTheMonth()
    {
        return $this->DayOfTheMonth;
    }

    /**
     * @param  integer[optional] $monthNumber
     * @return SerieYearPattern
     */
    public function setMonthNumber($monthNumber)
    {
        $this->MonthNumber = $monthNumber;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMonthNumber()
    {
        return $this->MonthNumber;
    }
}
