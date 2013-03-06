<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArticleSalesOrder extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArticleSalesOrder';

    /**
     * @var SimpleTypeGuid
     */
    protected $ArticleId;

    /**
     * @var string
     */
    protected $ArticleCode;

    /**
     * @var string
     */
    protected $ArticleName;

    /**
     * @var string
     */
    protected $ArticleDescription;

    /**
     * @param  SimpleType\Guid[optional] $articleId
     * @return ArticleSalesOrder
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
     * @param  string[optional]  $articleCode
     * @return ArticleSalesOrder
     */
    public function setArticleCode($articleCode)
    {
        $this->ArticleCode = $articleCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getArticleCode()
    {
        return $this->ArticleCode;
    }

    /**
     * @param  string[optional]  $articleName
     * @return ArticleSalesOrder
     */
    public function setArticleName($articleName)
    {
        $this->ArticleName = $articleName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getArticleName()
    {
        return $this->ArticleName;
    }

    /**
     * @param  string[optional]  $articleDescription
     * @return ArticleSalesOrder
     */
    public function setArticleDescription($articleDescription)
    {
        $this->ArticleDescription = $articleDescription;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getArticleDescription()
    {
        return $this->ArticleDescription;
    }
}
