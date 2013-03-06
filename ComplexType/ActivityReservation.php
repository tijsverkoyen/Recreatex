<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ActivityReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ActivityReservation';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Activity|null $Activity
     */
    protected $Activity;

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
     * @var LockTicket|null $LockTicket
     */
    protected $LockTicket;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $OptionPrice
     */
    protected $OptionPrice;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Person|null $Customer
     */
    protected $Customer;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfActivityParticipantReservation|null $ActivityParticipantReservations
     */
    protected $ActivityParticipantReservations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $TotalPrice
     */
    protected $TotalPrice;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Status
     */
    protected $Status;

    /**
     * @param  Activity|null       $activity
     * @return ActivityReservation
     */
    public function setActivity(Activity $activity = null)
    {
        $this->Activity = $activity;

        return $this;
    }

    /**
     * @return Activity|null
     */
    public function getActivity()
    {
        return $this->Activity;
    }

    /**
     * @param  string|null         $comments
     * @return ActivityReservation
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
     * @param  LockTicket|null     $lockTicket
     * @return ActivityReservation
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
     * @param  float|null          $optionPrice
     * @return ActivityReservation
     */
    public function setOptionPrice($optionPrice)
    {
        $this->OptionPrice = $optionPrice;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getOptionPrice()
    {
        return $this->OptionPrice;
    }

    /**
     * @param  Person|null         $customer
     * @return ActivityReservation
     */
    public function setCustomer(Person $customer = null)
    {
        $this->Customer = $customer;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param  ArrayOfActivityParticipantReservation|null $activityParticipantReservations
     * @return ActivityReservation
     */
    public function setActivityParticipantReservations(ArrayOfActivityParticipantReservation $activityParticipantReservations = null)
    {
        $this->ActivityParticipantReservations = $activityParticipantReservations;

        return $this;
    }

    /**
     * @return ArrayOfActivityParticipantReservation|null
     */
    public function getActivityParticipantReservations()
    {
        return $this->ActivityParticipantReservations;
    }

    /**
     * @param  float|null          $totalPrice
     * @return ActivityReservation
     */
    public function setTotalPrice($totalPrice)
    {
        $this->TotalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }

    /**
     * @param  integer|null        $status
     * @return ActivityReservation
     */
    public function setStatus($status)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->Status;
    }

}
