<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PurchaseArticleIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PurchaseArticleIncludes';

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
    protected $ArticleCategories;

    /**
     * @var boolean
     */
    protected $ArticleGroup;

    /**
     * @var boolean
     */
    protected $StockLocations;

    /**
     * @var boolean
     */
    protected $Vendors;

    /**
     * @var boolean
     */
    protected $ArticleUnits;

    /**
     * @param  boolean[optional]       $imageUrl
     * @return PurchaseArticleIncludes
     */
    public function setImageUrl($imageUrl)
    {
        $this->ImageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getImageUrl()
    {
        return $this->ImageUrl;
    }

    /**
     * @param  boolean[optional]       $image
     * @return PurchaseArticleIncludes
     */
    public function setImage($image)
    {
        $this->Image = $image;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param  boolean[optional]       $articleCategories
     * @return PurchaseArticleIncludes
     */
    public function setArticleCategories($articleCategories)
    {
        $this->ArticleCategories = $articleCategories;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getArticleCategories()
    {
        return $this->ArticleCategories;
    }

    /**
     * @param  boolean[optional]       $articleGroup
     * @return PurchaseArticleIncludes
     */
    public function setArticleGroup($articleGroup)
    {
        $this->ArticleGroup = $articleGroup;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getArticleGroup()
    {
        return $this->ArticleGroup;
    }

    /**
     * @param  boolean[optional]       $stockLocations
     * @return PurchaseArticleIncludes
     */
    public function setStockLocations($stockLocations)
    {
        $this->StockLocations = $stockLocations;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getStockLocations()
    {
        return $this->StockLocations;
    }

    /**
     * @param  boolean[optional]       $vendors
     * @return PurchaseArticleIncludes
     */
    public function setVendors($vendors)
    {
        $this->Vendors = $vendors;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getVendors()
    {
        return $this->Vendors;
    }

    /**
     * @param  boolean[optional]       $articleUnits
     * @return PurchaseArticleIncludes
     */
    public function setArticleUnits($articleUnits)
    {
        $this->ArticleUnits = $articleUnits;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getArticleUnits()
    {
        return $this->ArticleUnits;
    }
}
