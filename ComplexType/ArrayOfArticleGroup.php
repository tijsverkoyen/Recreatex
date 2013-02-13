<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfArticleGroup extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfArticleGroup';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ArticleGroup[] $ArticleGroup
     */
    protected $ArticleGroup = array();

    /**
     * @param  ArticleGroup[]      $articleGroup
     * @return ArrayOfArticleGroup
     */
    public function setArticleGroup(array $articleGroup = array())
    {
        $this->ArticleGroup = $articleGroup;

        return $this;
    }

    /**
     * @return ArticleGroup[]
     */
    public function getArticleGroup()
    {
        return $this->ArticleGroup;
    }
}
