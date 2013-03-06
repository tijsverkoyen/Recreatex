<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArticleCategorySearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArticleCategorySearchCriteria';

    /**
     * @var SimpleType\Guid
     */
    protected $ArticleCategoryId;

    /**
     * @var string
     */
    protected $NamePattern;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @param SimpleType\Guid[optional] $articleCategoryId
     *  ArticleCategorySearchCriteria
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
     * @param  string[optional]              $namePattern
     * @return ArticleCategorySearchCriteria
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
     * @param  PagingCriteria[optional]      $paging
     * @return ArticleCategorySearchCriteria
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
