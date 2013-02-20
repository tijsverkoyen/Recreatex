<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfArticle extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfArticle';

    /**
     * @var array
     */
    protected $Article = array();

    /**
     * @param  array          $article
     * @return ArrayOfArticle
     */
    public function setArticle(array $article = array())
    {
        $this->Article = $article;

        return $this;
    }

    /**
     * @return array
     */
    public function getArticle()
    {
        return $this->Article;
    }
}
