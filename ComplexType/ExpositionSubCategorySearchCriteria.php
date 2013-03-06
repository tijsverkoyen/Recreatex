<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * The search criteria that will be applied to the search query
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExpositionSubCategorySearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpositionSubCategorySearchCriteria';

    /**
     * The ID of a specific exposition category that you want to find
     * @var SimpleTypeGuid
     */
    protected $ExpositionSubCategoryId;

    /**
     * Part of the name of the exposition categories to find. Use an percent sign (%) as the
     * wildcard.
     * @var string
     */
    protected $NamePattern;

    /**
     * Only include subcategories for this target Main category
     * @var SimpleTypeGuid
     */
    protected $ExpositionCategoryId;

    /**
     * @var ExpositionSubCategoryIncludes
     */
    protected $Includes;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @param  SimpleType\Guid[optional]           $expositionSubCategoryId
     * @return ExpositionSubCategorySearchCriteria
     */
    public function setExpositionSubCategoryId(SimpleType\Guid $expositionSubCategoryId = null)
    {
        $this->ExpositionSubCategoryId = $expositionSubCategoryId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getExpositionSubCategoryId()
    {
        return $this->ExpositionSubCategoryId;
    }

    /**
     * @param  string[optional]                    $namePattern
     * @return ExpositionSubCategorySearchCriteria
     */
    public function setNamePattern($namePattern)
    {
        $this->NamePattern = $namePattern;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamePattern()
    {
        return $this->NamePattern;
    }

    /**
     * @param  SimpleType\Guid[optional]           $expositionCategoryId
     * @return ExpositionSubCategorySearchCriteria
     */
    public function setExpositionCategoryId(SimpleType\Guid $expositionCategoryId = null)
    {
        $this->ExpositionCategoryId = $expositionCategoryId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getExpositionCategoryId()
    {
        return $this->ExpositionCategoryId;
    }

    /**
     * @param  ExpositionSubCategoryIncludes[optional] $includes
     * @return ExpositionSubCategorySearchCriteria
     */
    public function setIncludes(ExpositionSubCategoryIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ExpositionSubCategoryIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria[optional]            $paging
     * @return ExpositionSubCategorySearchCriteria
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
