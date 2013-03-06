<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SerieFrequency extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SerieFrequency';

    /**
     * @var integer
     */
    protected $DayFrequency;

    /**
     * @var integer
     */
    protected $WeekFrequency;

    /**
     * @var integer
     */
    protected $MonthFrequency;

    /**
     * @param  integer[optional] $dayFrequency
     * @return SerieFrequency
     */
    public function setDayFrequency($dayFrequency)
    {
        $this->DayFrequency = $dayFrequency;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getDayFrequency()
    {
        return $this->DayFrequency;
    }

    /**
     * @param  integer[optional] $weekFrequency
     * @return SerieFrequency
     */
    public function setWeekFrequency($weekFrequency)
    {
        $this->WeekFrequency = $weekFrequency;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getWeekFrequency()
    {
        return $this->WeekFrequency;
    }

    /**
     * @param  integer[optional] $monthFrequency
     * @return SerieFrequency
     */
    public function setMonthFrequency($monthFrequency)
    {
        $this->MonthFrequency = $monthFrequency;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMonthFrequency()
    {
        return $this->MonthFrequency;
    }
}
