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
     * @var boolean|null $ArticleCategories
     */
    protected $ArticleCategories;

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
     * @var boolean|null $StockLocations
     */
    protected $StockLocations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Vendors
     */
    protected $Vendors;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ArticleUnits
     */
    protected $ArticleUnits;

    /**
     * @param  boolean|null            $imageUrl
     * @return PurchaseArticleIncludes
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
     * @param  boolean|null            $image
     * @return PurchaseArticleIncludes
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
     * @param  boolean|null            $articleCategories
     * @return PurchaseArticleIncludes
     */
    public function setArticleCategories($articleCategories)
    {
        $this->ArticleCategories = $articleCategories;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getArticleCategories()
    {
        return $this->ArticleCategories;
    }

    /**
     * @param  boolean|null            $articleGroup
     * @return PurchaseArticleIncludes
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
     * @param  boolean|null            $stockLocations
     * @return PurchaseArticleIncludes
     */
    public function setStockLocations($stockLocations)
    {
        $this->StockLocations = $stockLocations;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getStockLocations()
    {
        return $this->StockLocations;
    }

    /**
     * @param  boolean|null            $vendors
     * @return PurchaseArticleIncludes
     */
    public function setVendors($vendors)
    {
        $this->Vendors = $vendors;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getVendors()
    {
        return $this->Vendors;
    }

    /**
     * @param  boolean|null            $articleUnits
     * @return PurchaseArticleIncludes
     */
    public function setArticleUnits($articleUnits)
    {
        $this->ArticleUnits = $articleUnits;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getArticleUnits()
    {
        return $this->ArticleUnits;
    }

}
