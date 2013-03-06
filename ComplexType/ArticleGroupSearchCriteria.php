<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArticleGroupSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArticleGroupSearchCriteria';

    /**
     * @var SimpleType\ArticleType
     */
    protected $ArticleTypes;

    /**
     * @var boolean
     */
    protected $IncludeImage;

    /**
     * @var boolean
     */
    protected $IncludeImageUrl;

    /**
     * @param SimpleType\ArticleType[optional] $articleTypes
     *  ArticleGroupSearchCriteria
     */
    public function setArticleTypes(SimpleType\ArticleType $articleTypes = null)
    {
        $this->ArticleTypes = $articleTypes;

        return $this;
    }

    /**
     * @return SimpleType\ArticleType
     */
    public function getArticleTypes()
    {
        return $this->ArticleTypes;
    }

    /**
     * @param  boolean[optional]          $includeImage
     * @return ArticleGroupSearchCriteria
     */
    public function setIncludeImage($includeImage)
    {
        $this->IncludeImage = $includeImage;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeImage()
    {
        return $this->IncludeImage;
    }

    /**
     * @param  boolean[optional]          $includeImageUrl
     * @return ArticleGroupSearchCriteria
     */
    public function setIncludeImageUrl($includeImageUrl)
    {
        $this->IncludeImageUrl = $includeImageUrl;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeImageUrl()
    {
        return $this->IncludeImageUrl;
    }
}
