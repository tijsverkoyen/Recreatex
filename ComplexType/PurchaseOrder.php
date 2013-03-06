<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PurchaseOrder extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PurchaseOrder';

    /**
     * @var string
     */
    protected $OrderNo;

    /**
     * @var SimpleType\PurchaseOrderState
     */
    protected $OrderState;

    /**
     * @var string
     */
    protected $PostingDate;

    /**
     * @var string
     */
    protected $CreationDate;

    /**
     * @var string
     */
    protected $PromisedDeliveryDate;

    /**
     * @var ArrayOfPurchaseLine
     */
    protected $PurchaseLines;

    /**
     * @param  string[optional] $orderNo
     * @return PurchaseOrder
     */
    public function setOrderNo($orderNo)
    {
        $this->OrderNo = $orderNo;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNo()
    {
        return $this->OrderNo;
    }

    /**
     * @param  SimpleType\PurchaseOrderState[optional] $orderState
     * @return PurchaseOrder
     */
    public function setOrderState(SimpleType\PurchaseOrderState $orderState = null)
    {
        $this->OrderState = $orderState;

        return $this;
    }

    /**
     * @return SimpleType\PurchaseOrderState
     */
    public function getOrderState()
    {
        return $this->OrderState;
    }

    /**
     * @param  string[optional] $postingDate
     * @return PurchaseOrder
     */
    public function setPostingDate($postingDate)
    {
        $this->PostingDate = $postingDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostingDate()
    {
        return $this->PostingDate;
    }

    /**
     * @param  string[optional] $creationDate
     * @return PurchaseOrder
     */
    public function setCreationDate($creationDate)
    {
        $this->CreationDate = $creationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }

    /**
     * @param  string[optional] $promisedDeliveryDate
     * @return PurchaseOrder
     */
    public function setPromisedDeliveryDate($promisedDeliveryDate)
    {
        $this->PromisedDeliveryDate = $promisedDeliveryDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getPromisedDeliveryDate()
    {
        return $this->PromisedDeliveryDate;
    }

    /**
     * @param  ArrayOfPurchaseLine[optional] $purchaseLines
     * @return PurchaseOrder
     */
    public function setPurchaseLines(ArrayOfPurchaseLine $purchaseLines = null)
    {
        $this->PurchaseLines = $purchaseLines;

        return $this;
    }

    /**
     * @return ArrayOfPurchaseLine
     */
    public function getPurchaseLines()
    {
        return $this->PurchaseLines;
    }
}
