<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfArticleIngredient extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfArticleIngredient';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ArticleIngredient[] $ArticleIngredient
     */
    protected $ArticleIngredient = array();

    /**
     * @param  ArticleIngredient[]      $articleIngredient
     * @return ArrayOfArticleIngredient
     */
    public function setArticleIngredient(array $articleIngredient = array())
    {
        $this->ArticleIngredient = $articleIngredient;

        return $this;
    }

    /**
     * @return ArticleIngredient[]
     */
    public function getArticleIngredient()
    {
        return $this->ArticleIngredient;
    }
}
