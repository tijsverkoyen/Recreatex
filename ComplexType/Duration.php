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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Days
     */
    protected $Days;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Weeks
     */
    protected $Weeks;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Months
     */
    protected $Months;

    /**
     * @param  integer|null $days
     * @return Duration
     */
    public function setDays($days)
    {
        $this->Days = $days;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getDays()
    {
        return $this->Days;
    }

    /**
     * @param  integer|null $weeks
     * @return Duration
     */
    public function setWeeks($weeks)
    {
        $this->Weeks = $weeks;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getWeeks()
    {
        return $this->Weeks;
    }

    /**
     * @param  integer|null $months
     * @return Duration
     */
    public function setMonths($months)
    {
        $this->Months = $months;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMonths()
    {
        return $this->Months;
    }

}
