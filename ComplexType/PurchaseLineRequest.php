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
     * @var SimpleType\guid|null $PurchaseId
     */
    protected $PurchaseId;

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
     * @var string|null $Description
     */
    protected $Description;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description2
     */
    protected $Description2;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PurchaseUnitId
     */
    protected $PurchaseUnitId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Quantity
     */
    protected $Quantity;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $StockLocationId
     */
    protected $StockLocationId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Hours
     */
    protected $Hours;

    /**
     * @param  SimpleType\guid|null $id
     * @return PurchaseLineRequest
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
     * @param  SimpleType\guid|null $purchaseId
     * @return PurchaseLineRequest
     */
    public function setPurchaseId(SimpleType\guid $purchaseId = null)
    {
        $this->PurchaseId = $purchaseId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPurchaseId()
    {
        return $this->PurchaseId;
    }

    /**
     * @param  SimpleType\guid|null $articleId
     * @return PurchaseLineRequest
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
     * @param  string|null         $description
     * @return PurchaseLineRequest
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
     * @param  string|null         $description2
     * @return PurchaseLineRequest
     */
    public function setDescription2($description2)
    {
        $this->Description2 = $description2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription2()
    {
        return $this->Description2;
    }

    /**
     * @param  SimpleType\guid|null $purchaseUnitId
     * @return PurchaseLineRequest
     */
    public function setPurchaseUnitId(SimpleType\guid $purchaseUnitId = null)
    {
        $this->PurchaseUnitId = $purchaseUnitId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPurchaseUnitId()
    {
        return $this->PurchaseUnitId;
    }

    /**
     * @param  float|null          $quantity
     * @return PurchaseLineRequest
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param  SimpleType\guid|null $stockLocationId
     * @return PurchaseLineRequest
     */
    public function setStockLocationId(SimpleType\guid $stockLocationId = null)
    {
        $this->StockLocationId = $stockLocationId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getStockLocationId()
    {
        return $this->StockLocationId;
    }

    /**
     * @param  float|null          $hours
     * @return PurchaseLineRequest
     */
    public function setHours($hours)
    {
        $this->Hours = $hours;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getHours()
    {
        return $this->Hours;
    }

}
