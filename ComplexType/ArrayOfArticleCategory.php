<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfArticleCategory extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfArticleCategory';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ArticleCategory[] $ArticleCategory
     */
    protected $ArticleCategory = array();

    /**
     * @param  ArticleCategory[]      $articleCategory
     * @return ArrayOfArticleCategory
     */
    public function setArticleCategory(array $articleCategory = array())
    {
        $this->ArticleCategory = $articleCategory;

        return $this;
    }

    /**
     * @return ArticleCategory[]
     */
    public function getArticleCategory()
    {
        return $this->ArticleCategory;
    }
}
