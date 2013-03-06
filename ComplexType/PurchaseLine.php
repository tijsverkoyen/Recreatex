<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PurchaseLine extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PurchaseLine';

    /**
     * @var float
     */
    protected $QtyPerPurchaseUnit;

    /**
     * @var float
     */
    protected $QuantityBase;

    /**
     * @var float
     */
    protected $QtyReceivedBase;

    /**
     * @var float
     */
    protected $UnitPrice;

    /**
     * @var float
     */
    protected $UnitPriceInc;

    /**
     * @var SimpleTypeGuid
     */
    protected $VatId;

    /**
     * @var float
     */
    protected $VatPercentage;

    /**
     * @var float
     */
    protected $VatAmount;

    /**
     * @var float
     */
    protected $DiscountPercentage;

    /**
     * @var float
     */
    protected $DiscountAmount;

    /**
     * @var float
     */
    protected $LineAmount;

    /**
     * @var float
     */
    protected $BaseAmount;

    /**
     * @var float
     */
    protected $Amount;

    /**
     * @var boolean
     */
    protected $IsVatInclusive;

    /**
     * @var SimpleType\PurchaseArticleCalculationType
     */
    protected $PriceCalculationType;

    /**
     * @param  float[optional] $qtyPerPurchaseUnit
     * @return PurchaseLine
     */
    public function setQtyPerPurchaseUnit($qtyPerPurchaseUnit)
    {
        $this->QtyPerPurchaseUnit = $qtyPerPurchaseUnit;

        return $this;
    }

    /**
     * @return float
     */
    public function getQtyPerPurchaseUnit()
    {
        return $this->QtyPerPurchaseUnit;
    }

    /**
     * @param  float[optional] $quantityBase
     * @return PurchaseLine
     */
    public function setQuantityBase($quantityBase)
    {
        $this->QuantityBase = $quantityBase;

        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityBase()
    {
        return $this->QuantityBase;
    }

    /**
     * @param  float[optional] $qtyReceivedBase
     * @return PurchaseLine
     */
    public function setQtyReceivedBase($qtyReceivedBase)
    {
        $this->QtyReceivedBase = $qtyReceivedBase;

        return $this;
    }

    /**
     * @return float
     */
    public function getQtyReceivedBase()
    {
        return $this->QtyReceivedBase;
    }

    /**
     * @param  float[optional] $unitPrice
     * @return PurchaseLine
     */
    public function setUnitPrice($unitPrice)
    {
        $this->UnitPrice = $unitPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * @param  float[optional] $unitPriceInc
     * @return PurchaseLine
     */
    public function setUnitPriceInc($unitPriceInc)
    {
        $this->UnitPriceInc = $unitPriceInc;

        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPriceInc()
    {
        return $this->UnitPriceInc;
    }

    /**
     * @param  SimpleType\Guid[optional] $vatId
     * @return PurchaseLine
     */
    public function setVatId(SimpleType\Guid $vatId = null)
    {
        $this->VatId = $vatId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getVatId()
    {
        return $this->VatId;
    }

    /**
     * @param  float[optional] $vatPercentage
     * @return PurchaseLine
     */
    public function setVatPercentage($vatPercentage)
    {
        $this->VatPercentage = $vatPercentage;

        return $this;
    }

    /**
     * @return float
     */
    public function getVatPercentage()
    {
        return $this->VatPercentage;
    }

    /**
     * @param  float[optional] $vatAmount
     * @return PurchaseLine
     */
    public function setVatAmount($vatAmount)
    {
        $this->VatAmount = $vatAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getVatAmount()
    {
        return $this->VatAmount;
    }

    /**
     * @param  float[optional] $discountPercentage
     * @return PurchaseLine
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->DiscountPercentage = $discountPercentage;

        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->DiscountPercentage;
    }

    /**
     * @param  float[optional] $discountAmount
     * @return PurchaseLine
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->DiscountAmount = $discountAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->DiscountAmount;
    }

    /**
     * @param  float[optional] $lineAmount
     * @return PurchaseLine
     */
    public function setLineAmount($lineAmount)
    {
        $this->LineAmount = $lineAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getLineAmount()
    {
        return $this->LineAmount;
    }

    /**
     * @param  float[optional] $baseAmount
     * @return PurchaseLine
     */
    public function setBaseAmount($baseAmount)
    {
        $this->BaseAmount = $baseAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseAmount()
    {
        return $this->BaseAmount;
    }

    /**
     * @param  float[optional] $amount
     * @return PurchaseLine
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param  boolean[optional] $isVatInclusive
     * @return PurchaseLine
     */
    public function setIsVatInclusive($isVatInclusive)
    {
        $this->IsVatInclusive = $isVatInclusive;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVatInclusive()
    {
        return $this->IsVatInclusive;
    }

    /**
     * @param  SimpleType\PurchaseArticleCalculationType[optional] $priceCalculationType
     * @return PurchaseLine
     */
    public function setPriceCalculationType(SimpleType\PurchaseArticleCalculationType $priceCalculationType = null)
    {
        $this->PriceCalculationType = $priceCalculationType;

        return $this;
    }

    /**
     * @return SimpleType\PurchaseArticleCalculationType
     */
    public function getPriceCalculationType()
    {
        return $this->PriceCalculationType;
    }
}
