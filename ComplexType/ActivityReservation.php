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
     * @var Person|null $Participant
     */
    protected $Participant;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfActivityPartReservation|null $PresentActivityParts
     */
    protected $PresentActivityParts;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $TotalPrice
     */
    protected $TotalPrice;

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
     * @param  Person|null         $participant
     * @return ActivityReservation
     */
    public function setParticipant(Person $participant = null)
    {
        $this->Participant = $participant;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getParticipant()
    {
        return $this->Participant;
    }

    /**
     * @param  ArrayOfActivityPartReservation|null $presentActivityParts
     * @return ActivityReservation
     */
    public function setPresentActivityParts(ArrayOfActivityPartReservation $presentActivityParts = null)
    {
        $this->PresentActivityParts = $presentActivityParts;

        return $this;
    }

    /**
     * @return ArrayOfActivityPartReservation|null
     */
    public function getPresentActivityParts()
    {
        return $this->PresentActivityParts;
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
}
