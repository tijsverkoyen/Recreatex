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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Date
     */
    protected $Date;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $From1
     */
    protected $From1;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $To1
     */
    protected $To1;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $From2
     */
    protected $From2;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $To2
     */
    protected $To2;

    /**
     * @param  string|null $date
     * @return OpeningHour
     */
    public function setDate($date)
    {
        $this->Date = $date;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param  string|null $from1
     * @return OpeningHour
     */
    public function setFrom1($from1)
    {
        $this->From1 = $from1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom1()
    {
        return $this->From1;
    }

    /**
     * @param  string|null $to1
     * @return OpeningHour
     */
    public function setTo1($to1)
    {
        $this->To1 = $to1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTo1()
    {
        return $this->To1;
    }

    /**
     * @param  string|null $from2
     * @return OpeningHour
     */
    public function setFrom2($from2)
    {
        $this->From2 = $from2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom2()
    {
        return $this->From2;
    }

    /**
     * @param  string|null $to2
     * @return OpeningHour
     */
    public function setTo2($to2)
    {
        $this->To2 = $to2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTo2()
    {
        return $this->To2;
    }

}
