<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Activity extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Activity';

    /**
     * @var AgeCategory
     */
    protected $AgeCategory;

    /**
     * @var string
     */
    protected $ClosingDate;

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var string
     */
    protected $Comments;

    /**
     * @var ArrayOfActivityPart
     */
    protected $Days;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var integer
     */
    protected $FreePlaces;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $ImageUrl;

    /**
     * @var Address
     */
    protected $Location;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var ArrayOfActivityOption
     */
    protected $Options;

    /**
     * @var Period
     */
    protected $Period;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @var ActivityType
     */
    protected $Type;

    /**
     * @param  AgeCategory[optional] $ageCategory
     * @return Activity
     */
    public function setAgeCategory(AgeCategory $ageCategory = null)
    {
        $this->AgeCategory = $ageCategory;

        return $this;
    }

    /**
     *  AgeCategory[optional]
     */
    public function getAgeCategory()
    {
        return $this->AgeCategory;
    }

    /**
     * @param  string[optional] $closingDate
     * @return Activity
     */
    public function setClosingDate($closingDate)
    {
        $this->ClosingDate = $closingDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getClosingDate()
    {
        return $this->ClosingDate;
    }

    /**
     * @param  string[optional] $code
     * @return Activity
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string[optional] $comments
     * @return Activity
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param  ArrayOfActivityPart[optional] $days
     * @return Activity
     */
    public function setDays(ArrayOfActivityPart $days = null)
    {
        $this->Days = $days;

        return $this;
    }

    /**
     * @return ArrayOfActivityPart
     */
    public function getDays()
    {
        return $this->Days;
    }

    /**
     * @param  string[optional] $description
     * @return Activity
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
     * @param  integer[optional] $freePlaces
     * @return Activity
     */
    public function setFreePlaces($freePlaces)
    {
        $this->FreePlaces = $freePlaces;

        return $this;
    }

    /**
     * @return integer
     */
    public function getFreePlaces()
    {
        return $this->FreePlaces;
    }

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return Activity
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
     * @param  string[optional] $imageUrl
     * @return Activity
     */
    public function setImageUrl($imageUrl)
    {
        $this->ImageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->ImageUrl;
    }

    /**
     * @param  Address[optional] $location
     * @return Activity
     */
    public function setLocation(Address $location = null)
    {
        $this->Location = $location;

        return $this;
    }

    /**
     * @return Address
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param  string[optional] $name
     * @return Activity
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
     * @param  ArrayOfActivityOption[optional] $options
     * @return Activity
     */
    public function setOptions(ArrayOfActivityOption $options = null)
    {
        $this->Options = $options;

        return $this;
    }

    /**
     * @return ArrayOfActivityOption
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param  Period[optional] $period
     * @return Activity
     */
    public function setPeriod(Period $period = null)
    {
        $this->Period = $period;

        return $this;
    }

    /**
     * @return Period
     */
    public function getPeriod()
    {
        return $this->Period;
    }

    /**
     * @param  float[optional] $price
     * @return Activity
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param  ActivityType[optional] $type
     * @return Activity
     */
    public function setType(ActivityType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return ActivityType
     */
    public function getType()
    {
        return $this->Type;
    }
}
