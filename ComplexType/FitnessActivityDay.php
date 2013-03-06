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
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var string
     */
    protected $Until;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @var ArrayOfFitnessActivityDaySlot
     */
    protected $Slots;

    /**
     * @var integer
     */
    protected $MaxReservations;

    /**
     * @var integer
     */
    protected $MaxReservationsNonMember;

    /**
     * @var integer
     */
    protected $CurrentReservations;

    /**
     * @var integer
     */
    protected $CurrentReservationsMember;

    /**
     * @var integer
     */
    protected $CurrentReservationsNonMember;

    /**
     * @var integer
     */
    protected $RemainingReservationsMember;

    /**
     * @var integer
     */
    protected $RemainingReservationsNonMember;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return FitnessActivityDay
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string[optional]   $from
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
     * @param  string[optional]   $until
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
     * @param  float[optional]    $price
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
     * @param  ArrayOfFitnessActivityDaySlot[optional] $slots
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
     * @param  integer[optional]  $maxReservations
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
     * @param  integer[optional]  $maxReservationsNonMember
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
     * @param  integer[optional]  $currentReservations
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
     * @param  integer[optional]  $currentReservationsMember
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
     * @param  integer[optional]  $currentReservationsNonMember
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
     * @param  integer[optional]  $remainingReservationsMember
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
     * @param  integer[optional]  $remainingReservationsNonMember
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
