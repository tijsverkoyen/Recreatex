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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $ArticleGroupId
     */
    protected $ArticleGroupId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $ArticleId
     */
    protected $ArticleId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ArticleType|null $ArticleTypes
     */
    protected $ArticleTypes;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $BuyerId
     */
    protected $BuyerId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IncludeDetail
     */
    protected $IncludeDetail;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArticleIncludes|null $Includes
     */
    protected $Includes;

    /**

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
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $StockLocationId
     */
    protected $StockLocationId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $ArticleCategoryId
     */
    protected $ArticleCategoryId;

    /**
     * @param  SimpleType\Guid|null  $articleGroupId
     * @return ArticleSearchCriteria
     */
    public function setArticleGroupId(SimpleType\Guid $articleGroupId = null)
    {
        $this->ArticleGroupId = $articleGroupId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getArticleGroupId()
    {
        return $this->ArticleGroupId;
    }

    /**
     * @param  SimpleType\Guid|null  $articleId
     * @return ArticleSearchCriteria
     */
    public function setArticleId(SimpleType\Guid $articleId = null)
    {
        $this->ArticleId = $articleId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getArticleId()
    {
        return $this->ArticleId;
    }

    /**
     * @param  SimpleType\ArticleType|null $articleTypes
     * @return ArticleSearchCriteria
     */
    public function setArticleTypes(SimpleType\ArticleType $articleTypes = null)
    {
        $this->ArticleTypes = $articleTypes;

        return $this;
    }

    /**
     * @return SimpleType\ArticleType|null
     */
    public function getArticleTypes()
    {
        return $this->ArticleTypes;
    }

    /**
     * @param  SimpleType\Guid|null  $buyerId
     * @return ArticleSearchCriteria
     */
    public function setBuyerId(SimpleType\Guid $buyerId = null)
    {
        $this->BuyerId = $buyerId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getBuyerId()
    {
        return $this->BuyerId;
    }

    /**
     * @param  boolean|null          $includeDetail
     * @return ArticleSearchCriteria
     */
    public function setIncludeDetail($includeDetail)
    {
        $this->IncludeDetail = $includeDetail;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIncludeDetail()
    {
        return $this->IncludeDetail;
    }

    /**
     * @param  ArticleIncludes|null  $includes
     * @return ArticleSearchCriteria
     */
    public function setIncludes(ArticleIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ArticleIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  string|null           $namePattern
     * @return ArticleSearchCriteria
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
     * @param  PagingCriteria|null   $paging
     * @return ArticleSearchCriteria
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
     * @param  SimpleType\Guid|null  $stockLocationId
     * @return ArticleSearchCriteria
     */
    public function setStockLocationId(SimpleType\Guid $stockLocationId = null)
    {
        $this->StockLocationId = $stockLocationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getStockLocationId()
    {
        return $this->StockLocationId;
    }

    /**
     * @param  SimpleType\Guid|null  $articleCategoryId
     * @return ArticleSearchCriteria
     */
    public function setArticleCategoryId(SimpleType\Guid $articleCategoryId = null)
    {
        $this->ArticleCategoryId = $articleCategoryId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getArticleCategoryId()
    {
        return $this->ArticleCategoryId;
    }
}
