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
     * @var string|null $FullName
     */
    protected $FullName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Priority
     */
    protected $Priority;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $DivisionId
     */
    protected $DivisionId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $DefaultNumberOfLessons
     */
    protected $DefaultNumberOfLessons;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FromDate
     */
    protected $FromDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ToDate
     */
    protected $ToDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfNorm|null $LessonGroupNorms
     */
    protected $LessonGroupNorms;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EntryDate
     */
    protected $EntryDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $StillInLessonGroup
     */
    protected $StillInLessonGroup;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfEmployee|null $LessonGroupInstructors
     */
    protected $LessonGroupInstructors;

    /**
     * @param  SimpleType\guid|null $id
     * @return LessonGroup
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
     * @return LessonGroup
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
     * @return LessonGroup
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
     * @return LessonGroup
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
     * @param  string|null $fullName
     * @return LessonGroup
     */
    public function setFullName($fullName)
    {
        $this->FullName = $fullName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFullName()
    {
        return $this->FullName;
    }

    /**
     * @param  integer|null $priority
     * @return LessonGroup
     */
    public function setPriority($priority)
    {
        $this->Priority = $priority;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * @param  SimpleType\guid|null $divisionId
     * @return LessonGroup
     */
    public function setDivisionId(SimpleType\guid $divisionId = null)
    {
        $this->DivisionId = $divisionId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getDivisionId()
    {
        return $this->DivisionId;
    }

    /**
     * @param  integer|null $defaultNumberOfLessons
     * @return LessonGroup
     */
    public function setDefaultNumberOfLessons($defaultNumberOfLessons)
    {
        $this->DefaultNumberOfLessons = $defaultNumberOfLessons;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getDefaultNumberOfLessons()
    {
        return $this->DefaultNumberOfLessons;
    }

    /**
     * @param  string|null $fromDate
     * @return LessonGroup
     */
    public function setFromDate($fromDate)
    {
        $this->FromDate = $fromDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromDate()
    {
        return $this->FromDate;
    }

    /**
     * @param  string|null $toDate
     * @return LessonGroup
     */
    public function setToDate($toDate)
    {
        $this->ToDate = $toDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getToDate()
    {
        return $this->ToDate;
    }

    /**
     * @param  ArrayOfNorm|null $lessonGroupNorms
     * @return LessonGroup
     */
    public function setLessonGroupNorms(ArrayOfNorm $lessonGroupNorms = null)
    {
        $this->LessonGroupNorms = $lessonGroupNorms;

        return $this;
    }

    /**
     * @return ArrayOfNorm|null
     */
    public function getLessonGroupNorms()
    {
        return $this->LessonGroupNorms;
    }

    /**
     * @param  string|null $entryDate
     * @return LessonGroup
     */
    public function setEntryDate($entryDate)
    {
        $this->EntryDate = $entryDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntryDate()
    {
        return $this->EntryDate;
    }

    /**
     * @param  boolean|null $stillInLessonGroup
     * @return LessonGroup
     */
    public function setStillInLessonGroup($stillInLessonGroup)
    {
        $this->StillInLessonGroup = $stillInLessonGroup;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getStillInLessonGroup()
    {
        return $this->StillInLessonGroup;
    }

    /**
     * @param  ArrayOfEmployee|null $lessonGroupInstructors
     * @return LessonGroup
     */
    public function setLessonGroupInstructors(ArrayOfEmployee $lessonGroupInstructors = null)
    {
        $this->LessonGroupInstructors = $lessonGroupInstructors;

        return $this;
    }

    /**
     * @return ArrayOfEmployee|null
     */
    public function getLessonGroupInstructors()
    {
        return $this->LessonGroupInstructors;
    }

}
