<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * The search criteria that will be applied to the search query
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExpositionTypeSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpositionTypeSearchCriteria';

    /**
     * Only include exposition types for this target audience
     * @var SimpleType\Guid
     */
    protected $AudienceId;

    /**
     * The ID of a specific exposition type that you want to find
     * @var SimpleType\Guid
     */
    protected $ExpositionTypeId;

    /**
     * Part of the name of the exposition type to find. Use an asteriks (*) as the wildcard.
     * @var string
     */
    protected $NamePattern;

    /**
     * @var ExpositionTypeIncludes
     */
    protected $Includes;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @param  SimpleType\Guid|null         $audienceId
     * @return ExpositionTypeSearchCriteria
     */
    public function setAudienceId(SimpleType\Guid $audienceId = null)
    {
        $this->AudienceId = $audienceId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getAudienceId()
    {
        return $this->AudienceId;
    }

    /**
     * @param  SimpleType\Guid|null         $expositionTypeId
     * @return ExpositionTypeSearchCriteria
     */
    public function setExpositionTypeId(SimpleType\Guid $expositionTypeId = null)
    {
        $this->ExpositionTypeId = $expositionTypeId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getExpositionTypeId()
    {
        return $this->ExpositionTypeId;
    }

    /**
     * @param  string|null                  $namePattern
     * @return ExpositionTypeSearchCriteria
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
     * @param  ExpositionTypeIncludes|null  $includes
     * @return ExpositionTypeSearchCriteria
     */
    public function setIncludes(ExpositionTypeIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ExpositionTypeIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria|null          $paging
     * @return ExpositionTypeSearchCriteria
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
