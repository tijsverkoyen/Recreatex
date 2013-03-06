<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FindCountiesCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FindCountiesCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $CountryId;

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @param  SimpleType\Guid[optional] $countryId
     * @return FindCountiesCriteria
     */
    public function setCountryId(SimpleType\Guid $countryId = null)
    {
        $this->CountryId = $countryId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCountryId()
    {
        return $this->CountryId;
    }

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return FindCountiesCriteria
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
     * @param  PagingCriteria[optional] $paging
     * @return FindCountiesCriteria
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
}
