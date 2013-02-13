<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArticleIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArticleIncludes';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $FreeArticles
     */
    protected $FreeArticles;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Group
     */
    protected $Group;

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
     * @var boolean|null $ImageUrl
     */
    protected $ImageUrl;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Ingrediënts
     */
    protected $Ingrediënts;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Locations
     */
    protected $Locations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Options
     */
    protected $Options;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Price
     */
    protected $Price;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $RentArticles
     */
    protected $RentArticles;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $SaleArticles
     */
    protected $SaleArticles;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $SoldOutArticles
     */
    protected $SoldOutArticles;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Stock
     */
    protected $Stock;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ArticleCategories
     */
    protected $ArticleCategories;


    /**
     * @param boolean|null $freeArticles
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
     * @param boolean|null $group
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
     * @param boolean|null $image
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
     * @param boolean|null $imageUrl
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
     * @param boolean|null $ingrediënts
     * @return ArticleIncludes
     */
    public function setIngrediënts($ingrediënts)
    {
        $this->Ingrediënts = $ingrediënts;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIngrediënts()
    {
        return $this->Ingrediënts;
    }

    /**
     * @param boolean|null $locations
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
     * @param boolean|null $options
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
     * @param boolean|null $price
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
     * @param boolean|null $rentArticles
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
     * @param boolean|null $saleArticles
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
     * @param boolean|null $soldOutArticles
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
     * @param boolean|null $stock
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
     * @param boolean|null $articleCategories
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

