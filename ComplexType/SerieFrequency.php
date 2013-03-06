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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $DayFrequency
     */
    protected $DayFrequency;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $WeekFrequency
     */
    protected $WeekFrequency;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MonthFrequency
     */
    protected $MonthFrequency;

    /**
     * @param  integer|null   $dayFrequency
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
     * @param  integer|null   $weekFrequency
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
     * @param  integer|null   $monthFrequency
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
