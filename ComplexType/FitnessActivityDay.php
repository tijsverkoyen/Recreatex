<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FitnessActivityDay extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FitnessActivityDay';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $From
     */
    protected $From;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Until
     */
    protected $Until;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Price
     */
    protected $Price;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfFitnessActivityDaySlot|null $Slots
     */
    protected $Slots;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaxReservations
     */
    protected $MaxReservations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaxReservationsNonMember
     */
    protected $MaxReservationsNonMember;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $CurrentReservations
     */
    protected $CurrentReservations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $CurrentReservationsMember
     */
    protected $CurrentReservationsMember;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $CurrentReservationsNonMember
     */
    protected $CurrentReservationsNonMember;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $RemainingReservationsMember
     */
    protected $RemainingReservationsMember;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $RemainingReservationsNonMember
     */
    protected $RemainingReservationsNonMember;

    /**
     * @param  SimpleType\guid|null $id
     * @return FitnessActivityDay
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string|null        $from
     * @return FitnessActivityDay
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  string|null        $until
     * @return FitnessActivityDay
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUntil()
    {
        return $this->Until;
    }

    /**
     * @param  float|null         $price
     * @return FitnessActivityDay
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param  ArrayOfFitnessActivityDaySlot|null $slots
     * @return FitnessActivityDay
     */
    public function setSlots(ArrayOfFitnessActivityDaySlot $slots = null)
    {
        $this->Slots = $slots;

        return $this;
    }

    /**
     * @return ArrayOfFitnessActivityDaySlot|null
     */
    public function getSlots()
    {
        return $this->Slots;
    }

    /**
     * @param  integer|null       $maxReservations
     * @return FitnessActivityDay
     */
    public function setMaxReservations($maxReservations)
    {
        $this->MaxReservations = $maxReservations;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaxReservations()
    {
        return $this->MaxReservations;
    }

    /**
     * @param  integer|null       $maxReservationsNonMember
     * @return FitnessActivityDay
     */
    public function setMaxReservationsNonMember($maxReservationsNonMember)
    {
        $this->MaxReservationsNonMember = $maxReservationsNonMember;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaxReservationsNonMember()
    {
        return $this->MaxReservationsNonMember;
    }

    /**
     * @param  integer|null       $currentReservations
     * @return FitnessActivityDay
     */
    public function setCurrentReservations($currentReservations)
    {
        $this->CurrentReservations = $currentReservations;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getCurrentReservations()
    {
        return $this->CurrentReservations;
    }

    /**
     * @param  integer|null       $currentReservationsMember
     * @return FitnessActivityDay
     */
    public function setCurrentReservationsMember($currentReservationsMember)
    {
        $this->CurrentReservationsMember = $currentReservationsMember;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getCurrentReservationsMember()
    {
        return $this->CurrentReservationsMember;
    }

    /**
     * @param  integer|null       $currentReservationsNonMember
     * @return FitnessActivityDay
     */
    public function setCurrentReservationsNonMember($currentReservationsNonMember)
    {
        $this->CurrentReservationsNonMember = $currentReservationsNonMember;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getCurrentReservationsNonMember()
    {
        return $this->CurrentReservationsNonMember;
    }

    /**
     * @param  integer|null       $remainingReservationsMember
     * @return FitnessActivityDay
     */
    public function setRemainingReservationsMember($remainingReservationsMember)
    {
        $this->RemainingReservationsMember = $remainingReservationsMember;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getRemainingReservationsMember()
    {
        return $this->RemainingReservationsMember;
    }

    /**
     * @param  integer|null       $remainingReservationsNonMember
     * @return FitnessActivityDay
     */
    public function setRemainingReservationsNonMember($remainingReservationsNonMember)
    {
        $this->RemainingReservationsNonMember = $remainingReservationsNonMember;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getRemainingReservationsNonMember()
    {
        return $this->RemainingReservationsNonMember;
    }

}
