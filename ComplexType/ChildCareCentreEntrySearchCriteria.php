<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ChildCareCentreEntrySearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ChildCareCentreEntrySearchCriteria';

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
     * @var SimpleType\guid|null $PersonId
     */
    protected $PersonId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ChildCareCentreId
     */
    protected $ChildCareCentreId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ChildCareCentrePeriodId
     */
    protected $ChildCareCentrePeriodId;

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
     * @var ChildCareCentreEntryIncludes|null $Includes
     */
    protected $Includes;

    /**
     * @param  SimpleType\guid|null               $id
     * @return ChildCareCentreEntrySearchCriteria
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
     * @param  SimpleType\guid|null               $personId
     * @return ChildCareCentreEntrySearchCriteria
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
     * @param  SimpleType\guid|null               $childCareCentreId
     * @return ChildCareCentreEntrySearchCriteria
     */
    public function setChildCareCentreId(SimpleType\guid $childCareCentreId = null)
    {
        $this->ChildCareCentreId = $childCareCentreId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getChildCareCentreId()
    {
        return $this->ChildCareCentreId;
    }

    /**
     * @param  SimpleType\guid|null               $childCareCentrePeriodId
     * @return ChildCareCentreEntrySearchCriteria
     */
    public function setChildCareCentrePeriodId(SimpleType\guid $childCareCentrePeriodId = null)
    {
        $this->ChildCareCentrePeriodId = $childCareCentrePeriodId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getChildCareCentrePeriodId()
    {
        return $this->ChildCareCentrePeriodId;
    }

    /**
     * @param  PagingCriteria|null                $paging
     * @return ChildCareCentreEntrySearchCriteria
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
     * @param  ChildCareCentreEntryIncludes|null  $includes
     * @return ChildCareCentreEntrySearchCriteria
     */
    public function setIncludes(ChildCareCentreEntryIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ChildCareCentreEntryIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

}
