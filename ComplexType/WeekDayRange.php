<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class WeekDayRange extends ComplexTypeAbstract
{
    const CLASS_NAME = 'WeekDayRange';

    /**
     * @var SimpleType\WeekDays
     */
    protected $Weekday;

    /**
     * @var boolean
     */
    protected $Include;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var string
     */
    protected $To;

    /**
     * @param  SimpleType\WeekDays[optional] $weekday
     * @return WeekDayRange
     */
    public function setWeekday(SimpleType\WeekDays $weekday = null)
    {
        $this->Weekday = $weekday;

        return $this;
    }

    /**
     * @return SimpleType\WeekDays
     */
    public function getWeekday()
    {
        return $this->Weekday;
    }

    /**
     * @param  boolean[optional] $include
     * @return WeekDayRange
     */
    public function setInclude($include)
    {
        $this->Include = $include;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getInclude()
    {
        return $this->Include;
    }

    /**
     * @param  string[optional] $from
     * @return WeekDayRange
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  string[optional] $to
     * @return WeekDayRange
     */
    public function setTo($to)
    {
        $this->To = $to;

        return $this;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->To;
    }
}
