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
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $AddressId;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var string
     */
    protected $FirstName;

    /**
     * @var string
     */
    protected $MiddleName;

    /**
     * @var boolean
     */
    protected $PresentAccessControl;

    /**
     * @var boolean
     */
    protected $HasSwimmingComment;

    /**
     * @var boolean
     */
    protected $Present;

    /**
     * @var SimpleTypeGuid
     */
    protected $ReasonId;

    /**
     * @var SimpleTypeGuid
     */
    protected $LessonGroupId;

    /**
     * @var string
     */
    protected $Date;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return StudentPresence
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
     * @param  SimpleType\Guid[optional] $addressId
     * @return StudentPresence
     */
    public function setAddressId(SimpleType\Guid $addressId = null)
    {
        $this->AddressId = $addressId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getAddressId()
    {
        return $this->AddressId;
    }

    /**
     * @param  string[optional] $name
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
     * @param  string[optional] $firstName
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
     * @param  string[optional] $middleName
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
     * @param  boolean[optional] $presentAccessControl
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
     * @param  boolean[optional] $hasSwimmingComment
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
     * @param  boolean[optional] $present
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
     * @param  SimpleType\Guid[optional] $reasonId
     * @return StudentPresence
     */
    public function setReasonId(SimpleType\Guid $reasonId = null)
    {
        $this->ReasonId = $reasonId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getReasonId()
    {
        return $this->ReasonId;
    }

    /**
     * @param  SimpleType\Guid[optional] $lessonGroupId
     * @return StudentPresence
     */
    public function setLessonGroupId(SimpleType\Guid $lessonGroupId = null)
    {
        $this->LessonGroupId = $lessonGroupId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getLessonGroupId()
    {
        return $this->LessonGroupId;
    }

    /**
     * @param  string[optional] $date
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
