<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * ReservationActivity Domain Object
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ReservationActivity extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ReservationActivity';

    /**
     * ReservationActivity Unique Identifier
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * ReservationActivity name
     * @var string
     */
    protected $Name;

    /**
     * ReservationActivity description
     * @var string
     */
    protected $Description;

    /**
     * ReservationActivity minimum participants
     * @var integer
     */
    protected $MinParticipants;

    /**
     * ReservationActivity maximum participants
     * @var integer
     */
    protected $MaxParticipants;

    /**
     * ReservationActivity maximum number of reservations
     * @var integer
     */
    protected $MaxReservations;

    /**
     * Is the ReservationActivity blocked ?
     * @var boolean
     */
    protected $IsBlocked;

    /**
     * Is the ReservationActivity a technical activity ?
     * @var boolean
     */
    protected $IsTechnicalActivity;

    /**
     * Is the ReservationActivity a cultural activity ?
     * @var boolean
     */
    protected $IsCulturalActivity;

    /**
     * Color used within ReCreateX to visualise this reservation activity
     * @var Color
     */
    protected $Color;

    /**
     * Default time duration of this reservation activity
     * @var string
     */
    protected $Duration;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return ReservationActivity
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string[optional]    $name
     * @return ReservationActivity
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  string[optional]    $description
     * @return ReservationActivity
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  integer[optional]   $minParticipants
     * @return ReservationActivity
     */
    public function setMinParticipants($minParticipants)
    {
        $this->MinParticipants = $minParticipants;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMinParticipants()
    {
        return $this->MinParticipants;
    }

    /**
     * @param  integer[optional]   $maxParticipants
     * @return ReservationActivity
     */
    public function setMaxParticipants($maxParticipants)
    {
        $this->MaxParticipants = $maxParticipants;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaxParticipants()
    {
        return $this->MaxParticipants;
    }

    /**
     * @param  integer[optional]   $maxReservations
     * @return ReservationActivity
     */
    public function setMaxReservations($maxReservations)
    {
        $this->MaxReservations = $maxReservations;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaxReservations()
    {
        return $this->MaxReservations;
    }

    /**
     * @param  boolean[optional]   $isBlocked
     * @return ReservationActivity
     */
    public function setIsBlocked($isBlocked)
    {
        $this->IsBlocked = $isBlocked;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBlocked()
    {
        return $this->IsBlocked;
    }

    /**
     * @param  boolean[optional]   $isTechnicalActivity
     * @return ReservationActivity
     */
    public function setIsTechnicalActivity($isTechnicalActivity)
    {
        $this->IsTechnicalActivity = $isTechnicalActivity;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTechnicalActivity()
    {
        return $this->IsTechnicalActivity;
    }

    /**
     * @param  boolean[optional]   $isCulturalActivity
     * @return ReservationActivity
     */
    public function setIsCulturalActivity($isCulturalActivity)
    {
        $this->IsCulturalActivity = $isCulturalActivity;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCulturalActivity()
    {
        return $this->IsCulturalActivity;
    }

    /**
     * @param  Color[optional]     $color
     * @return ReservationActivity
     */
    public function setColor(Color $color = null)
    {
        $this->Color = $color;

        return $this;
    }

    /**
     * @return Color
     */
    public function getColor()
    {
        return $this->Color;
    }

    /**
     * @param  string[optional]    $duration
     * @return ReservationActivity
     */
    public function setDuration($duration)
    {
        $this->Duration = $duration;

        return $this;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->Duration;
    }
}
