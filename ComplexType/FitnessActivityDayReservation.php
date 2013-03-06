<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FitnessActivityDayReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FitnessActivityDayReservation';

    /**
     * @var SimpleTypeGuid
     */
    protected $FitnessActivityDayId;

    /**
     * @var ArrayOfGuid
     */
    protected $FitnessActivitySlots;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var SimpleTypeGuid
     */
    protected $SubscriptionId;

    /**
     * @var LockTicket
     */
    protected $LockTicket;

    /**
     * @var boolean
     */
    protected $WaitingList;

    /**
     * @param  SimpleType\Guid[optional]     $fitnessActivityDayId
     * @return FitnessActivityDayReservation
     */
    public function setFitnessActivityDayId(SimpleType\Guid $fitnessActivityDayId = null)
    {
        $this->FitnessActivityDayId = $fitnessActivityDayId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getFitnessActivityDayId()
    {
        return $this->FitnessActivityDayId;
    }

    /**
     * @param  ArrayOfguid[optional]         $fitnessActivitySlots
     * @return FitnessActivityDayReservation
     */
    public function setFitnessActivitySlots(ArrayOfguid $fitnessActivitySlots = null)
    {
        $this->FitnessActivitySlots = $fitnessActivitySlots;

        return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getFitnessActivitySlots()
    {
        return $this->FitnessActivitySlots;
    }

    /**
     * @param  SimpleType\Guid[optional]     $personId
     * @return FitnessActivityDayReservation
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  SimpleType\Guid[optional]     $subscriptionId
     * @return FitnessActivityDayReservation
     */
    public function setSubscriptionId(SimpleType\Guid $subscriptionId = null)
    {
        $this->SubscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }

    /**
     * @param  LockTicket[optional]          $lockTicket
     * @return FitnessActivityDayReservation
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
     * @param  boolean[optional]             $waitingList
     * @return FitnessActivityDayReservation
     */
    public function setWaitingList($waitingList)
    {
        $this->WaitingList = $waitingList;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getWaitingList()
    {
        return $this->WaitingList;
    }
}
