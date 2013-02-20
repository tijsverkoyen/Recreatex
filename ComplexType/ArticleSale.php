<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArticleSale extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArticleSale';

    /**
     * @var Article
     */
    protected $Article;

    /**
     * @param  Article|null $article
     * @return ArticleSale
     */
    public function setArticle(Article $article = null)
    {
        $this->Article = $article;

        return $this;
    }

    /**
     * @return Article|null
     */
    public function getArticle()
    {
        return $this->Article;
    }
}
