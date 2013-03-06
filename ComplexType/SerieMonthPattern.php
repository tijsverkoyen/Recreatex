<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SerieMonthPattern extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SerieMonthPattern';

    /**

     * maxOccurs = 1     * @var SimpleType\WeekDays
     */
    protected $DayOfTheWeek;

    /**

     * maxOccurs = 1     * @var integer
     */
    protected $DayOfTheMonth;

    /**
     * @param  SimpleType\WeekDays[optional] $dayOfTheWeek
     * @return SerieMonthPattern
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
     * @return SerieMonthPattern
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
}
