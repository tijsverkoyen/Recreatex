<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PurchaseArticle extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PurchaseArticle';

    /**
     * @var SimpleType\PurchaseArticleCalculationType
     */
    protected $PurchaseArticleCalculationType;

    /**
     * @var ArrayOfVendorArticle
     */
    protected $Vendors;

    /**
     * @var ArticleUnit
     */
    protected $BaseUnit;

    /**
     * @var ArrayOfArticleUnit
     */
    protected $ArticleUnits;

    /**
     * @param  SimpleType\PurchaseArticleCalculationType[optional] $purchaseArticleCalculationType
     * @return PurchaseArticle
     */
    public function setPurchaseArticleCalculationType(
        SimpleType\PurchaseArticleCalculationType $purchaseArticleCalculationType = null
    ) {
        $this->PurchaseArticleCalculationType = $purchaseArticleCalculationType;

        return $this;
    }

    /**
     * @return SimpleType\PurchaseArticleCalculationType|null
     */
    public function getPurchaseArticleCalculationType()
    {
        return $this->PurchaseArticleCalculationType;
    }

    /**
     * @param  ArrayOfVendorArticle[optional] $vendors
     * @return PurchaseArticle
     */
    public function setVendors(ArrayOfVendorArticle $vendors = null)
    {
        $this->Vendors = $vendors;

        return $this;
    }

    /**
     * @return ArrayOfVendorArticle|null
     */
    public function getVendors()
    {
        return $this->Vendors;
    }

    /**
     * @param  ArticleUnit[optional] $baseUnit
     * @return PurchaseArticle
     */
    public function setBaseUnit(ArticleUnit $baseUnit = null)
    {
        $this->BaseUnit = $baseUnit;

        return $this;
    }

    /**
     * @return ArticleUnit|null
     */
    public function getBaseUnit()
    {
        return $this->BaseUnit;
    }

    /**
     * @param  ArrayOfArticleUnit[optional] $articleUnits
     * @return PurchaseArticle
     */
    public function setArticleUnits(ArrayOfArticleUnit $articleUnits = null)
    {
        $this->ArticleUnits = $articleUnits;

        return $this;
    }

    /**
     * @return ArrayOfArticleUnit|null
     */
    public function getArticleUnits()
    {
        return $this->ArticleUnits;
    }
}
