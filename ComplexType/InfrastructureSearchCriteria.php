<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * The search criteria that will be applied to the search query
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class InfrastructureSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'InfrastructureSearchCriteria';

    /**
     * The ID of a specific infrastructure that you want to find
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $InfrastructureId
     */
    protected $InfrastructureId;

    /**
     * The ID of a specific address that you want to find the infrastructure for.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $AddressId
     */
    protected $AddressId;

    /**
     * The ID of a specific division that you want to find the infrastructure for.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $DivisionId
     */
    protected $DivisionId;

    /**
     * Part of the name of the infrastructure to find. Use an asteriks (*) as the wildcard.
     *
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $NamePattern
     */
    protected $NamePattern;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var InfrastructureIncludes|null $Includes
     */
    protected $Includes;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**
     * @param  SimpleType\guid|null         $infrastructureId
     * @return InfrastructureSearchCriteria
     */
    public function setInfrastructureId(SimpleType\guid $infrastructureId = null)
    {
        $this->InfrastructureId = $infrastructureId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getInfrastructureId()
    {
        return $this->InfrastructureId;
    }

    /**
     * @param  SimpleType\guid|null         $addressId
     * @return InfrastructureSearchCriteria
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
     * @param  SimpleType\guid|null         $divisionId
     * @return InfrastructureSearchCriteria
     */
    public function setDivisionId(SimpleType\guid $divisionId = null)
    {
        $this->DivisionId = $divisionId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getDivisionId()
    {
        return $this->DivisionId;
    }

    /**
     * @param  string|null                  $namePattern
     * @return InfrastructureSearchCriteria
     */
    public function setNamePattern($namePattern)
    {
        $this->NamePattern = $namePattern;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNamePattern()
    {
        return $this->NamePattern;
    }

    /**
     * @param  InfrastructureIncludes|null  $includes
     * @return InfrastructureSearchCriteria
     */
    public function setIncludes(InfrastructureIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return InfrastructureIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria|null          $paging
     * @return InfrastructureSearchCriteria
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

}
