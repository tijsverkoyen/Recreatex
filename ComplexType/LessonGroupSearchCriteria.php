<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class LessonGroupSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'LessonGroupSearchCriteria';

    /**

     * @var PagingCriteria
     */
    protected $Paging;

    /**

     * @var SimpleTypeGuid
     */
    protected $WaitingListId;

    /**

     * @var boolean
     */
    protected $IncludeNorms;

    /**

     * @var boolean
     */
    protected $IncludeInstructors;

    /**

     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**

     * @var SimpleTypeGuid
     */
    protected $EmployeeId;

    /**
     * @param  PagingCriteria[optional]  $paging
     * @return LessonGroupSearchCriteria
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
     * @param  SimpleType\Guid[optional] $waitingListId
     * @return LessonGroupSearchCriteria
     */
    public function setWaitingListId(SimpleType\Guid $waitingListId = null)
    {
        $this->WaitingListId = $waitingListId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getWaitingListId()
    {
        return $this->WaitingListId;
    }

    /**
     * @param  boolean[optional]         $includeNorms
     * @return LessonGroupSearchCriteria
     */
    public function setIncludeNorms($includeNorms)
    {
        $this->IncludeNorms = $includeNorms;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIncludeNorms()
    {
        return $this->IncludeNorms;
    }

    /**
     * @param  boolean[optional]         $includeInstructors
     * @return LessonGroupSearchCriteria
     */
    public function setIncludeInstructors($includeInstructors)
    {
        $this->IncludeInstructors = $includeInstructors;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIncludeInstructors()
    {
        return $this->IncludeInstructors;
    }

    /**
     * @param  SimpleType\Guid[optional] $personId
     * @return LessonGroupSearchCriteria
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  SimpleType\Guid[optional] $employeeId
     * @return LessonGroupSearchCriteria
     */
    public function setEmployeeId(SimpleType\Guid $employeeId = null)
    {
        $this->EmployeeId = $employeeId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getEmployeeId()
    {
        return $this->EmployeeId;
    }
}
