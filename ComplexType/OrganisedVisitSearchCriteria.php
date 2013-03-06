<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class OrganisedVisitSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'OrganisedVisitSearchCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $OrganisedVisitId;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var string
     */
    protected $Until;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var OrganisedVisitIncludes
     */
    protected $Includes;

    /**
     * @param  SimpleType\guid[optional]    $organisedVisitId
     * @return OrganisedVisitSearchCriteria
     */
    public function setOrganisedVisitId(SimpleType\guid $organisedVisitId = null)
    {
        $this->OrganisedVisitId = $organisedVisitId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getOrganisedVisitId()
    {
        return $this->OrganisedVisitId;
    }

    /**
     * @param  string[optional]             $from
     * @return OrganisedVisitSearchCriteria
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  string[optional]             $until
     * @return OrganisedVisitSearchCriteria
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string
     */
    public function getUntil()
    {
        return $this->Until;
    }

    /**
     * @param  SimpleType\guid[optional]    $personId
     * @return OrganisedVisitSearchCriteria
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  PagingCriteria[optional]     $paging
     * @return OrganisedVisitSearchCriteria
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
     * @param  OrganisedVisitIncludes[optional] $includes
     * @return OrganisedVisitSearchCriteria
     */
    public function setIncludes(OrganisedVisitIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return OrganisedVisitIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }
}
