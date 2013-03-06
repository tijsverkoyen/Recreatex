<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PurchaseArticleSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PurchaseArticleSearchCriteria';

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
     * @var SimpleType\guid|null $ArticleId
     */
    protected $ArticleId;

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
     * @var string|null $NamePattern
     */
    protected $NamePattern;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ArticleCategoryId
     */
    protected $ArticleCategoryId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $EmployeeId
     */
    protected $EmployeeId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $VendorId
     */
    protected $VendorId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PurchaseArticleIncludes|null $Includes
     */
    protected $Includes;

    /**
     * @param  PagingCriteria|null           $paging
     * @return PurchaseArticleSearchCriteria
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
     * @param  SimpleType\guid|null          $articleId
     * @return PurchaseArticleSearchCriteria
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
     * @param  SimpleType\guid|null          $articleGroupId
     * @return PurchaseArticleSearchCriteria
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
     * @param  string|null                   $namePattern
     * @return PurchaseArticleSearchCriteria
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
     * @param  SimpleType\guid|null          $articleCategoryId
     * @return PurchaseArticleSearchCriteria
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

    /**
     * @param  SimpleType\guid|null          $employeeId
     * @return PurchaseArticleSearchCriteria
     */
    public function setEmployeeId(SimpleType\guid $employeeId = null)
    {
        $this->EmployeeId = $employeeId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getEmployeeId()
    {
        return $this->EmployeeId;
    }

    /**
     * @param  SimpleType\guid|null          $vendorId
     * @return PurchaseArticleSearchCriteria
     */
    public function setVendorId(SimpleType\guid $vendorId = null)
    {
        $this->VendorId = $vendorId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getVendorId()
    {
        return $this->VendorId;
    }

    /**
     * @param  PurchaseArticleIncludes|null  $includes
     * @return PurchaseArticleSearchCriteria
     */
    public function setIncludes(PurchaseArticleIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return PurchaseArticleIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

}
