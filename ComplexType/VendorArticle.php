<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class VendorArticle extends ComplexTypeAbstract
{
    const CLASS_NAME = 'VendorArticle';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $VendorId
     */
    protected $VendorId;

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
     * @var ArticleUnit|null $PriceUnit
     */
    protected $PriceUnit;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArticleUnit|null $PurchaseUnit
     */
    protected $PurchaseUnit;

    /**
     * @param  SimpleType\guid|null $vendorId
     * @return VendorArticle
     */
    public function setVendorId(SimpleType\guid $vendorId = null)
    {
        $this->VendorId = $vendorId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getVendorId()
    {
        return $this->VendorId;
    }

    /**
     * @param  float|null    $price
     * @return VendorArticle
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
     * @param  ArticleUnit|null $priceUnit
     * @return VendorArticle
     */
    public function setPriceUnit(ArticleUnit $priceUnit = null)
    {
        $this->PriceUnit = $priceUnit;

        return $this;
    }

    /**
     * @return ArticleUnit|null
     */
    public function getPriceUnit()
    {
        return $this->PriceUnit;
    }

    /**
     * @param  ArticleUnit|null $purchaseUnit
     * @return VendorArticle
     */
    public function setPurchaseUnit(ArticleUnit $purchaseUnit = null)
    {
        $this->PurchaseUnit = $purchaseUnit;

        return $this;
    }

    /**
     * @return ArticleUnit|null
     */
    public function getPurchaseUnit()
    {
        return $this->PurchaseUnit;
    }

}
