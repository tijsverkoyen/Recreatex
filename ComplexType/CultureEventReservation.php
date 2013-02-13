<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureEventReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureEventReservation';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Comments
     */
    protected $Comments;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $CultureEventId
     */
    protected $CultureEventId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfCultureEventReservationEntry|null $Entries
     */
    protected $Entries;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var LockTicket|null $LockTicket
     */
    protected $LockTicket;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfCultureEventOptionReservation|null $Options
     */
    protected $Options;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ReservationDate
     */
    protected $ReservationDate;


    /**
     * @param string|null $comments
     * @return CultureEventReservation
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param SimpleType\guid|null $cultureEventId
     * @return CultureEventReservation
     */
    public function setCultureEventId(SimpleType\guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param ArrayOfCultureEventReservationEntry|null $entries
     * @return CultureEventReservation
     */
    public function setEntries(ArrayOfCultureEventReservationEntry $entries = null)
    {
        $this->Entries = $entries;

        return $this;
    }

    /**
     * @return ArrayOfCultureEventReservationEntry|null
     */
    public function getEntries()
    {
        return $this->Entries;
    }

    /**
     * @param LockTicket|null $lockTicket
     * @return CultureEventReservation
     */
    public function setLockTicket(LockTicket $lockTicket = null)
    {
        $this->LockTicket = $lockTicket;

        return $this;
    }

    /**
     * @return LockTicket|null
     */
    public function getLockTicket()
    {
        return $this->LockTicket;
    }

    /**
     * @param ArrayOfCultureEventOptionReservation|null $options
     * @return CultureEventReservation
     */
    public function setOptions(ArrayOfCultureEventOptionReservation $options = null)
    {
        $this->Options = $options;

        return $this;
    }

    /**
     * @return ArrayOfCultureEventOptionReservation|null
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param string|null $reservationDate
     * @return CultureEventReservation
     */
    public function setReservationDate($reservationDate)
    {
        $this->ReservationDate = $reservationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReservationDate()
    {
        return $this->ReservationDate;
    }


}

