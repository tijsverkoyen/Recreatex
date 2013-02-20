<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExpositionPeriodReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpositionPeriodReservation';

    /**
     * @var ArrayOfExpositionPeriodReservationEntry
     */
    protected $Entries;

    /**
     * @var SimpleType\Guid
     */
    protected $ExpositionPeriodId;

    /**
     * @var LockTicket
     */
    protected $LockTicket;

    /**
     * @param  ArrayOfExpositionPeriodReservationEntry[optional] $entries
     * @return ExpositionPeriodReservation
     */
    public function setEntries(ArrayOfExpositionPeriodReservationEntry $entries = null)
    {
        $this->Entries = $entries;

        return $this;
    }

    /**
     * @return ArrayOfExpositionPeriodReservationEntry
     */
    public function getEntries()
    {
        return $this->Entries;
    }

    /**
     * @param  SimpleType\Guid[optional]   $expositionPeriodId
     * @return ExpositionPeriodReservation
     */
    public function setExpositionPeriodId(SimpleType\Guid $expositionPeriodId = null)
    {
        $this->ExpositionPeriodId = $expositionPeriodId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getExpositionPeriodId()
    {
        return $this->ExpositionPeriodId;
    }

    /**
     * @param  LockTicket[optional]        $lockTicket
     * @return ExpositionPeriodReservation
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
}
