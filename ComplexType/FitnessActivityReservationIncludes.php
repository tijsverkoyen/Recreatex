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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Canceled
     */
    protected $Canceled;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Confirmed
     */
    protected $Confirmed;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PersonDetails
     */
    protected $PersonDetails;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Slots
     */
    protected $Slots;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Locations
     */
    protected $Locations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Image
     */
    protected $Image;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ImageUri
     */
    protected $ImageUri;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $WaitingList
     */
    protected $WaitingList;

    /**
     * @param  boolean|null                       $canceled
     * @return FitnessActivityReservationIncludes
     */
    public function setCanceled($canceled)
    {
        $this->Canceled = $canceled;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getCanceled()
    {
        return $this->Canceled;
    }

    /**
     * @param  boolean|null                       $confirmed
     * @return FitnessActivityReservationIncludes
     */
    public function setConfirmed($confirmed)
    {
        $this->Confirmed = $confirmed;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getConfirmed()
    {
        return $this->Confirmed;
    }

    /**
     * @param  boolean|null                       $personDetails
     * @return FitnessActivityReservationIncludes
     */
    public function setPersonDetails($personDetails)
    {
        $this->PersonDetails = $personDetails;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPersonDetails()
    {
        return $this->PersonDetails;
    }

    /**
     * @param  boolean|null                       $slots
     * @return FitnessActivityReservationIncludes
     */
    public function setSlots($slots)
    {
        $this->Slots = $slots;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getSlots()
    {
        return $this->Slots;
    }

    /**
     * @param  boolean|null                       $locations
     * @return FitnessActivityReservationIncludes
     */
    public function setLocations($locations)
    {
        $this->Locations = $locations;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getLocations()
    {
        return $this->Locations;
    }

    /**
     * @param  boolean|null                       $image
     * @return FitnessActivityReservationIncludes
     */
    public function setImage($image)
    {
        $this->Image = $image;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param  boolean|null                       $imageUri
     * @return FitnessActivityReservationIncludes
     */
    public function setImageUri($imageUri)
    {
        $this->ImageUri = $imageUri;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getImageUri()
    {
        return $this->ImageUri;
    }

    /**
     * @param  boolean|null                       $waitingList
     * @return FitnessActivityReservationIncludes
     */
    public function setWaitingList($waitingList)
    {
        $this->WaitingList = $waitingList;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getWaitingList()
    {
        return $this->WaitingList;
    }

}
