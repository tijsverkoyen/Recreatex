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

     * maxOccurs = 1     * @var SimpleTypeGuid
     */
    protected $VendorId;

    /**

     * maxOccurs = 1     * @var float
     */
    protected $Price;

    /**

     * maxOccurs = 1     * @var ArticleUnit
     */
    protected $PriceUnit;

    /**

     * maxOccurs = 1     * @var ArticleUnit
     */
    protected $PurchaseUnit;

    /**
     * @param  SimpleType\Guid[optional] $vendorId
     * @return VendorArticle
     */
    public function setVendorId(SimpleType\Guid $vendorId = null)
    {
        $this->VendorId = $vendorId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getVendorId()
    {
        return $this->VendorId;
    }

    /**
     * @param  float[optional] $price
     * @return VendorArticle
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
     * @param  ArticleUnit[optional] $priceUnit
     * @return VendorArticle
     */
    public function setPriceUnit(ArticleUnit $priceUnit = null)
    {
        $this->PriceUnit = $priceUnit;

        return $this;
    }

    /**
     * @return ArticleUnit
     */
    public function getPriceUnit()
    {
        return $this->PriceUnit;
    }

    /**
     * @param  ArticleUnit[optional] $purchaseUnit
     * @return VendorArticle
     */
    public function setPurchaseUnit(ArticleUnit $purchaseUnit = null)
    {
        $this->PurchaseUnit = $purchaseUnit;

        return $this;
    }

    /**
     * @return ArticleUnit
     */
    public function getPurchaseUnit()
    {
        return $this->PurchaseUnit;
    }
}
