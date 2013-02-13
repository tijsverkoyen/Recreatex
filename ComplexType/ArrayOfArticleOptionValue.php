<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfArticleOptionValue extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfArticleOptionValue';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ArticleOptionValue[] $ArticleOptionValue
     */
    protected $ArticleOptionValue = array();

    /**
     * @param  ArticleOptionValue[]      $articleOptionValue
     * @return ArrayOfArticleOptionValue
     */
    public function setArticleOptionValue(array $articleOptionValue = array())
    {
        $this->ArticleOptionValue = $articleOptionValue;

        return $this;
    }

    /**
     * @return ArticleOptionValue[]
     */
    public function getArticleOptionValue()
    {
        return $this->ArticleOptionValue;
    }
}
