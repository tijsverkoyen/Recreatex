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
     * @var SimpleType\guid|null $ArticleGroupId
     */
    protected $ArticleGroupId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ArticleId
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
     * @var SimpleType\guid|null $BuyerId
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
     * @var SimpleType\guid|null $StockLocationId
     */
    protected $StockLocationId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ArticleCategoryId
     */
    protected $ArticleCategoryId;


    /**
     * @param SimpleType\guid|null $articleGroupId
     * @return ArticleSearchCriteria
     */
    public function setArticleGroupId(SimpleType\guid $articleGroupId = null)
    {
        $this->ArticleGroupId = $articleGroupId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getArticleGroupId()
    {
        return $this->ArticleGroupId;
    }

    /**
     * @param SimpleType\guid|null $articleId
     * @return ArticleSearchCriteria
     */
    public function setArticleId(SimpleType\guid $articleId = null)
    {
        $this->ArticleId = $articleId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getArticleId()
    {
        return $this->ArticleId;
    }

    /**
     * @param SimpleType\ArticleType|null $articleTypes
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
     * @param SimpleType\guid|null $buyerId
     * @return ArticleSearchCriteria
     */
    public function setBuyerId(SimpleType\guid $buyerId = null)
    {
        $this->BuyerId = $buyerId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getBuyerId()
    {
        return $this->BuyerId;
    }

    /**
     * @param boolean|null $includeDetail
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
     * @param ArticleIncludes|null $includes
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
     * @param string|null $namePattern
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
     * @param PagingCriteria|null $paging
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
     * @param SimpleType\guid|null $stockLocationId
     * @return ArticleSearchCriteria
     */
    public function setStockLocationId(SimpleType\guid $stockLocationId = null)
    {
        $this->StockLocationId = $stockLocationId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getStockLocationId()
    {
        return $this->StockLocationId;
    }

    /**
     * @param SimpleType\guid|null $articleCategoryId
     * @return ArticleSearchCriteria
     */
    public function setArticleCategoryId(SimpleType\guid $articleCategoryId = null)
    {
        $this->ArticleCategoryId = $articleCategoryId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getArticleCategoryId()
    {
        return $this->ArticleCategoryId;
    }


}

