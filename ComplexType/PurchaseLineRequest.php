<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PurchaseLineRequest extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PurchaseLineRequest';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * @var SimpleTypeGuid
     */
    protected $PurchaseId;

    /**

     * @var SimpleTypeGuid
     */
    protected $ArticleId;

    /**

     * @var string
     */
    protected $Description;

    /**

     * @var string
     */
    protected $Description2;

    /**

     * @var SimpleTypeGuid
     */
    protected $PurchaseUnitId;

    /**

     * @var float
     */
    protected $Quantity;

    /**

     * @var SimpleTypeGuid
     */
    protected $StockLocationId;

    /**

     * @var float
     */
    protected $Hours;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return PurchaseLineRequest
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
     * @param  SimpleType\Guid[optional] $purchaseId
     * @return PurchaseLineRequest
     */
    public function setPurchaseId(SimpleType\Guid $purchaseId = null)
    {
        $this->PurchaseId = $purchaseId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPurchaseId()
    {
        return $this->PurchaseId;
    }

    /**
     * @param  SimpleType\Guid[optional] $articleId
     * @return PurchaseLineRequest
     */
    public function setArticleId(SimpleType\Guid $articleId = null)
    {
        $this->ArticleId = $articleId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getArticleId()
    {
        return $this->ArticleId;
    }

    /**
     * @param  string[optional]    $description
     * @return PurchaseLineRequest
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
     * @param  string[optional]    $description2
     * @return PurchaseLineRequest
     */
    public function setDescription2($description2)
    {
        $this->Description2 = $description2;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription2()
    {
        return $this->Description2;
    }

    /**
     * @param  SimpleType\Guid[optional] $purchaseUnitId
     * @return PurchaseLineRequest
     */
    public function setPurchaseUnitId(SimpleType\Guid $purchaseUnitId = null)
    {
        $this->PurchaseUnitId = $purchaseUnitId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPurchaseUnitId()
    {
        return $this->PurchaseUnitId;
    }

    /**
     * @param  float[optional]     $quantity
     * @return PurchaseLineRequest
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param  SimpleType\Guid[optional] $stockLocationId
     * @return PurchaseLineRequest
     */
    public function setStockLocationId(SimpleType\Guid $stockLocationId = null)
    {
        $this->StockLocationId = $stockLocationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getStockLocationId()
    {
        return $this->StockLocationId;
    }

    /**
     * @param  float[optional]     $hours
     * @return PurchaseLineRequest
     */
    public function setHours($hours)
    {
        $this->Hours = $hours;

        return $this;
    }

    /**
     * @return float
     */
    public function getHours()
    {
        return $this->Hours;
    }
}
