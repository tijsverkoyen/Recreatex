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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $CountryId
     */
    protected $CountryId;

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
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**
     * @param  SimpleType\guid|null $countryId
     * @return FindCountiesCriteria
     */
    public function setCountryId(SimpleType\guid $countryId = null)
    {
        $this->CountryId = $countryId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCountryId()
    {
        return $this->CountryId;
    }

    /**
     * @param  SimpleType\guid|null $id
     * @return FindCountiesCriteria
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
     * @param  PagingCriteria|null  $paging
     * @return FindCountiesCriteria
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
