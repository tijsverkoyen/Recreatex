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
     * @var boolean
     */
    protected $ChipKnipArticles;

    /**
     * @var boolean
     */
    protected $ETicketArticles;

    /**
     * @param  boolean[optional] $freeArticles
     * @return ArticleIncludes
     */
    public function setFreeArticles($freeArticles)
    {
        $this->FreeArticles = $freeArticles;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getFreeArticles()
    {
        return $this->FreeArticles;
    }

    /**
     * @param  boolean[optional] $group
     * @return ArticleIncludes
     */
    public function setGroup($group)
    {
        $this->Group = $group;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getGroup()
    {
        return $this->Group;
    }

    /**
     * @param  boolean[optional] $image
     * @return ArticleIncludes
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
     * @param  boolean[optional] $imageUrl
     * @return ArticleIncludes
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
     * @param  boolean[optional] $ingredients
     * @return ArticleIncludes
     */
    public function setIngredients($ingredients)
    {
        $this->Ingrediënts = $ingredients;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIngredients()
    {
        return $this->Ingredients;
    }

    /**
     * @param  boolean[optional] $locations
     * @return ArticleIncludes
     */
    public function setLocations($locations)
    {
        $this->Locations = $locations;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLocations()
    {
        return $this->Locations;
    }

    /**
     * @param  boolean[optional] $options
     * @return ArticleIncludes
     */
    public function setOptions($options)
    {
        $this->Options = $options;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param  boolean[optional] $price
     * @return ArticleIncludes
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param  boolean[optional] $rentArticles
     * @return ArticleIncludes
     */
    public function setRentArticles($rentArticles)
    {
        $this->RentArticles = $rentArticles;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getRentArticles()
    {
        return $this->RentArticles;
    }

    /**
     * @param  boolean[optional] $saleArticles
     * @return ArticleIncludes
     */
    public function setSaleArticles($saleArticles)
    {
        $this->SaleArticles = $saleArticles;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getSaleArticles()
    {
        return $this->SaleArticles;
    }

    /**
     * @param  boolean[optional] $soldOutArticles
     * @return ArticleIncludes
     */
    public function setSoldOutArticles($soldOutArticles)
    {
        $this->SoldOutArticles = $soldOutArticles;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getSoldOutArticles()
    {
        return $this->SoldOutArticles;
    }

    /**
     * @param  boolean[optional] $stock
     * @return ArticleIncludes
     */
    public function setStock($stock)
    {
        $this->Stock = $stock;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getStock()
    {
        return $this->Stock;
    }

    /**
     * @param  boolean[optional] $articleCategories
     * @return ArticleIncludes
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
     * @param  boolean[optional] $chipKnipArticles
     * @return ArticleIncludes
     */
    public function setChipKnipArticles($chipKnipArticles)
    {
        $this->ChipKnipArticles = $chipKnipArticles;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getChipKnipArticles()
    {
        return $this->ChipKnipArticles;
    }

    /**
     * @param  boolean[optional] $eTicketArticles
     * @return ArticleIncludes
     */
    public function setETicketArticles($eTicketArticles)
    {
        $this->ETicketArticles = $eTicketArticles;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getETicketArticles()
    {
        return $this->ETicketArticles;
    }
}
