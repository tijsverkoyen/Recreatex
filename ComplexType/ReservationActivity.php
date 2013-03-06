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
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**
     * ReservationActivity name
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

    /**
     * ReservationActivity description
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**
     * ReservationActivity minimum participants
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MinParticipants
     */
    protected $MinParticipants;

    /**
     * ReservationActivity maximum participants
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaxParticipants
     */
    protected $MaxParticipants;

    /**
     * ReservationActivity maximum number of reservations
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaxReservations
     */
    protected $MaxReservations;

    /**
     * Is the ReservationActivity blocked ?
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsBlocked
     */
    protected $IsBlocked;

    /**
     * Is the ReservationActivity a technical activity ?
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsTechnicalActivity
     */
    protected $IsTechnicalActivity;

    /**
     * Is the ReservationActivity a cultural activity ?
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsCulturalActivity
     */
    protected $IsCulturalActivity;

    /**
     * Color used within ReCreateX to visualise this reservation activity
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Color|null $Color
     */
    protected $Color;

    /**
     * Default time duration of this reservation activity
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Duration
     */
    protected $Duration;

    /**
     * @param  SimpleType\guid|null $id
     * @return ReservationActivity
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
     * @param  string|null         $name
     * @return ReservationActivity
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  string|null         $description
     * @return ReservationActivity
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  integer|null        $minParticipants
     * @return ReservationActivity
     */
    public function setMinParticipants($minParticipants)
    {
        $this->MinParticipants = $minParticipants;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMinParticipants()
    {
        return $this->MinParticipants;
    }

    /**
     * @param  integer|null        $maxParticipants
     * @return ReservationActivity
     */
    public function setMaxParticipants($maxParticipants)
    {
        $this->MaxParticipants = $maxParticipants;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaxParticipants()
    {
        return $this->MaxParticipants;
    }

    /**
     * @param  integer|null        $maxReservations
     * @return ReservationActivity
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
     * @param  boolean|null        $isBlocked
     * @return ReservationActivity
     */
    public function setIsBlocked($isBlocked)
    {
        $this->IsBlocked = $isBlocked;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsBlocked()
    {
        return $this->IsBlocked;
    }

    /**
     * @param  boolean|null        $isTechnicalActivity
     * @return ReservationActivity
     */
    public function setIsTechnicalActivity($isTechnicalActivity)
    {
        $this->IsTechnicalActivity = $isTechnicalActivity;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsTechnicalActivity()
    {
        return $this->IsTechnicalActivity;
    }

    /**
     * @param  boolean|null        $isCulturalActivity
     * @return ReservationActivity
     */
    public function setIsCulturalActivity($isCulturalActivity)
    {
        $this->IsCulturalActivity = $isCulturalActivity;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsCulturalActivity()
    {
        return $this->IsCulturalActivity;
    }

    /**
     * @param  Color|null          $color
     * @return ReservationActivity
     */
    public function setColor(Color $color = null)
    {
        $this->Color = $color;

        return $this;
    }

    /**
     * @return Color|null
     */
    public function getColor()
    {
        return $this->Color;
    }

    /**
     * @param  string|null         $duration
     * @return ReservationActivity
     */
    public function setDuration($duration)
    {
        $this->Duration = $duration;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }

}
