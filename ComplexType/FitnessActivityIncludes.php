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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Price
     */
    protected $Price;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Days
     */
    protected $Days;

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
     * @param  boolean|null            $price
     * @return FitnessActivityIncludes
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param  boolean|null            $days
     * @return FitnessActivityIncludes
     */
    public function setDays($days)
    {
        $this->Days = $days;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getDays()
    {
        return $this->Days;
    }

    /**
     * @param  boolean|null            $slots
     * @return FitnessActivityIncludes
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
     * @param  boolean|null            $locations
     * @return FitnessActivityIncludes
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
     * @param  boolean|null            $image
     * @return FitnessActivityIncludes
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
     * @param  boolean|null            $imageUri
     * @return FitnessActivityIncludes
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

}
