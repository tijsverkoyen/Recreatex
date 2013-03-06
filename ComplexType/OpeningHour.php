<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class OpeningHour extends ComplexTypeAbstract
{
    const CLASS_NAME = 'OpeningHour';

    /**
     * @var string
     */
    protected $Date;

    /**
     * @var string
     */
    protected $From1;

    /**
     * @var string
     */
    protected $To1;

    /**
     * @var string
     */
    protected $From2;

    /**
     * @var string
     */
    protected $To2;

    /**
     * @param  string[optional] $date
     * @return OpeningHour
     */
    public function setDate($date)
    {
        $this->Date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param  string[optional] $from1
     * @return OpeningHour
     */
    public function setFrom1($from1)
    {
        $this->From1 = $from1;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrom1()
    {
        return $this->From1;
    }

    /**
     * @param  string[optional] $to1
     * @return OpeningHour
     */
    public function setTo1($to1)
    {
        $this->To1 = $to1;

        return $this;
    }

    /**
     * @return string
     */
    public function getTo1()
    {
        return $this->To1;
    }

    /**
     * @param  string[optional] $from2
     * @return OpeningHour
     */
    public function setFrom2($from2)
    {
        $this->From2 = $from2;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrom2()
    {
        return $this->From2;
    }

    /**
     * @param  string[optional] $to2
     * @return OpeningHour
     */
    public function setTo2($to2)
    {
        $this->To2 = $to2;

        return $this;
    }

    /**
     * @return string
     */
    public function getTo2()
    {
        return $this->To2;
    }
}
