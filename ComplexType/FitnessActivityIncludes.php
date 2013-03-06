<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FitnessActivityIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FitnessActivityIncludes';

    /**
     * @var boolean
     */
    protected $Price;

    /**
     * @var boolean
     */
    protected $Days;

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
     * @param  boolean[optional]       $price
     * @return FitnessActivityIncludes
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param  boolean[optional]       $days
     * @return FitnessActivityIncludes
     */
    public function setDays($days)
    {
        $this->Days = $days;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDays()
    {
        return $this->Days;
    }

    /**
     * @param  boolean[optional]       $slots
     * @return FitnessActivityIncludes
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
     * @param  boolean[optional]       $locations
     * @return FitnessActivityIncludes
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
     * @param  boolean[optional]       $image
     * @return FitnessActivityIncludes
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
     * @param  boolean[optional]       $imageUri
     * @return FitnessActivityIncludes
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
}
