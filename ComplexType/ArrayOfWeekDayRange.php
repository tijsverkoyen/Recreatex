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

     * maxOccurs = unbounded     * @var array
     */
    protected $WeekDayRange = array();

    /**
     * @param  array               $weekDayRange
     * @return ArrayOfWeekDayRange
     */
    public function setWeekDayRange(array $weekDayRange = array())
    {
        $this->WeekDayRange = $weekDayRange;

        return $this;
    }

    /**
     * @return array
     */
    public function getWeekDayRange()
    {
        return $this->WeekDayRange;
    }
}