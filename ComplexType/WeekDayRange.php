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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\WeekDays|null $Weekday
     */
    protected $Weekday;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Include
     */
    protected $Include;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $From
     */
    protected $From;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $To
     */
    protected $To;

    /**
     * @param  SimpleType\WeekDays|null $weekday
     * @return WeekDayRange
     */
    public function setWeekday(SimpleType\WeekDays $weekday = null)
    {
        $this->Weekday = $weekday;

        return $this;
    }

    /**
     * @return SimpleType\WeekDays|null
     */
    public function getWeekday()
    {
        return $this->Weekday;
    }

    /**
     * @param  boolean|null $include
     * @return WeekDayRange
     */
    public function setInclude($include)
    {
        $this->Include = $include;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getInclude()
    {
        return $this->Include;
    }

    /**
     * @param  string|null  $from
     * @return WeekDayRange
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  string|null  $to
     * @return WeekDayRange
     */
    public function setTo($to)
    {
        $this->To = $to;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTo()
    {
        return $this->To;
    }

}
