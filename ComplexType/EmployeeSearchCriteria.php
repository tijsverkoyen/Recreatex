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
     * @var string|null $UserName
     */
    protected $UserName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Email
     */
    protected $Email;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsBlocked
     */
    protected $IsBlocked;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var EmployeeIncludes|null $Includes
     */
    protected $Includes;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $LessonGroupId
     */
    protected $LessonGroupId;

    /**
     * @param  SimpleType\guid|null   $id
     * @return EmployeeSearchCriteria
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
     * @param  string|null            $userName
     * @return EmployeeSearchCriteria
     */
    public function setUserName($userName)
    {
        $this->UserName = $userName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param  string|null            $email
     * @return EmployeeSearchCriteria
     */
    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param  boolean|null           $isBlocked
     * @return EmployeeSearchCriteria
     */
    public function setIsBlocked($isBlocked)
    {
        $this->IsBlocked = $isBlocked;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsBlocked()
    {
        return $this->IsBlocked;
    }

    /**
     * @param  PagingCriteria|null    $paging
     * @return EmployeeSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria|null
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param  EmployeeIncludes|null  $includes
     * @return EmployeeSearchCriteria
     */
    public function setIncludes(EmployeeIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return EmployeeIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  SimpleType\guid|null   $lessonGroupId
     * @return EmployeeSearchCriteria
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

}
