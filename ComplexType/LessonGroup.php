<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class LessonGroup extends ComplexTypeAbstract
{
    const CLASS_NAME = 'LessonGroup';

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

     * @var string
     */
    protected $FullName;

    /**

     * @var integer
     */
    protected $Priority;

    /**

     * @var SimpleTypeGuid
     */
    protected $DivisionId;

    /**

     * @var integer
     */
    protected $DefaultNumberOfLessons;

    /**

     * @var string
     */
    protected $FromDate;

    /**

     * @var string
     */
    protected $ToDate;

    /**

     * @var ArrayOfNorm
     */
    protected $LessonGroupNorms;

    /**

     * @var string
     */
    protected $EntryDate;

    /**

     * @var boolean
     */
    protected $StillInLessonGroup;

    /**

     * @var ArrayOfEmployee
     */
    protected $LessonGroupInstructors;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return LessonGroup
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
     * @return LessonGroup
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
     * @return LessonGroup
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
     * @return LessonGroup
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
     * @param  string[optional] $fullName
     * @return LessonGroup
     */
    public function setFullName($fullName)
    {
        $this->FullName = $fullName;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->FullName;
    }

    /**
     * @param  integer[optional] $priority
     * @return LessonGroup
     */
    public function setPriority($priority)
    {
        $this->Priority = $priority;

        return $this;
    }

    /**
     * @return integer
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * @param  SimpleType\Guid[optional] $divisionId
     * @return LessonGroup
     */
    public function setDivisionId(SimpleType\Guid $divisionId = null)
    {
        $this->DivisionId = $divisionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getDivisionId()
    {
        return $this->DivisionId;
    }

    /**
     * @param  integer[optional] $defaultNumberOfLessons
     * @return LessonGroup
     */
    public function setDefaultNumberOfLessons($defaultNumberOfLessons)
    {
        $this->DefaultNumberOfLessons = $defaultNumberOfLessons;

        return $this;
    }

    /**
     * @return integer
     */
    public function getDefaultNumberOfLessons()
    {
        return $this->DefaultNumberOfLessons;
    }

    /**
     * @param  string[optional] $fromDate
     * @return LessonGroup
     */
    public function setFromDate($fromDate)
    {
        $this->FromDate = $fromDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getFromDate()
    {
        return $this->FromDate;
    }

    /**
     * @param  string[optional] $toDate
     * @return LessonGroup
     */
    public function setToDate($toDate)
    {
        $this->ToDate = $toDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getToDate()
    {
        return $this->ToDate;
    }

    /**
     * @param  ArrayOfNorm[optional] $lessonGroupNorms
     * @return LessonGroup
     */
    public function setLessonGroupNorms(ArrayOfNorm $lessonGroupNorms = null)
    {
        $this->LessonGroupNorms = $lessonGroupNorms;

        return $this;
    }

    /**
     * @return ArrayOfNorm
     */
    public function getLessonGroupNorms()
    {
        return $this->LessonGroupNorms;
    }

    /**
     * @param  string[optional] $entryDate
     * @return LessonGroup
     */
    public function setEntryDate($entryDate)
    {
        $this->EntryDate = $entryDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntryDate()
    {
        return $this->EntryDate;
    }

    /**
     * @param  boolean[optional] $stillInLessonGroup
     * @return LessonGroup
     */
    public function setStillInLessonGroup($stillInLessonGroup)
    {
        $this->StillInLessonGroup = $stillInLessonGroup;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getStillInLessonGroup()
    {
        return $this->StillInLessonGroup;
    }

    /**
     * @param  ArrayOfEmployee[optional] $lessonGroupInstructors
     * @return LessonGroup
     */
    public function setLessonGroupInstructors(ArrayOfEmployee $lessonGroupInstructors = null)
    {
        $this->LessonGroupInstructors = $lessonGroupInstructors;

        return $this;
    }

    /**
     * @return ArrayOfEmployee
     */
    public function getLessonGroupInstructors()
    {
        return $this->LessonGroupInstructors;
    }
}
