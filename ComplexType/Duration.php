<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Duration extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Duration';

    /**
     * @var integer
     */
    protected $Days;

    /**
     * @var integer
     */
    protected $Weeks;

    /**
     * @var integer
     */
    protected $Months;

    /**
     * @param  integer[optional] $days
     * @return Duration
     */
    public function setDays($days)
    {
        $this->Days = $days;

        return $this;
    }

    /**
     * @return integer
     */
    public function getDays()
    {
        return $this->Days;
    }

    /**
     * @param  integer[optional] $weeks
     * @return Duration
     */
    public function setWeeks($weeks)
    {
        $this->Weeks = $weeks;

        return $this;
    }

    /**
     * @return integer
     */
    public function getWeeks()
    {
        return $this->Weeks;
    }

    /**
     * @param  integer[optional] $months
     * @return Duration
     */
    public function setMonths($months)
    {
        $this->Months = $months;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMonths()
    {
        return $this->Months;
    }
}
