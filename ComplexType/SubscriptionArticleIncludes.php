<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SubscriptionArticleIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SubscriptionArticleIncludes';

    /**
     * @var boolean
     */
    protected $ImageUrl;

    /**
     * @var boolean
     */
    protected $Image;

    /**
     * @var boolean
     */
    protected $ArticleGroup;

    /**
     * @var boolean
     */
    protected $Attachment;

    /**
     * @param  boolean[optional]           $imageUrl
     * @return SubscriptionArticleIncludes
     */
    public function setImageUrl($imageUrl)
    {
        $this->ImageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getImageUrl()
    {
        return $this->ImageUrl;
    }

    /**
     * @param  boolean[optional]           $image
     * @return SubscriptionArticleIncludes
     */
    public function setImage($image)
    {
        $this->Image = $image;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param  boolean[optional]           $articleGroup
     * @return SubscriptionArticleIncludes
     */
    public function setArticleGroup($articleGroup)
    {
        $this->ArticleGroup = $articleGroup;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getArticleGroup()
    {
        return $this->ArticleGroup;
    }

    /**
     * @param  boolean[optional]           $attachment
     * @return SubscriptionArticleIncludes
     */
    public function setAttachment($attachment)
    {
        $this->Attachment = $attachment;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getAttachment()
    {
        return $this->Attachment;
    }
}
