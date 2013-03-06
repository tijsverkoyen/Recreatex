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

     * maxOccurs = unbounded     * @var array
     */
    protected $ArticleUnit = array();

    /**
     * @param  array              $articleUnit
     * @return ArrayOfArticleUnit
     */
    public function setArticleUnit(array $articleUnit = array())
    {
        $this->ArticleUnit = $articleUnit;

        return $this;
    }

    /**
     * @return array
     */
    public function getArticleUnit()
    {
        if (!is_array($this->ArticleUnit)) {
            return array($this->ArticleUnit);
        }

        return $this->ArticleUnit;
    }
}
