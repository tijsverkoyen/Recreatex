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
     * @var string
     */
    protected $Code;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var SimpleTypeGuid
     */
    protected $DivisionId;

    /**
     * @var ArticleGroup
     */
    protected $Group;

    /**
     * @var SimpleTypeGuid
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
     * @var Attachment
     */
    protected $Attachment;

    /**
     * @var ArrayOfPicture
     */
    protected $ExtraImages;

    /**
     * @var ArrayOfstring
     */
    protected $ExtraImageUrls;

    /**
     * @param  string[optional] $code
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
     */
    public function setIngredients(ArrayOfArticleIngredient $ingredients = null)
    {
        $this->Ingredients = $ingredients;

        return $this;
    }

    /**
     * @return ArrayOfArticleIngredient
     */
    public function getIngredients()
    {
        return $this->Ingredients;
    }

    /**
     * @param  boolean[optional] $isRental
     * @return ArticleBase
     */
    public function setIsRental($isRental)
    {
        $this->IsRental = $isRental;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRental()
    {
        return $this->IsRental;
    }

    /**
     * @param  string[optional] $name
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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
     * @return ArticleBase
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

    /**
     * @param  Attachment[optional] $attachment
     * @return ArticleBase
     */
    public function setAttachment(Attachment $attachment = null)
    {
        $this->Attachment = $attachment;

        return $this;
    }

    /**
     * @return Attachment
     */
    public function getAttachment()
    {
        return $this->Attachment;
    }

    /**
     * @param  ArrayOfPicture[optional] $extraImages
     * @return ArticleBase
     */
    public function setExtraImages(ArrayOfPicture $extraImages = null)
    {
        $this->ExtraImages = $extraImages;

        return $this;
    }

    /**
     * @return ArrayOfPicture
     */
    public function getExtraImages()
    {
        return $this->ExtraImages;
    }

    /**
     * @param  ArrayOfstring[optional] $extraImageUrls
     * @return ArticleBase
     */
    public function setExtraImageUrls(ArrayOfstring $extraImageUrls = null)
    {
        $this->ExtraImageUrls = $extraImageUrls;

        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getExtraImageUrls()
    {
        return $this->ExtraImageUrls;
    }
}
