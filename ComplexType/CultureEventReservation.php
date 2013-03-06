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
     * @var string
     */
    protected $Comments;

    /**
     * @var SimpleType\Guid
     */
    protected $CultureEventId;

    /**
     * @var ArrayOfCultureEventReservationEntry
     */
    protected $Entries;

    /**
     * @var LockTicket
     */
    protected $LockTicket;

    /**
     * @var ArrayOfCultureEventOptionReservation
     */
    protected $Options;

    /**
     * @var string
     */
    protected $ReservationDate;

    /**
     * @param  string[optional]        $comments
     * @return CultureEventReservation
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param  SimpleType\Guid[optional] $cultureEventId
     * @return CultureEventReservation
     */
    public function setCultureEventId(SimpleType\Guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  ArrayOfCultureEventReservationEntry[optional] $entries
     * @return CultureEventReservation
     */
    public function setEntries(ArrayOfCultureEventReservationEntry $entries = null)
    {
        $this->Entries = $entries;

        return $this;
    }

    /**
     * @return ArrayOfCultureEventReservationEntry
     */
    public function getEntries()
    {
        return $this->Entries;
    }

    /**
     * @param  LockTicket[optional]    $lockTicket
     * @return CultureEventReservation
     */
    public function setLockTicket(LockTicket $lockTicket = null)
    {
        $this->LockTicket = $lockTicket;

        return $this;
    }

    /**
     * @return LockTicket
     */
    public function getLockTicket()
    {
        return $this->LockTicket;
    }

    /**
     * @param  ArrayOfCultureEventOptionReservation[optional] $options
     * @return CultureEventReservation
     */
    public function setOptions(ArrayOfCultureEventOptionReservation $options = null)
    {
        $this->Options = $options;

        return $this;
    }

    /**
     * @return ArrayOfCultureEventOptionReservation
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param  string[optional]        $reservationDate
     * @return CultureEventReservation
     */
    public function setReservationDate($reservationDate)
    {
        $this->ReservationDate = $reservationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getReservationDate()
    {
        return $this->ReservationDate;
    }
}
