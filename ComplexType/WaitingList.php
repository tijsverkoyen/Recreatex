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
     * @var string|null $ShortName
     */
    protected $ShortName;

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
     * @var string|null $Comment
     */
    protected $Comment;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $WebPriceItemId
     */
    protected $WebPriceItemId;

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
     * @var ArrayOfLessonGroup|null $WaitingListLessonGroups
     */
    protected $WaitingListLessonGroups;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfSwimmingLevel|null $WaitingListSwimmingLevels
     */
    protected $WaitingListSwimmingLevels;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaxStudent
     */
    protected $MaxStudent;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $NumberOfStudents
     */
    protected $NumberOfStudents;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaxDuration
     */
    protected $MaxDuration;

    /**
     * @param  SimpleType\guid|null $id
     * @return WaitingList
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
     * @param  string|null $shortName
     * @return WaitingList
     */
    public function setShortName($shortName)
    {
        $this->ShortName = $shortName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getShortName()
    {
        return $this->ShortName;
    }

    /**
     * @param  string|null $description
     * @return WaitingList
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
     * @param  string|null $comment
     * @return WaitingList
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param  SimpleType\guid|null $webPriceItemId
     * @return WaitingList
     */
    public function setWebPriceItemId(SimpleType\guid $webPriceItemId = null)
    {
        $this->WebPriceItemId = $webPriceItemId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getWebPriceItemId()
    {
        return $this->WebPriceItemId;
    }

    /**
     * @param  float|null  $price
     * @return WaitingList
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
     * @param  ArrayOfLessonGroup|null $waitingListLessonGroups
     * @return WaitingList
     */
    public function setWaitingListLessonGroups(ArrayOfLessonGroup $waitingListLessonGroups = null)
    {
        $this->WaitingListLessonGroups = $waitingListLessonGroups;

        return $this;
    }

    /**
     * @return ArrayOfLessonGroup|null
     */
    public function getWaitingListLessonGroups()
    {
        return $this->WaitingListLessonGroups;
    }

    /**
     * @param  ArrayOfSwimmingLevel|null $waitingListSwimmingLevels
     * @return WaitingList
     */
    public function setWaitingListSwimmingLevels(ArrayOfSwimmingLevel $waitingListSwimmingLevels = null)
    {
        $this->WaitingListSwimmingLevels = $waitingListSwimmingLevels;

        return $this;
    }

    /**
     * @return ArrayOfSwimmingLevel|null
     */
    public function getWaitingListSwimmingLevels()
    {
        return $this->WaitingListSwimmingLevels;
    }

    /**
     * @param  integer|null $maxStudent
     * @return WaitingList
     */
    public function setMaxStudent($maxStudent)
    {
        $this->MaxStudent = $maxStudent;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaxStudent()
    {
        return $this->MaxStudent;
    }

    /**
     * @param  integer|null $numberOfStudents
     * @return WaitingList
     */
    public function setNumberOfStudents($numberOfStudents)
    {
        $this->NumberOfStudents = $numberOfStudents;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumberOfStudents()
    {
        return $this->NumberOfStudents;
    }

    /**
     * @param  integer|null $maxDuration
     * @return WaitingList
     */
    public function setMaxDuration($maxDuration)
    {
        $this->MaxDuration = $maxDuration;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaxDuration()
    {
        return $this->MaxDuration;
    }

}
