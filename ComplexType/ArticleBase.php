<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArticleBase extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArticleBase';

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
     * @var SimpleType\guid|null $DivisionId
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
     * @var SimpleType\guid|null $Id
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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Attachment|null $Attachment
     */
    protected $Attachment;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfPicture|null $ExtraImages
     */
    protected $ExtraImages;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfstring|null $ExtraImageUrls
     */
    protected $ExtraImageUrls;

    /**
     * @param  string|null $code
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @param  SimpleType\guid|null $divisionId
     * @return ArticleBase
     */
    public function setDivisionId(SimpleType\guid $divisionId = null)
    {
        $this->DivisionId = $divisionId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getDivisionId()
    {
        return $this->DivisionId;
    }

    /**
     * @param  ArticleGroup|null $group
     * @return ArticleBase
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
     * @param  SimpleType\guid|null $id
     * @return ArticleBase
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  Picture|null $image
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @param  float|null  $price
     * @return ArticleBase
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
     * @param  float|null  $stock
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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

    /**
     * @param  Attachment|null $attachment
     * @return ArticleBase
     */
    public function setAttachment(Attachment $attachment = null)
    {
        $this->Attachment = $attachment;

        return $this;
    }

    /**
     * @return Attachment|null
     */
    public function getAttachment()
    {
        return $this->Attachment;
    }

    /**
     * @param  ArrayOfPicture|null $extraImages
     * @return ArticleBase
     */
    public function setExtraImages(ArrayOfPicture $extraImages = null)
    {
        $this->ExtraImages = $extraImages;

        return $this;
    }

    /**
     * @return ArrayOfPicture|null
     */
    public function getExtraImages()
    {
        return $this->ExtraImages;
    }

    /**
     * @param  ArrayOfstring|null $extraImageUrls
     * @return ArticleBase
     */
    public function setExtraImageUrls(ArrayOfstring $extraImageUrls = null)
    {
        $this->ExtraImageUrls = $extraImageUrls;

        return $this;
    }

    /**
     * @return ArrayOfstring|null
     */
    public function getExtraImageUrls()
    {
        return $this->ExtraImageUrls;
    }

}
