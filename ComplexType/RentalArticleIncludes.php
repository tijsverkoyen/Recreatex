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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ExtraImages
     */
    protected $ExtraImages;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ExtraImageUrls
     */
    protected $ExtraImageUrls;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Components
     */
    protected $Components;

    /**
     * @param  boolean|null          $imageUrl
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
     * @param  boolean|null          $image
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
     * @param  boolean|null          $articleGroup
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
     * @param  boolean|null          $attachment
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
     * @param  boolean|null          $extraImages
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
     * @param  boolean|null          $extraImageUrls
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
     * @param  boolean|null          $components
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
