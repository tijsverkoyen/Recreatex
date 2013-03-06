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
     * @param  SimpleType\WeekDays|null $dayOfTheWeek
     * @return SerieMonthPattern
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
     * @param  integer|null      $dayOfTheMonth
     * @return SerieMonthPattern
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

}
