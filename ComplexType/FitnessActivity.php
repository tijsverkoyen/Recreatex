<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FitnessActivity extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FitnessActivity';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var ArrayOfFitnessActivityDay
     */
    protected $Days;

    /**
     * @var AddressLocation
     */
    protected $Location;

    /**
     * @var Picture
     */
    protected $Image;

    /**
     * @var string
     */
    protected $ImageUri;

    /**
     * @var Color
     */
    protected $Color;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return FitnessActivity
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
     * @param  string[optional] $code
     * @return FitnessActivity
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string[optional] $description
     * @return FitnessActivity
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
     * @param  ArrayOfFitnessActivityDay[optional] $days
     * @return FitnessActivity
     */
    public function setDays(ArrayOfFitnessActivityDay $days = null)
    {
        $this->Days = $days;

        return $this;
    }

    /**
     * @return ArrayOfFitnessActivityDay|null
     */
    public function getDays()
    {
        return $this->Days;
    }

    /**
     * @param  AddressLocation[optional] $location
     * @return FitnessActivity
     */
    public function setLocation(AddressLocation $location = null)
    {
        $this->Location = $location;

        return $this;
    }

    /**
     * @return AddressLocation|null
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param  Picture[optional] $image
     * @return FitnessActivity
     */
    public function setImage(Picture $image = null)
    {
        $this->Image = $image;

        return $this;
    }

    /**
     * @return Picture|null
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param  string[optional] $imageUri
     * @return FitnessActivity
     */
    public function setImageUri($imageUri)
    {
        $this->ImageUri = $imageUri;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageUri()
    {
        return $this->ImageUri;
    }

    /**
     * @param  Color[optional] $color
     * @return FitnessActivity
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
}
