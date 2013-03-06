<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArticleSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArticleSearchCriteria';

    /**
     * @var SimpleType\Guid
     */
    protected $ArticleGroupId;

    /**
     * @var SimpleType\Guid
     */
    protected $ArticleId;

    /**
     * @var SimpleType\ArticleType
     */
    protected $ArticleTypes;

    /**
     * @var SimpleType\Guid
     */
    protected $BuyerId;

    /**
     * @var boolean
     */
    protected $IncludeDetail;

    /**
     * @var ArticleIncludes
     */
    protected $Includes;

    /**
     * @var string
     */
    protected $NamePattern;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var SimpleType\Guid
     */
    protected $StockLocationId;

    /**
     * @var SimpleType\Guid
     */
    protected $ArticleCategoryId;

    /**
     * @var ArrayOfguid $ArticleCategoryIds
     */
    protected $ArticleCategoryIds;

    /**
     * @var float $MinPrice
     */
    protected $MinPrice;

    /**
     * @var float $MaxPrice
     */
    protected $MaxPrice;

    /**
     * @param  SimpleType\Guid[optional] $articleGroupId
     * @return ArticleSearchCriteria
     */
    public function setArticleGroupId(SimpleType\Guid $articleGroupId = null)
    {
        $this->ArticleGroupId = $articleGroupId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getArticleGroupId()
    {
        return $this->ArticleGroupId;
    }

    /**
     * @param  SimpleType\Guid[optional] $articleId
     * @return ArticleSearchCriteria
     */
    public function setArticleId(SimpleType\Guid $articleId = null)
    {
        $this->ArticleId = $articleId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getArticleId()
    {
        return $this->ArticleId;
    }

    /**
     * @param  SimpleType\ArticleType[optional] $articleTypes
     * @return ArticleSearchCriteria
     */
    public function setArticleTypes(SimpleType\ArticleType $articleTypes = null)
    {
        $this->ArticleTypes = $articleTypes;

        return $this;
    }

    /**
     * @return SimpleType\ArticleType
     */
    public function getArticleTypes()
    {
        return $this->ArticleTypes;
    }

    /**
     * @param  SimpleType\Guid[optional] $buyerId
     * @return ArticleSearchCriteria
     */
    public function setBuyerId(SimpleType\Guid $buyerId = null)
    {
        $this->BuyerId = $buyerId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getBuyerId()
    {
        return $this->BuyerId;
    }

    /**
     * @param  boolean[optional]     $includeDetail
     * @return ArticleSearchCriteria
     */
    public function setIncludeDetail($includeDetail)
    {
        $this->IncludeDetail = $includeDetail;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeDetail()
    {
        return $this->IncludeDetail;
    }

    /**
     * @param  ArticleIncludes[optional] $includes
     * @return ArticleSearchCriteria
     */
    public function setIncludes(ArticleIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ArticleIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  string[optional]      $namePattern
     * @return ArticleSearchCriteria
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
     * @param  PagingCriteria[optional] $paging
     * @return ArticleSearchCriteria
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
     * @param  SimpleType\Guid[optional] $stockLocationId
     * @return ArticleSearchCriteria
     */
    public function setStockLocationId(SimpleType\Guid $stockLocationId = null)
    {
        $this->StockLocationId = $stockLocationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getStockLocationId()
    {
        return $this->StockLocationId;
    }

    /**
     * @param  SimpleType\Guid[optional] $articleCategoryId
     * @return ArticleSearchCriteria
     */
    public function setArticleCategoryId(SimpleType\Guid $articleCategoryId = null)
    {
        $this->ArticleCategoryId = $articleCategoryId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getArticleCategoryId()
    {
        return $this->ArticleCategoryId;
    }

    /**
     * @param  ArrayOfguid[optional] $articleCategoryIds
     * @return ArticleSearchCriteria
     */
    public function setArticleCategoryIds(ArrayOfguid $articleCategoryIds = null)
    {
        $this->ArticleCategoryIds = $articleCategoryIds;

        return $this;
    }

    /**
     * @return ArrayOfGuid
     */
    public function getArticleCategoryIds()
    {
        return $this->ArticleCategoryIds;
    }

    /**
     * @param  float[optional]       $minPrice
     * @return ArticleSearchCriteria
     */
    public function setMinPrice($minPrice)
    {
        $this->MinPrice = $minPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getMinPrice()
    {
        return $this->MinPrice;
    }

    /**
     * @param  float[optional]       $maxPrice
     * @return ArticleSearchCriteria
     */
    public function setMaxPrice($maxPrice)
    {
        $this->MaxPrice = $maxPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getMaxPrice()
    {
        return $this->MaxPrice;
    }
}
