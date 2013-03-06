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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\WeekDays|null $DayOfTheWeek
     */
    protected $DayOfTheWeek;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $DayOfTheMonth
     */
    protected $DayOfTheMonth;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MonthNumber
     */
    protected $MonthNumber;

    /**
     * @param  SimpleType\WeekDays|null $dayOfTheWeek
     * @return SerieYearPattern
     */
    public function setDayOfTheWeek(SimpleType\WeekDays $dayOfTheWeek = null)
    {
        $this->DayOfTheWeek = $dayOfTheWeek;

        return $this;
    }

    /**
     * @return SimpleType\WeekDays|null
     */
    public function getDayOfTheWeek()
    {
        return $this->DayOfTheWeek;
    }

    /**
     * @param  integer|null     $dayOfTheMonth
     * @return SerieYearPattern
     */
    public function setDayOfTheMonth($dayOfTheMonth)
    {
        $this->DayOfTheMonth = $dayOfTheMonth;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getDayOfTheMonth()
    {
        return $this->DayOfTheMonth;
    }

    /**
     * @param  integer|null     $monthNumber
     * @return SerieYearPattern
     */
    public function setMonthNumber($monthNumber)
    {
        $this->MonthNumber = $monthNumber;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMonthNumber()
    {
        return $this->MonthNumber;
    }

}
