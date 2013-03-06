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
     * @var SimpleTypeGuid
     */
    protected $InfrastructureId;

    /**
     * The ID of a specific address that you want to find the infrastructure for.
     * @var SimpleTypeGuid
     */
    protected $AddressId;

    /**
     * The ID of a specific division that you want to find the infrastructure for.
     * @var SimpleTypeGuid
     */
    protected $DivisionId;

    /**
     * Part of the name of the infrastructure to find. Use an asteriks (*) as the wildcard.     * @var string
     */
    protected $NamePattern;

    /**
     * @var InfrastructureIncludes
     */
    protected $Includes;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @param  SimpleType\Guid[optional]    $infrastructureId
     * @return InfrastructureSearchCriteria
     */
    public function setInfrastructureId(SimpleType\Guid $infrastructureId = null)
    {
        $this->InfrastructureId = $infrastructureId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getInfrastructureId()
    {
        return $this->InfrastructureId;
    }

    /**
     * @param  SimpleType\Guid[optional]    $addressId
     * @return InfrastructureSearchCriteria
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
     * @param  SimpleType\Guid[optional]    $divisionId
     * @return InfrastructureSearchCriteria
     */
    public function setDivisionId(SimpleType\Guid $divisionId = null)
    {
        $this->DivisionId = $divisionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getDivisionId()
    {
        return $this->DivisionId;
    }

    /**
     * @param  string[optional]             $namePattern
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
     * @param  InfrastructureIncludes[optional] $includes
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
     * @param  PagingCriteria[optional]     $paging
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
