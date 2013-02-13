<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Article extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Article';

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var SimpleType\Guid
     */
    protected $DivisionId;

    /**
     * @var ArticleGroup
     */
    protected $Group;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var Picture
     */
    protected $Image;

    /**
     * @var string
     */
    protected $ImageUrl;

    /**
     * @var ArrayOfArticleIngredient
     */
    protected $Ingredients;

    /**
     *
     * @var boolean
     */
    protected $IsRental;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var ArrayOfArticleOption
     */
    protected $Options;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @var float
     */
    protected $Stock;

    /**
     * @var ArrayOfStockLocation
     */
    protected $StockLocations;

    /**
     * @var boolean
     */
    protected $IsStockItem;

    /**
     * @var ArrayOfGuid
     */
    protected $Categories;

    /**
     * @param  string[optional] $code
     * @return Article
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string[optional] $description
     * @return Article
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  SimpleType\Guid[optional] $divisionId
     * @return Article
     */
    public function setDivisionId(SimpleType\Guid $divisionId = null)
    {
        $this->DivisionId = $divisionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getDivisionId()
    {
        return $this->DivisionId;
    }

    /**
     * @param  ArticleGroup[optional] $group
     * @return Article
     */
    public function setGroup(ArticleGroup $group = null)
    {
        $this->Group = $group;

        return $this;
    }

    /**
     * @return ArticleGroup
     */
    public function getGroup()
    {
        return $this->Group;
    }

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return Article
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  Picture[optional] $image
     * @return Article
     */
    public function setImage(Picture $image = null)
    {
        $this->Image = $image;

        return $this;
    }

    /**
     * @return Picture
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param  string[optional] $imageUrl
     * @return Article
     */
    public function setImageUrl($imageUrl)
    {
        $this->ImageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->ImageUrl;
    }

    /**
     * @param  ArrayOfArticleIngredient[optional] $ingredients
     * @return Article
     */
    public function setIngredients(ArrayOfArticleIngredient $ingredients = null)
    {
        $this->Ingredients = $ingredients;

        return $this;
    }

    /**
     * @return ArrayOfArticleIngredient[optional]
     */
    public function getIngredients()
    {
        return $this->Ingredients;
    }

    /**
     * @param  boolean[optional] $isRental
     * @return Article
     */
    public function setIsRental($isRental)
    {
        $this->IsRental = $isRental;

        return $this;
    }

    /**
     * @return boolean[optional]
     */
    public function getIsRental()
    {
        return $this->IsRental;
    }

    /**
     * @param  string[optional] $name
     * @return Article
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  ArrayOfArticleOption[optional] $options
     * @return Article
     */
    public function setOptions(ArrayOfArticleOption $options = null)
    {
        $this->Options = $options;

        return $this;
    }

    /**
     * @return ArrayOfArticleOption
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param  float[optional] $price
     * @return Article
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param  float[optional] $stock
     * @return Article
     */
    public function setStock($stock)
    {
        $this->Stock = $stock;

        return $this;
    }

    /**
     * @return float
     */
    public function getStock()
    {
        return $this->Stock;
    }

    /**
     * @param  ArrayOfStockLocation[optional] $stockLocations
     * @return Article
     */
    public function setStockLocations(ArrayOfStockLocation $stockLocations = null)
    {
        $this->StockLocations = $stockLocations;

        return $this;
    }

    /**
     * @return ArrayOfStockLocation
     */
    public function getStockLocations()
    {
        return $this->StockLocations;
    }

    /**
     * @param  boolean[optional] $isStockItem
     * @return Article
     */
    public function setIsStockItem($isStockItem)
    {
        $this->IsStockItem = $isStockItem;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsStockItem()
    {
        return $this->IsStockItem;
    }

    /**
     * @param  ArrayOfguid[optional] $categories
     * @return Article
     */
    public function setCategories(ArrayOfguid $categories = null)
    {
        $this->Categories = $categories;

        return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getCategories()
    {
        return $this->Categories;
    }
}
