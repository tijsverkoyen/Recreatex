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
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var SimpleTypeGuid
     */
    protected $ArticleId;

    /**
     * @var SimpleTypeGuid
     */
    protected $ArticleGroupId;

    /**
     * @var string
     */
    protected $NamePattern;

    /**
     * @var SimpleTypeGuid
     */
    protected $ArticleCategoryId;

    /**
     * @var SimpleTypeGuid
     */
    protected $EmployeeId;

    /**
     * @var SimpleTypeGuid
     */
    protected $VendorId;

    /**
     * @var PurchaseArticleIncludes
     */
    protected $Includes;

    /**
     * @param  PagingCriteria[optional]      $paging
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
     * @param  SimpleType\Guid[optional]     $articleId
     * @return PurchaseArticleSearchCriteria
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
     * @param  SimpleType\Guid[optional]     $articleGroupId
     * @return PurchaseArticleSearchCriteria
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
     * @param  string[optional]              $namePattern
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
     * @param  SimpleType\Guid[optional]     $articleCategoryId
     * @return PurchaseArticleSearchCriteria
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

    /**
     * @param  SimpleType\Guid[optional]     $employeeId
     * @return PurchaseArticleSearchCriteria
     */
    public function setEmployeeId(SimpleType\Guid $employeeId = null)
    {
        $this->EmployeeId = $employeeId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getEmployeeId()
    {
        return $this->EmployeeId;
    }

    /**
     * @param  SimpleType\Guid[optional]     $vendorId
     * @return PurchaseArticleSearchCriteria
     */
    public function setVendorId(SimpleType\Guid $vendorId = null)
    {
        $this->VendorId = $vendorId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getVendorId()
    {
        return $this->VendorId;
    }

    /**
     * @param  PurchaseArticleIncludes[optional] $includes
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
