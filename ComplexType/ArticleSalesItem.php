<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArticleSalesItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArticleSalesItem';

    /**
     * @var SimpleType\Guid
     */
    protected $ArticleId;

    /**
     * @param  SimpleType\Guid|null $articleId
     * @return ArticleSalesItem
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
}
