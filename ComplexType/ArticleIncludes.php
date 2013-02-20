<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArticleIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArticleIncludes';

    /**
     * @var boolean
     */
    protected $FreeArticles;

    /**
     * @var boolean
     */
    protected $Group;

    /**
     * @var boolean
     */
    protected $Image;

    /**
     * @var boolean
     */
    protected $ImageUrl;

    /**
     * @var boolean
     */
    protected $Ingredients;

    /**
     * @var boolean
     */
    protected $Locations;

    /**
     * @var boolean
     */
    protected $Options;

    /**
     * @var boolean
     */
    protected $Price;

    /**
     * @var boolean
     */
    protected $RentArticles;

    /**
     * @var boolean
     */
    protected $SaleArticles;

    /**
     * @var boolean
     */
    protected $SoldOutArticles;

    /**
     * @var boolean
     */
    protected $Stock;

    /**
     * @var boolean
     */
    protected $ArticleCategories;

    /**
     * @param  boolean|null    $freeArticles
     * @return ArticleIncludes
     */
    public function setFreeArticles($freeArticles)
    {
        $this->FreeArticles = $freeArticles;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getFreeArticles()
    {
        return $this->FreeArticles;
    }

    /**
     * @param  boolean|null    $group
     * @return ArticleIncludes
     */
    public function setGroup($group)
    {
        $this->Group = $group;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getGroup()
    {
        return $this->Group;
    }

    /**
     * @param  boolean|null    $image
     * @return ArticleIncludes
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
     * @param  boolean|null    $imageUrl
     * @return ArticleIncludes
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
     * @param  boolean|null    $ingredients
     * @return ArticleIncludes
     */
    public function setIngredients($ingredients)
    {
        $this->Ingrediënts = $ingredients;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIngredients()
    {
        return $this->Ingredients;
    }

    /**
     * @param  boolean|null    $locations
     * @return ArticleIncludes
     */
    public function setLocations($locations)
    {
        $this->Locations = $locations;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getLocations()
    {
        return $this->Locations;
    }

    /**
     * @param  boolean|null    $options
     * @return ArticleIncludes
     */
    public function setOptions($options)
    {
        $this->Options = $options;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param  boolean|null    $price
     * @return ArticleIncludes
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param  boolean|null    $rentArticles
     * @return ArticleIncludes
     */
    public function setRentArticles($rentArticles)
    {
        $this->RentArticles = $rentArticles;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getRentArticles()
    {
        return $this->RentArticles;
    }

    /**
     * @param  boolean|null    $saleArticles
     * @return ArticleIncludes
     */
    public function setSaleArticles($saleArticles)
    {
        $this->SaleArticles = $saleArticles;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getSaleArticles()
    {
        return $this->SaleArticles;
    }

    /**
     * @param  boolean|null    $soldOutArticles
     * @return ArticleIncludes
     */
    public function setSoldOutArticles($soldOutArticles)
    {
        $this->SoldOutArticles = $soldOutArticles;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getSoldOutArticles()
    {
        return $this->SoldOutArticles;
    }

    /**
     * @param  boolean|null    $stock
     * @return ArticleIncludes
     */
    public function setStock($stock)
    {
        $this->Stock = $stock;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getStock()
    {
        return $this->Stock;
    }

    /**
     * @param  boolean|null    $articleCategories
     * @return ArticleIncludes
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
}
