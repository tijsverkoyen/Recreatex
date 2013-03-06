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

     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * Place name

     * @var string
     */
    protected $Name;

    /**
     * Place description

     * @var string
     */
    protected $Description;

    /**
     * Maximum days that can be reserved through ReCreateX

     * @var integer
     */
    protected $MaxDaysReservation;

    /**
     * Maximum days that can be reserved through Web

     * @var integer
     */
    protected $MaxDaysReservationWeb;

    /**
     * Is the Place part of a cumulation ?

     * @var boolean
     */
    protected $IsCumulated;

    /**
     * Place Infrastructure info

     * @var Infrastructure
     */
    protected $Infrastructure;

    /**
     * Place ReservationActivity info

     * @var ReservationActivity
     */
    protected $ReservationActivity;

    /**
     * Allowed ReservationActivity IDs

     * @var ArrayOfGuid
     */
    protected $AllowedReservationActivityIds;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return Place
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
     * @param  string[optional] $name
     * @return Place
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
     * @param  string[optional] $description
     * @return Place
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
     * @param  integer[optional] $maxDaysReservation
     * @return Place
     */
    public function setMaxDaysReservation($maxDaysReservation)
    {
        $this->MaxDaysReservation = $maxDaysReservation;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaxDaysReservation()
    {
        return $this->MaxDaysReservation;
    }

    /**
     * @param  integer[optional] $maxDaysReservationWeb
     * @return Place
     */
    public function setMaxDaysReservationWeb($maxDaysReservationWeb)
    {
        $this->MaxDaysReservationWeb = $maxDaysReservationWeb;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaxDaysReservationWeb()
    {
        return $this->MaxDaysReservationWeb;
    }

    /**
     * @param  boolean[optional] $isCumulated
     * @return Place
     */
    public function setIsCumulated($isCumulated)
    {
        $this->IsCumulated = $isCumulated;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCumulated()
    {
        return $this->IsCumulated;
    }

    /**
     * @param  Infrastructure[optional] $infrastructure
     * @return Place
     */
    public function setInfrastructure(Infrastructure $infrastructure = null)
    {
        $this->Infrastructure = $infrastructure;

        return $this;
    }

    /**
     * @return Infrastructure
     */
    public function getInfrastructure()
    {
        return $this->Infrastructure;
    }

    /**
     * @param  ReservationActivity[optional] $reservationActivity
     * @return Place
     */
    public function setReservationActivity(ReservationActivity $reservationActivity = null)
    {
        $this->ReservationActivity = $reservationActivity;

        return $this;
    }

    /**
     * @return ReservationActivity
     */
    public function getReservationActivity()
    {
        return $this->ReservationActivity;
    }

    /**
     * @param  ArrayOfguid[optional] $allowedReservationActivityIds
     * @return Place
     */
    public function setAllowedReservationActivityIds(ArrayOfguid $allowedReservationActivityIds = null)
    {
        $this->AllowedReservationActivityIds = $allowedReservationActivityIds;

        return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getAllowedReservationActivityIds()
    {
        return $this->AllowedReservationActivityIds;
    }
}
