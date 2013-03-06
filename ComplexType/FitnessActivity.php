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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Code
     */
    protected $Code;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfFitnessActivityDay|null $Days
     */
    protected $Days;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var AddressLocation|null $Location
     */
    protected $Location;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Picture|null $Image
     */
    protected $Image;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ImageUri
     */
    protected $ImageUri;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Color|null $Color
     */
    protected $Color;

    /**
     * @param  SimpleType\guid|null $id
     * @return FitnessActivity
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
     * @param  string|null     $code
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
     * @param  string|null     $description
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
     * @param  ArrayOfFitnessActivityDay|null $days
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
     * @param  AddressLocation|null $location
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
     * @param  Picture|null    $image
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
     * @param  string|null     $imageUri
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
     * @param  Color|null      $color
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
