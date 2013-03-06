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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var AgeCategory|null $AgeCategory
     */
    protected $AgeCategory;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ClosingDate
     */
    protected $ClosingDate;

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
     * @var string|null $Comments
     */
    protected $Comments;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfActivityPart|null $Days
     */
    protected $Days;

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
     * @var integer|null $FreePlaces
     */
    protected $FreePlaces;

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
     * @var string|null $ImageUrl
     */
    protected $ImageUrl;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Address|null $Location
     */
    protected $Location;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfActivityOption|null $Options
     */
    protected $Options;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Period|null $Period
     */
    protected $Period;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Price
     */
    protected $Price;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ActivityType|null $Type
     */
    protected $Type;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $EntryMethod
     */
    protected $EntryMethod;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $TotalPlaces
     */
    protected $TotalPlaces;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Agreements
     */
    protected $Agreements;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Utilities
     */
    protected $Utilities;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $WebSalesStart
     */
    protected $WebSalesStart;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $WebSalesStop
     */
    protected $WebSalesStop;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Picture|null $Image
     */
    protected $Image;

    /**
     * @param  AgeCategory|null $ageCategory
     * @return Activity
     */
    public function setAgeCategory(AgeCategory $ageCategory = null)
    {
        $this->AgeCategory = $ageCategory;

        return $this;
    }

    /**
     * @return AgeCategory|null
     */
    public function getAgeCategory()
    {
        return $this->AgeCategory;
    }

    /**
     * @param  string|null $closingDate
     * @return Activity
     */
    public function setClosingDate($closingDate)
    {
        $this->ClosingDate = $closingDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getClosingDate()
    {
        return $this->ClosingDate;
    }

    /**
     * @param  string|null $code
     * @return Activity
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
     * @param  string|null $comments
     * @return Activity
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param  ArrayOfActivityPart|null $days
     * @return Activity
     */
    public function setDays(ArrayOfActivityPart $days = null)
    {
        $this->Days = $days;

        return $this;
    }

    /**
     * @return ArrayOfActivityPart|null
     */
    public function getDays()
    {
        return $this->Days;
    }

    /**
     * @param  string|null $description
     * @return Activity
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
     * @param  integer|null $freePlaces
     * @return Activity
     */
    public function setFreePlaces($freePlaces)
    {
        $this->FreePlaces = $freePlaces;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getFreePlaces()
    {
        return $this->FreePlaces;
    }

    /**
     * @param  SimpleType\guid|null $id
     * @return Activity
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
     * @param  string|null $imageUrl
     * @return Activity
     */
    public function setImageUrl($imageUrl)
    {
        $this->ImageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->ImageUrl;
    }

    /**
     * @param  Address|null $location
     * @return Activity
     */
    public function setLocation(Address $location = null)
    {
        $this->Location = $location;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param  string|null $name
     * @return Activity
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
     * @param  ArrayOfActivityOption|null $options
     * @return Activity
     */
    public function setOptions(ArrayOfActivityOption $options = null)
    {
        $this->Options = $options;

        return $this;
    }

    /**
     * @return ArrayOfActivityOption|null
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param  Period|null $period
     * @return Activity
     */
    public function setPeriod(Period $period = null)
    {
        $this->Period = $period;

        return $this;
    }

    /**
     * @return Period|null
     */
    public function getPeriod()
    {
        return $this->Period;
    }

    /**
     * @param  float|null $price
     * @return Activity
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param  ActivityType|null $type
     * @return Activity
     */
    public function setType(ActivityType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return ActivityType|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param  boolean|null $entryMethod
     * @return Activity
     */
    public function setEntryMethod($entryMethod)
    {
        $this->EntryMethod = $entryMethod;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getEntryMethod()
    {
        return $this->EntryMethod;
    }

    /**
     * @param  integer|null $totalPlaces
     * @return Activity
     */
    public function setTotalPlaces($totalPlaces)
    {
        $this->TotalPlaces = $totalPlaces;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getTotalPlaces()
    {
        return $this->TotalPlaces;
    }

    /**
     * @param  string|null $agreements
     * @return Activity
     */
    public function setAgreements($agreements)
    {
        $this->Agreements = $agreements;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAgreements()
    {
        return $this->Agreements;
    }

    /**
     * @param  string|null $utilities
     * @return Activity
     */
    public function setUtilities($utilities)
    {
        $this->Utilities = $utilities;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUtilities()
    {
        return $this->Utilities;
    }

    /**
     * @param  string|null $webSalesStart
     * @return Activity
     */
    public function setWebSalesStart($webSalesStart)
    {
        $this->WebSalesStart = $webSalesStart;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWebSalesStart()
    {
        return $this->WebSalesStart;
    }

    /**
     * @param  string|null $webSalesStop
     * @return Activity
     */
    public function setWebSalesStop($webSalesStop)
    {
        $this->WebSalesStop = $webSalesStop;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWebSalesStop()
    {
        return $this->WebSalesStop;
    }

    /**
     * @param  Picture|null $image
     * @return Activity
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

}
