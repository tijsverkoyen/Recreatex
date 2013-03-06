<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class EmployeeSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'EmployeeSearchCriteria';

    /**

     * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * @var string
     */
    protected $UserName;

    /**

     * @var string
     */
    protected $Email;

    /**

     * @var boolean
     */
    protected $IsBlocked;

    /**

     * @var PagingCriteria
     */
    protected $Paging;

    /**

     * @var EmployeeIncludes
     */
    protected $Includes;

    /**

     * @var SimpleTypeGuid
     */
    protected $LessonGroupId;

    /**
     * @param  SimpleType\guid[optional] $id
     * @return EmployeeSearchCriteria
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string[optional]       $userName
     * @return EmployeeSearchCriteria
     */
    public function setUserName($userName)
    {
        $this->UserName = $userName;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param  string[optional]       $email
     * @return EmployeeSearchCriteria
     */
    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param  boolean[optional]      $isBlocked
     * @return EmployeeSearchCriteria
     */
    public function setIsBlocked($isBlocked)
    {
        $this->IsBlocked = $isBlocked;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBlocked()
    {
        return $this->IsBlocked;
    }

    /**
     * @param  PagingCriteria[optional] $paging
     * @return EmployeeSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param  EmployeeIncludes[optional] $includes
     * @return EmployeeSearchCriteria
     */
    public function setIncludes(EmployeeIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return EmployeeIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  SimpleType\guid[optional] $lessonGroupId
     * @return EmployeeSearchCriteria
     */
    public function setLessonGroupId(SimpleType\guid $lessonGroupId = null)
    {
        $this->LessonGroupId = $lessonGroupId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getLessonGroupId()
    {
        return $this->LessonGroupId;
    }
}
