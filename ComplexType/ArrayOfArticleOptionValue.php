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
     * @var array
     */
    protected $ArticleOptionValue = array();

    /**
     * @param  array                     $articleOptionValue
     * @return ArrayOfArticleOptionValue
     */
    public function setArticleOptionValue(array $articleOptionValue = array())
    {
        $this->ArticleOptionValue = $articleOptionValue;

        return $this;
    }

    /**
     * @return array
     */
    public function getArticleOptionValue()
    {
	    if(!is_array($this->ArticleOptionValue)) {
		    return array($this->ArticleOptionValue);
	    }
	    return $this->ArticleOptionValue;
    }
}
