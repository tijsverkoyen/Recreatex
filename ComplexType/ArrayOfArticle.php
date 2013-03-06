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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Article[] $Article
     */
    protected $Article = array();

    /**
     * @param  Article[]      $article
     * @return ArrayOfArticle
     */
    public function setArticle(array $article = array())
    {
        $this->Article = $article;

        return $this;
    }

    /**
     * @return Article[]
     */
    public function getArticle()
    {
        return $this->Article;
    }

}
