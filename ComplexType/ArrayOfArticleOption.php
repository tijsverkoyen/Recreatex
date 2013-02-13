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
     * @var array $ArticleOption
     */
    protected $ArticleOption = array();

    /**
     * @param  array                $articleOption
     * @return ArrayOfArticleOption
     */
    public function setArticleOption(array $articleOption = array())
    {
        $this->ArticleOption = $articleOption;

        return $this;
    }

    /**
     * @return array
     */
    public function getArticleOption()
    {
        return $this->ArticleOption;
    }
}
