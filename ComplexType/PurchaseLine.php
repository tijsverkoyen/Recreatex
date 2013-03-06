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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $QtyPerPurchaseUnit
     */
    protected $QtyPerPurchaseUnit;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $QuantityBase
     */
    protected $QuantityBase;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $QtyReceivedBase
     */
    protected $QtyReceivedBase;

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
     * @var float|null $UnitPriceInc
     */
    protected $UnitPriceInc;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $VatId
     */
    protected $VatId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $VatPercentage
     */
    protected $VatPercentage;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $VatAmount
     */
    protected $VatAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $DiscountPercentage
     */
    protected $DiscountPercentage;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $DiscountAmount
     */
    protected $DiscountAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $LineAmount
     */
    protected $LineAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $BaseAmount
     */
    protected $BaseAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Amount
     */
    protected $Amount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsVatInclusive
     */
    protected $IsVatInclusive;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\PurchaseArticleCalculationType|null $PriceCalculationType
     */
    protected $PriceCalculationType;

    /**
     * @param  float|null   $qtyPerPurchaseUnit
     * @return PurchaseLine
     */
    public function setQtyPerPurchaseUnit($qtyPerPurchaseUnit)
    {
        $this->QtyPerPurchaseUnit = $qtyPerPurchaseUnit;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getQtyPerPurchaseUnit()
    {
        return $this->QtyPerPurchaseUnit;
    }

    /**
     * @param  float|null   $quantityBase
     * @return PurchaseLine
     */
    public function setQuantityBase($quantityBase)
    {
        $this->QuantityBase = $quantityBase;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getQuantityBase()
    {
        return $this->QuantityBase;
    }

    /**
     * @param  float|null   $qtyReceivedBase
     * @return PurchaseLine
     */
    public function setQtyReceivedBase($qtyReceivedBase)
    {
        $this->QtyReceivedBase = $qtyReceivedBase;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getQtyReceivedBase()
    {
        return $this->QtyReceivedBase;
    }

    /**
     * @param  float|null   $unitPrice
     * @return PurchaseLine
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
     * @param  float|null   $unitPriceInc
     * @return PurchaseLine
     */
    public function setUnitPriceInc($unitPriceInc)
    {
        $this->UnitPriceInc = $unitPriceInc;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getUnitPriceInc()
    {
        return $this->UnitPriceInc;
    }

    /**
     * @param  SimpleType\guid|null $vatId
     * @return PurchaseLine
     */
    public function setVatId(SimpleType\guid $vatId = null)
    {
        $this->VatId = $vatId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getVatId()
    {
        return $this->VatId;
    }

    /**
     * @param  float|null   $vatPercentage
     * @return PurchaseLine
     */
    public function setVatPercentage($vatPercentage)
    {
        $this->VatPercentage = $vatPercentage;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getVatPercentage()
    {
        return $this->VatPercentage;
    }

    /**
     * @param  float|null   $vatAmount
     * @return PurchaseLine
     */
    public function setVatAmount($vatAmount)
    {
        $this->VatAmount = $vatAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getVatAmount()
    {
        return $this->VatAmount;
    }

    /**
     * @param  float|null   $discountPercentage
     * @return PurchaseLine
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->DiscountPercentage = $discountPercentage;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getDiscountPercentage()
    {
        return $this->DiscountPercentage;
    }

    /**
     * @param  float|null   $discountAmount
     * @return PurchaseLine
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->DiscountAmount = $discountAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getDiscountAmount()
    {
        return $this->DiscountAmount;
    }

    /**
     * @param  float|null   $lineAmount
     * @return PurchaseLine
     */
    public function setLineAmount($lineAmount)
    {
        $this->LineAmount = $lineAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getLineAmount()
    {
        return $this->LineAmount;
    }

    /**
     * @param  float|null   $baseAmount
     * @return PurchaseLine
     */
    public function setBaseAmount($baseAmount)
    {
        $this->BaseAmount = $baseAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getBaseAmount()
    {
        return $this->BaseAmount;
    }

    /**
     * @param  float|null   $amount
     * @return PurchaseLine
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

    /**
     * @param  boolean|null $isVatInclusive
     * @return PurchaseLine
     */
    public function setIsVatInclusive($isVatInclusive)
    {
        $this->IsVatInclusive = $isVatInclusive;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsVatInclusive()
    {
        return $this->IsVatInclusive;
    }

    /**
     * @param  SimpleType\PurchaseArticleCalculationType|null $priceCalculationType
     * @return PurchaseLine
     */
    public function setPriceCalculationType(SimpleType\PurchaseArticleCalculationType $priceCalculationType = null)
    {
        $this->PriceCalculationType = $priceCalculationType;

        return $this;
    }

    /**
     * @return SimpleType\PurchaseArticleCalculationType|null
     */
    public function getPriceCalculationType()
    {
        return $this->PriceCalculationType;
    }

}
