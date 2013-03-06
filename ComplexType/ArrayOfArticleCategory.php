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
     * @var array
     */
    protected $ArticleCategory = array();

    /**
     * @param  array                  $articleCategory
     * @return ArrayOfArticleCategory
     */
    public function setArticleCategory(array $articleCategory = array())
    {
        $this->ArticleCategory = $articleCategory;

        return $this;
    }

    /**
     * @return array
     */
    public function getArticleCategory()
    {
	    if(!is_array($this->ArticleCategory)) {
		    return array($this->ArticleCategory);
	    }
	    return $this->ArticleCategory;
    }
}
