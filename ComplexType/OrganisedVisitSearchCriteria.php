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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $OrganisedVisitId
     */
    protected $OrganisedVisitId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $From
     */
    protected $From;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Until
     */
    protected $Until;

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
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var OrganisedVisitIncludes|null $Includes
     */
    protected $Includes;

    /**
     * @param  SimpleType\guid|null         $organisedVisitId
     * @return OrganisedVisitSearchCriteria
     */
    public function setOrganisedVisitId(SimpleType\guid $organisedVisitId = null)
    {
        $this->OrganisedVisitId = $organisedVisitId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getOrganisedVisitId()
    {
        return $this->OrganisedVisitId;
    }

    /**
     * @param  string|null                  $from
     * @return OrganisedVisitSearchCriteria
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  string|null                  $until
     * @return OrganisedVisitSearchCriteria
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUntil()
    {
        return $this->Until;
    }

    /**
     * @param  SimpleType\guid|null         $personId
     * @return OrganisedVisitSearchCriteria
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
     * @param  PagingCriteria|null          $paging
     * @return OrganisedVisitSearchCriteria
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
     * @param  OrganisedVisitIncludes|null  $includes
     * @return OrganisedVisitSearchCriteria
     */
    public function setIncludes(OrganisedVisitIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return OrganisedVisitIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

}
