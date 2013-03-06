<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * Reservation Domain Object
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Place extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Place';

    /**
     * Place Unique Identifier
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**
     * Place name
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

    /**
     * Place description
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**
     * Maximum days that can be reserved through ReCreateX
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaxDaysReservation
     */
    protected $MaxDaysReservation;

    /**
     * Maximum days that can be reserved through Web
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaxDaysReservationWeb
     */
    protected $MaxDaysReservationWeb;

    /**
     * Is the Place part of a cumulation ?
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsCumulated
     */
    protected $IsCumulated;

    /**
     * Place Infrastructure info
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Infrastructure|null $Infrastructure
     */
    protected $Infrastructure;

    /**
     * Place ReservationActivity info
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ReservationActivity|null $ReservationActivity
     */
    protected $ReservationActivity;

    /**
     * Allowed ReservationActivity IDs
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfguid|null $AllowedReservationActivityIds
     */
    protected $AllowedReservationActivityIds;

    /**
     * @param  SimpleType\guid|null $id
     * @return Place
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
     * @param  string|null $name
     * @return Place
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
     * @param  string|null $description
     * @return Place
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
     * @param  integer|null $maxDaysReservation
     * @return Place
     */
    public function setMaxDaysReservation($maxDaysReservation)
    {
        $this->MaxDaysReservation = $maxDaysReservation;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaxDaysReservation()
    {
        return $this->MaxDaysReservation;
    }

    /**
     * @param  integer|null $maxDaysReservationWeb
     * @return Place
     */
    public function setMaxDaysReservationWeb($maxDaysReservationWeb)
    {
        $this->MaxDaysReservationWeb = $maxDaysReservationWeb;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaxDaysReservationWeb()
    {
        return $this->MaxDaysReservationWeb;
    }

    /**
     * @param  boolean|null $isCumulated
     * @return Place
     */
    public function setIsCumulated($isCumulated)
    {
        $this->IsCumulated = $isCumulated;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsCumulated()
    {
        return $this->IsCumulated;
    }

    /**
     * @param  Infrastructure|null $infrastructure
     * @return Place
     */
    public function setInfrastructure(Infrastructure $infrastructure = null)
    {
        $this->Infrastructure = $infrastructure;

        return $this;
    }

    /**
     * @return Infrastructure|null
     */
    public function getInfrastructure()
    {
        return $this->Infrastructure;
    }

    /**
     * @param  ReservationActivity|null $reservationActivity
     * @return Place
     */
    public function setReservationActivity(ReservationActivity $reservationActivity = null)
    {
        $this->ReservationActivity = $reservationActivity;

        return $this;
    }

    /**
     * @return ReservationActivity|null
     */
    public function getReservationActivity()
    {
        return $this->ReservationActivity;
    }

    /**
     * @param  ArrayOfguid|null $allowedReservationActivityIds
     * @return Place
     */
    public function setAllowedReservationActivityIds(ArrayOfguid $allowedReservationActivityIds = null)
    {
        $this->AllowedReservationActivityIds = $allowedReservationActivityIds;

        return $this;
    }

    /**
     * @return ArrayOfguid|null
     */
    public function getAllowedReservationActivityIds()
    {
        return $this->AllowedReservationActivityIds;
    }

}
