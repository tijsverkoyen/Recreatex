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
     * @var array
     */
    protected $ArticleIngredient = array();

    /**
     * @param  array                    $articleIngredient
     * @return ArrayOfArticleIngredient
     */
    public function setArticleIngredient(array $articleIngredient = array())
    {
        $this->ArticleIngredient = $articleIngredient;

        return $this;
    }

    /**
     * @return array
     */
    public function getArticleIngredient()
    {
        if (!is_array($this->ArticleIngredient)) {
            return array($this->ArticleIngredient);
        }

        return $this->ArticleIngredient;
    }
}
