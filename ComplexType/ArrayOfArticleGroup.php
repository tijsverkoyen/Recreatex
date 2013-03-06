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
     * @var array
     */
    protected $ArticleGroup = array();

    /**
     * @param  array               $articleGroup
     * @return ArrayOfArticleGroup
     */
    public function setArticleGroup(array $articleGroup = array())
    {
        $this->ArticleGroup = $articleGroup;

        return $this;
    }

    /**
     * @return array
     */
    public function getArticleGroup()
    {
	    if(!is_array($this->ArticleGroup)) {
		    return array($this->ArticleGroup);
	    }
	    return $this->ArticleGroup;
    }
}
