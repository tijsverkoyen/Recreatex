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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $FitnessActivityDayId
     */
    protected $FitnessActivityDayId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfguid|null $FitnessActivitySlots
     */
    protected $FitnessActivitySlots;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PersonId
     */
    protected $PersonId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $SubscriptionId
     */
    protected $SubscriptionId;

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
     * @var boolean|null $WaitingList
     */
    protected $WaitingList;

    /**
     * @param  SimpleType\guid|null          $fitnessActivityDayId
     * @return FitnessActivityDayReservation
     */
    public function setFitnessActivityDayId(SimpleType\guid $fitnessActivityDayId = null)
    {
        $this->FitnessActivityDayId = $fitnessActivityDayId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getFitnessActivityDayId()
    {
        return $this->FitnessActivityDayId;
    }

    /**
     * @param  ArrayOfguid|null              $fitnessActivitySlots
     * @return FitnessActivityDayReservation
     */
    public function setFitnessActivitySlots(ArrayOfguid $fitnessActivitySlots = null)
    {
        $this->FitnessActivitySlots = $fitnessActivitySlots;

        return $this;
    }

    /**
     * @return ArrayOfguid|null
     */
    public function getFitnessActivitySlots()
    {
        return $this->FitnessActivitySlots;
    }

    /**
     * @param  SimpleType\guid|null          $personId
     * @return FitnessActivityDayReservation
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  SimpleType\guid|null          $subscriptionId
     * @return FitnessActivityDayReservation
     */
    public function setSubscriptionId(SimpleType\guid $subscriptionId = null)
    {
        $this->SubscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }

    /**
     * @param  LockTicket|null               $lockTicket
     * @return FitnessActivityDayReservation
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
     * @param  boolean|null                  $waitingList
     * @return FitnessActivityDayReservation
     */
    public function setWaitingList($waitingList)
    {
        $this->WaitingList = $waitingList;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getWaitingList()
    {
        return $this->WaitingList;
    }

}
