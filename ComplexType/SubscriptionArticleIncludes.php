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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ImageUrl
     */
    protected $ImageUrl;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Image
     */
    protected $Image;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ArticleGroup
     */
    protected $ArticleGroup;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Attachment
     */
    protected $Attachment;

    /**
     * @param  boolean|null                $imageUrl
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
     * @param  boolean|null                $image
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
     * @param  boolean|null                $articleGroup
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
     * @param  boolean|null                $attachment
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
