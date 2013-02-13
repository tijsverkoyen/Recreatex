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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Code
     */
    protected $Code;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $DivisionId
     */
    protected $DivisionId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArticleGroup|null $Group
     */
    protected $Group;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Picture|null $Image
     */
    protected $Image;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ImageUrl
     */
    protected $ImageUrl;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfArticleIngredient|null $Ingredients
     */
    protected $Ingredients;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsRental
     */
    protected $IsRental;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfArticleOption|null $Options
     */
    protected $Options;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Price
     */
    protected $Price;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Stock
     */
    protected $Stock;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfStockLocation|null $StockLocations
     */
    protected $StockLocations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsStockItem
     */
    protected $IsStockItem;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfguid|null $Categories
     */
    protected $Categories;

    /**
     * @param  string|null $code
     * @return Article
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string|null $description
     * @return Article
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  SimpleType\Guid|null $divisionId
     * @return Article
     */
    public function setDivisionId(SimpleType\Guid $divisionId = null)
    {
        $this->DivisionId = $divisionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getDivisionId()
    {
        return $this->DivisionId;
    }

    /**
     * @param  ArticleGroup|null $group
     * @return Article
     */
    public function setGroup(ArticleGroup $group = null)
    {
        $this->Group = $group;

        return $this;
    }

    /**
     * @return ArticleGroup|null
     */
    public function getGroup()
    {
        return $this->Group;
    }

    /**
     * @param  SimpleType\Guid|null $id
     * @return Article
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  Picture|null $image
     * @return Article
     */
    public function setImage(Picture $image = null)
    {
        $this->Image = $image;

        return $this;
    }

    /**
     * @return Picture|null
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param  string|null $imageUrl
     * @return Article
     */
    public function setImageUrl($imageUrl)
    {
        $this->ImageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->ImageUrl;
    }

    /**
     * @param  ArrayOfArticleIngredient|null $ingredients
     * @return Article
     */
    public function setIngredients(ArrayOfArticleIngredient $ingredients = null)
    {
        $this->Ingredients = $ingredients;

        return $this;
    }

    /**
     * @return ArrayOfArticleIngredient|null
     */
    public function getIngredients()
    {
        return $this->Ingredients;
    }

    /**
     * @param  boolean|null $isRental
     * @return Article
     */
    public function setIsRental($isRental)
    {
        $this->IsRental = $isRental;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsRental()
    {
        return $this->IsRental;
    }

    /**
     * @param  string|null $name
     * @return Article
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  ArrayOfArticleOption|null $options
     * @return Article
     */
    public function setOptions(ArrayOfArticleOption $options = null)
    {
        $this->Options = $options;

        return $this;
    }

    /**
     * @return ArrayOfArticleOption|null
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param  float|null $price
     * @return Article
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param  float|null $stock
     * @return Article
     */
    public function setStock($stock)
    {
        $this->Stock = $stock;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getStock()
    {
        return $this->Stock;
    }

    /**
     * @param  ArrayOfStockLocation|null $stockLocations
     * @return Article
     */
    public function setStockLocations(ArrayOfStockLocation $stockLocations = null)
    {
        $this->StockLocations = $stockLocations;

        return $this;
    }

    /**
     * @return ArrayOfStockLocation|null
     */
    public function getStockLocations()
    {
        return $this->StockLocations;
    }

    /**
     * @param  boolean|null $isStockItem
     * @return Article
     */
    public function setIsStockItem($isStockItem)
    {
        $this->IsStockItem = $isStockItem;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsStockItem()
    {
        return $this->IsStockItem;
    }

    /**
     * @param  ArrayOfguid|null $categories
     * @return Article
     */
    public function setCategories(ArrayOfguid $categories = null)
    {
        $this->Categories = $categories;

        return $this;
    }

    /**
     * @return ArrayOfguid|null
     */
    public function getCategories()
    {
        return $this->Categories;
    }
}
