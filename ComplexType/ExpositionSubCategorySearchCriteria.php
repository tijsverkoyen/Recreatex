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
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ExpositionSubCategoryId
     */
    protected $ExpositionSubCategoryId;

    /**
     * Part of the name of the exposition categories to find. Use an percent sign (%) as the
     * wildcard.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $NamePattern
     */
    protected $NamePattern;

    /**
     * Only include subcategories for this target Main category
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ExpositionCategoryId
     */
    protected $ExpositionCategoryId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ExpositionSubCategoryIncludes|null $Includes
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
     * @param  SimpleType\guid|null                $expositionSubCategoryId
     * @return ExpositionSubCategorySearchCriteria
     */
    public function setExpositionSubCategoryId(SimpleType\guid $expositionSubCategoryId = null)
    {
        $this->ExpositionSubCategoryId = $expositionSubCategoryId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getExpositionSubCategoryId()
    {
        return $this->ExpositionSubCategoryId;
    }

    /**
     * @param  string|null                         $namePattern
     * @return ExpositionSubCategorySearchCriteria
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
     * @param  SimpleType\guid|null                $expositionCategoryId
     * @return ExpositionSubCategorySearchCriteria
     */
    public function setExpositionCategoryId(SimpleType\guid $expositionCategoryId = null)
    {
        $this->ExpositionCategoryId = $expositionCategoryId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getExpositionCategoryId()
    {
        return $this->ExpositionCategoryId;
    }

    /**
     * @param  ExpositionSubCategoryIncludes|null  $includes
     * @return ExpositionSubCategorySearchCriteria
     */
    public function setIncludes(ExpositionSubCategoryIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ExpositionSubCategoryIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria|null                 $paging
     * @return ExpositionSubCategorySearchCriteria
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
