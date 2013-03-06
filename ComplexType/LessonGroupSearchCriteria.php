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
     * @var SimpleType\guid|null $WaitingListId
     */
    protected $WaitingListId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IncludeNorms
     */
    protected $IncludeNorms;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IncludeInstructors
     */
    protected $IncludeInstructors;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PersonId
     */
    protected $PersonId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $EmployeeId
     */
    protected $EmployeeId;

    /**
     * @param  PagingCriteria|null       $paging
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
     * @param  SimpleType\guid|null      $waitingListId
     * @return LessonGroupSearchCriteria
     */
    public function setWaitingListId(SimpleType\guid $waitingListId = null)
    {
        $this->WaitingListId = $waitingListId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getWaitingListId()
    {
        return $this->WaitingListId;
    }

    /**
     * @param  boolean|null              $includeNorms
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
     * @param  boolean|null              $includeInstructors
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
     * @param  SimpleType\guid|null      $personId
     * @return LessonGroupSearchCriteria
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  SimpleType\guid|null      $employeeId
     * @return LessonGroupSearchCriteria
     */
    public function setEmployeeId(SimpleType\guid $employeeId = null)
    {
        $this->EmployeeId = $employeeId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getEmployeeId()
    {
        return $this->EmployeeId;
    }

}
