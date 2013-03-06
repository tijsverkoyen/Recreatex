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
     * @var SimpleType\guid|null $ArticleId
     */
    protected $ArticleId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ArticleCode
     */
    protected $ArticleCode;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ArticleName
     */
    protected $ArticleName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ArticleDescription
     */
    protected $ArticleDescription;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PriceGroup|null $PriceGroup
     */
    protected $PriceGroup;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Quantity
     */
    protected $Quantity;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $UnitPrice
     */
    protected $UnitPrice;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Amount
     */
    protected $Amount;

    /**
     * @param  SimpleType\guid|null  $id
     * @return OrganisedVisitArticle
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
     * @param  SimpleType\guid|null  $articleId
     * @return OrganisedVisitArticle
     */
    public function setArticleId(SimpleType\guid $articleId = null)
    {
        $this->ArticleId = $articleId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getArticleId()
    {
        return $this->ArticleId;
    }

    /**
     * @param  string|null           $articleCode
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
     * @param  string|null           $articleName
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
     * @param  string|null           $articleDescription
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
     * @param  PriceGroup|null       $priceGroup
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
     * @param  integer|null          $quantity
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
     * @param  float|null            $unitPrice
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
     * @param  float|null            $amount
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
