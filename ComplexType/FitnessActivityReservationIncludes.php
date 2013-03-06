<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FitnessActivityReservationIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FitnessActivityReservationIncludes';

    /**

     * @var boolean
     */
    protected $Canceled;

    /**

     * @var boolean
     */
    protected $Confirmed;

    /**

     * @var boolean
     */
    protected $PersonDetails;

    /**

     * @var boolean
     */
    protected $Slots;

    /**

     * @var boolean
     */
    protected $Locations;

    /**

     * @var boolean
     */
    protected $Image;

    /**

     * @var boolean
     */
    protected $ImageUri;

    /**

     * @var boolean
     */
    protected $WaitingList;

    /**
     * @param  boolean[optional]                  $canceled
     * @return FitnessActivityReservationIncludes
     */
    public function setCanceled($canceled)
    {
        $this->Canceled = $canceled;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getCanceled()
    {
        return $this->Canceled;
    }

    /**
     * @param  boolean[optional]                  $confirmed
     * @return FitnessActivityReservationIncludes
     */
    public function setConfirmed($confirmed)
    {
        $this->Confirmed = $confirmed;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getConfirmed()
    {
        return $this->Confirmed;
    }

    /**
     * @param  boolean[optional]                  $personDetails
     * @return FitnessActivityReservationIncludes
     */
    public function setPersonDetails($personDetails)
    {
        $this->PersonDetails = $personDetails;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPersonDetails()
    {
        return $this->PersonDetails;
    }

    /**
     * @param  boolean[optional]                  $slots
     * @return FitnessActivityReservationIncludes
     */
    public function setSlots($slots)
    {
        $this->Slots = $slots;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getSlots()
    {
        return $this->Slots;
    }

    /**
     * @param  boolean[optional]                  $locations
     * @return FitnessActivityReservationIncludes
     */
    public function setLocations($locations)
    {
        $this->Locations = $locations;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLocations()
    {
        return $this->Locations;
    }

    /**
     * @param  boolean[optional]                  $image
     * @return FitnessActivityReservationIncludes
     */
    public function setImage($image)
    {
        $this->Image = $image;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param  boolean[optional]                  $imageUri
     * @return FitnessActivityReservationIncludes
     */
    public function setImageUri($imageUri)
    {
        $this->ImageUri = $imageUri;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getImageUri()
    {
        return $this->ImageUri;
    }

    /**
     * @param  boolean[optional]                  $waitingList
     * @return FitnessActivityReservationIncludes
     */
    public function setWaitingList($waitingList)
    {
        $this->WaitingList = $waitingList;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getWaitingList()
    {
        return $this->WaitingList;
    }
}
