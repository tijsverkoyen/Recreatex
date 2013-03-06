<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfWeekDayRange extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfWeekDayRange';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var WeekDayRange[] $WeekDayRange
     */
    protected $WeekDayRange = array();

    /**
     * @param  WeekDayRange[]      $weekDayRange
     * @return ArrayOfWeekDayRange
     */
    public function setWeekDayRange(array $weekDayRange = array())
    {
        $this->WeekDayRange = $weekDayRange;

        return $this;
    }

    /**
     * @return WeekDayRange[]
     */
    public function getWeekDayRange()
    {
        return $this->WeekDayRange;
    }

}
