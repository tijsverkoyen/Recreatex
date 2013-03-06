<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfArticleOption extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfArticleOption';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ArticleOption[] $ArticleOption
     */
    protected $ArticleOption = array();

    /**
     * @param  ArticleOption[]      $articleOption
     * @return ArrayOfArticleOption
     */
    public function setArticleOption(array $articleOption = array())
    {
        $this->ArticleOption = $articleOption;

        return $this;
    }

    /**
     * @return ArticleOption[]
     */
    public function getArticleOption()
    {
        return $this->ArticleOption;
    }

}
