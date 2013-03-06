<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RentalArticleIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RentalArticleIncludes';

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
     * @var boolean
     */
    protected $ExtraImages;

    /**
     * @var boolean
     */
    protected $ExtraImageUrls;

    /**
     * @var boolean
     */
    protected $Components;

    /**
     * @param  boolean[optional]     $imageUrl
     * @return RentalArticleIncludes
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
     * @param  boolean[optional]     $image
     * @return RentalArticleIncludes
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
     * @param  boolean[optional]     $articleGroup
     * @return RentalArticleIncludes
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
     * @param  boolean[optional]     $attachment
     * @return RentalArticleIncludes
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

    /**
     * @param  boolean[optional]     $extraImages
     * @return RentalArticleIncludes
     */
    public function setExtraImages($extraImages)
    {
        $this->ExtraImages = $extraImages;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getExtraImages()
    {
        return $this->ExtraImages;
    }

    /**
     * @param  boolean[optional]     $extraImageUrls
     * @return RentalArticleIncludes
     */
    public function setExtraImageUrls($extraImageUrls)
    {
        $this->ExtraImageUrls = $extraImageUrls;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getExtraImageUrls()
    {
        return $this->ExtraImageUrls;
    }

    /**
     * @param  boolean[optional]     $components
     * @return RentalArticleIncludes
     */
    public function setComponents($components)
    {
        $this->Components = $components;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getComponents()
    {
        return $this->Components;
    }
}
