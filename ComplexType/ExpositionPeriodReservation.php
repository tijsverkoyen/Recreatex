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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfExpositionPeriodReservationEntry|null $Entries
     */
    protected $Entries;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ExpositionPeriodId
     */
    protected $ExpositionPeriodId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var LockTicket|null $LockTicket
     */
    protected $LockTicket;


    /**
     * @param ArrayOfExpositionPeriodReservationEntry|null $entries
     * @return ExpositionPeriodReservation
     */
    public function setEntries(ArrayOfExpositionPeriodReservationEntry $entries = null)
    {
        $this->Entries = $entries;

        return $this;
    }

    /**
     * @return ArrayOfExpositionPeriodReservationEntry|null
     */
    public function getEntries()
    {
        return $this->Entries;
    }

    /**
     * @param SimpleType\guid|null $expositionPeriodId
     * @return ExpositionPeriodReservation
     */
    public function setExpositionPeriodId(SimpleType\guid $expositionPeriodId = null)
    {
        $this->ExpositionPeriodId = $expositionPeriodId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getExpositionPeriodId()
    {
        return $this->ExpositionPeriodId;
    }

    /**
     * @param LockTicket|null $lockTicket
     * @return ExpositionPeriodReservation
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


}

