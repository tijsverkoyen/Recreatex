<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class WaitingList extends ComplexTypeAbstract
{
    const CLASS_NAME = 'WaitingList';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $ShortName;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var string
     */
    protected $Comment;

    /**
     * @var SimpleTypeGuid
     */
    protected $WebPriceItemId;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @var ArrayOfLessonGroup
     */
    protected $WaitingListLessonGroups;

    /**
     * @var ArrayOfSwimmingLevel
     */
    protected $WaitingListSwimmingLevels;

    /**
     * @var integer
     */
    protected $MaxStudent;

    /**
     * @var integer
     */
    protected $NumberOfStudents;

    /**
     * @var integer
     */
    protected $MaxDuration;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return WaitingList
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
     * @param  string[optional] $shortName
     * @return WaitingList
     */
    public function setShortName($shortName)
    {
        $this->ShortName = $shortName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->ShortName;
    }

    /**
     * @param  string[optional] $description
     * @return WaitingList
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
     * @param  string[optional] $comment
     * @return WaitingList
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param  SimpleType\Guid[optional] $webPriceItemId
     * @return WaitingList
     */
    public function setWebPriceItemId(SimpleType\Guid $webPriceItemId = null)
    {
        $this->WebPriceItemId = $webPriceItemId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getWebPriceItemId()
    {
        return $this->WebPriceItemId;
    }

    /**
     * @param  float[optional] $price
     * @return WaitingList
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
     * @param  ArrayOfLessonGroup[optional] $waitingListLessonGroups
     * @return WaitingList
     */
    public function setWaitingListLessonGroups(ArrayOfLessonGroup $waitingListLessonGroups = null)
    {
        $this->WaitingListLessonGroups = $waitingListLessonGroups;

        return $this;
    }

    /**
     * @return ArrayOfLessonGroup
     */
    public function getWaitingListLessonGroups()
    {
        return $this->WaitingListLessonGroups;
    }

    /**
     * @param  ArrayOfSwimmingLevel[optional] $waitingListSwimmingLevels
     * @return WaitingList
     */
    public function setWaitingListSwimmingLevels(ArrayOfSwimmingLevel $waitingListSwimmingLevels = null)
    {
        $this->WaitingListSwimmingLevels = $waitingListSwimmingLevels;

        return $this;
    }

    /**
     * @return ArrayOfSwimmingLevel
     */
    public function getWaitingListSwimmingLevels()
    {
        return $this->WaitingListSwimmingLevels;
    }

    /**
     * @param  integer[optional] $maxStudent
     * @return WaitingList
     */
    public function setMaxStudent($maxStudent)
    {
        $this->MaxStudent = $maxStudent;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaxStudent()
    {
        return $this->MaxStudent;
    }

    /**
     * @param  integer[optional] $numberOfStudents
     * @return WaitingList
     */
    public function setNumberOfStudents($numberOfStudents)
    {
        $this->NumberOfStudents = $numberOfStudents;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberOfStudents()
    {
        return $this->NumberOfStudents;
    }

    /**
     * @param  integer[optional] $maxDuration
     * @return WaitingList
     */
    public function setMaxDuration($maxDuration)
    {
        $this->MaxDuration = $maxDuration;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaxDuration()
    {
        return $this->MaxDuration;
    }
}
