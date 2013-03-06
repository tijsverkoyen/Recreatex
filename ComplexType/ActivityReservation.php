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
     * @var Activity
     */
    protected $Activity;

    /**
     * @var string
     */
    protected $Comments;

    /**
     * @var LockTicket
     */
    protected $LockTicket;

    /**
     * @var float
     */
    protected $OptionPrice;

    /**
     * @var Person
     */
    protected $Participant;

    /**
     * @var ArrayOfActivityPartReservation
     */
    protected $PresentActivityParts;

    /**
     * @var float
     */
    protected $TotalPrice;

    /**
     * @var integer
     */
    protected $Status;

    /**
     * @param  Activity[optional]  $activity
     * @return ActivityReservation
     */
    public function setActivity(Activity $activity = null)
    {
        $this->Activity = $activity;

        return $this;
    }

    /**
     * @return Activity
     */
    public function getActivity()
    {
        return $this->Activity;
    }

    /**
     * @param  string[optional]    $comments
     * @return ActivityReservation
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
     * @param  LockTicket[optional] $lockTicket
     * @return ActivityReservation
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
     * @param  float[optional]     $optionPrice
     * @return ActivityReservation
     */
    public function setOptionPrice($optionPrice)
    {
        $this->OptionPrice = $optionPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getOptionPrice()
    {
        return $this->OptionPrice;
    }

    /**
     * @param  Person[optional]    $participant
     * @return ActivityReservation
     */
    public function setParticipant(Person $participant = null)
    {
        $this->Participant = $participant;

        return $this;
    }

    /**
     * @return Person
     */
    public function getParticipant()
    {
        return $this->Participant;
    }

    /**
     * @param  ArrayOfActivityPartReservation[optional] $presentActivityParts
     * @return ActivityReservation
     */
    public function setPresentActivityParts(ArrayOfActivityPartReservation $presentActivityParts = null)
    {
        $this->PresentActivityParts = $presentActivityParts;

        return $this;
    }

    /**
     * @return ArrayOfActivityPartReservation
     */
    public function getPresentActivityParts()
    {
        return $this->PresentActivityParts;
    }

    /**
     * @param  float[optional]     $totalPrice
     * @return ActivityReservation
     */
    public function setTotalPrice($totalPrice)
    {
        $this->TotalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }

    /**
     * @param  integer[optional]   $status
     * @return ActivityReservation
     */
    public function setStatus($status)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * @return integer
     */
    public function getStatus()
    {
        return $this->Status;
    }
}
