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
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var SimpleTypeGuid
     */
    protected $ChildCareCentreId;

    /**
     * @var SimpleTypeGuid
     */
    protected $ChildCareCentrePeriodId;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var ChildCareCentreEntryIncludes
     */
    protected $Includes;

    /**
     * @param  SimpleType\Guid[optional]          $id
     * @return ChildCareCentreEntrySearchCriteria
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
     * @param  SimpleType\Guid[optional]          $personId
     * @return ChildCareCentreEntrySearchCriteria
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  SimpleType\Guid[optional]          $childCareCentreId
     * @return ChildCareCentreEntrySearchCriteria
     */
    public function setChildCareCentreId(SimpleType\Guid $childCareCentreId = null)
    {
        $this->ChildCareCentreId = $childCareCentreId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getChildCareCentreId()
    {
        return $this->ChildCareCentreId;
    }

    /**
     * @param  SimpleType\Guid[optional]          $childCareCentrePeriodId
     * @return ChildCareCentreEntrySearchCriteria
     */
    public function setChildCareCentrePeriodId(SimpleType\Guid $childCareCentrePeriodId = null)
    {
        $this->ChildCareCentrePeriodId = $childCareCentrePeriodId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getChildCareCentrePeriodId()
    {
        return $this->ChildCareCentrePeriodId;
    }

    /**
     * @param  PagingCriteria[optional]           $paging
     * @return ChildCareCentreEntrySearchCriteria
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
     * @param  ChildCareCentreEntryIncludes[optional] $includes
     * @return ChildCareCentreEntrySearchCriteria
     */
    public function setIncludes(ChildCareCentreEntryIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ChildCareCentreEntryIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }
}
