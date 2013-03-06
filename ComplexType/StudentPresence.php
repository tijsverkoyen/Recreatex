<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class StudentPresence extends ComplexTypeAbstract
{
    const CLASS_NAME = 'StudentPresence';

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
     * @var SimpleType\guid|null $AddressId
     */
    protected $AddressId;

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
     * @var string|null $FirstName
     */
    protected $FirstName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $MiddleName
     */
    protected $MiddleName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PresentAccessControl
     */
    protected $PresentAccessControl;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $HasSwimmingComment
     */
    protected $HasSwimmingComment;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Present
     */
    protected $Present;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ReasonId
     */
    protected $ReasonId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $LessonGroupId
     */
    protected $LessonGroupId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Date
     */
    protected $Date;

    /**
     * @param  SimpleType\guid|null $id
     * @return StudentPresence
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
     * @param  SimpleType\guid|null $addressId
     * @return StudentPresence
     */
    public function setAddressId(SimpleType\guid $addressId = null)
    {
        $this->AddressId = $addressId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getAddressId()
    {
        return $this->AddressId;
    }

    /**
     * @param  string|null     $name
     * @return StudentPresence
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
     * @param  string|null     $firstName
     * @return StudentPresence
     */
    public function setFirstName($firstName)
    {
        $this->FirstName = $firstName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param  string|null     $middleName
     * @return StudentPresence
     */
    public function setMiddleName($middleName)
    {
        $this->MiddleName = $middleName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    /**
     * @param  boolean|null    $presentAccessControl
     * @return StudentPresence
     */
    public function setPresentAccessControl($presentAccessControl)
    {
        $this->PresentAccessControl = $presentAccessControl;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPresentAccessControl()
    {
        return $this->PresentAccessControl;
    }

    /**
     * @param  boolean|null    $hasSwimmingComment
     * @return StudentPresence
     */
    public function setHasSwimmingComment($hasSwimmingComment)
    {
        $this->HasSwimmingComment = $hasSwimmingComment;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getHasSwimmingComment()
    {
        return $this->HasSwimmingComment;
    }

    /**
     * @param  boolean|null    $present
     * @return StudentPresence
     */
    public function setPresent($present)
    {
        $this->Present = $present;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPresent()
    {
        return $this->Present;
    }

    /**
     * @param  SimpleType\guid|null $reasonId
     * @return StudentPresence
     */
    public function setReasonId(SimpleType\guid $reasonId = null)
    {
        $this->ReasonId = $reasonId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getReasonId()
    {
        return $this->ReasonId;
    }

    /**
     * @param  SimpleType\guid|null $lessonGroupId
     * @return StudentPresence
     */
    public function setLessonGroupId(SimpleType\guid $lessonGroupId = null)
    {
        $this->LessonGroupId = $lessonGroupId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getLessonGroupId()
    {
        return $this->LessonGroupId;
    }

    /**
     * @param  string|null     $date
     * @return StudentPresence
     */
    public function setDate($date)
    {
        $this->Date = $date;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }

}
