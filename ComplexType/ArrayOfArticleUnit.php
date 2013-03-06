<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfArticleUnit extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfArticleUnit';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ArticleUnit[] $ArticleUnit
     */
    protected $ArticleUnit = array();

    /**
     * @param  ArticleUnit[]      $articleUnit
     * @return ArrayOfArticleUnit
     */
    public function setArticleUnit(array $articleUnit = array())
    {
        $this->ArticleUnit = $articleUnit;

        return $this;
    }

    /**
     * @return ArticleUnit[]
     */
    public function getArticleUnit()
    {
        return $this->ArticleUnit;
    }

}
