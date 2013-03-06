<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class OrganisedVisitArticle extends ComplexTypeAbstract
{
    const CLASS_NAME = 'OrganisedVisitArticle';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $ArticleId;

    /**
     * @var string
     */
    protected $ArticleCode;

    /**
     * @var string
     */
    protected $ArticleName;

    /**
     * @var string
     */
    protected $ArticleDescription;

    /**
     * @var PriceGroup
     */
    protected $PriceGroup;

    /**
     * @var integer
     */
    protected $Quantity;

    /**
     * @var float
     */
    protected $UnitPrice;

    /**
     * @var float
     */
    protected $Amount;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return OrganisedVisitArticle
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
     * @param  SimpleType\Guid[optional] $articleId
     * @return OrganisedVisitArticle
     */
    public function setArticleId(SimpleType\Guid $articleId = null)
    {
        $this->ArticleId = $articleId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getArticleId()
    {
        return $this->ArticleId;
    }

    /**
     * @param  string[optional]      $articleCode
     * @return OrganisedVisitArticle
     */
    public function setArticleCode($articleCode)
    {
        $this->ArticleCode = $articleCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getArticleCode()
    {
        return $this->ArticleCode;
    }

    /**
     * @param  string[optional]      $articleName
     * @return OrganisedVisitArticle
     */
    public function setArticleName($articleName)
    {
        $this->ArticleName = $articleName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getArticleName()
    {
        return $this->ArticleName;
    }

    /**
     * @param  string[optional]      $articleDescription
     * @return OrganisedVisitArticle
     */
    public function setArticleDescription($articleDescription)
    {
        $this->ArticleDescription = $articleDescription;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getArticleDescription()
    {
        return $this->ArticleDescription;
    }

    /**
     * @param  PriceGroup[optional]  $priceGroup
     * @return OrganisedVisitArticle
     */
    public function setPriceGroup(PriceGroup $priceGroup = null)
    {
        $this->PriceGroup = $priceGroup;

        return $this;
    }

    /**
     * @return PriceGroup|null
     */
    public function getPriceGroup()
    {
        return $this->PriceGroup;
    }

    /**
     * @param  integer[optional]     $quantity
     * @return OrganisedVisitArticle
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param  float[optional]       $unitPrice
     * @return OrganisedVisitArticle
     */
    public function setUnitPrice($unitPrice)
    {
        $this->UnitPrice = $unitPrice;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * @param  float[optional]       $amount
     * @return OrganisedVisitArticle
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
}
