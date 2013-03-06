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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $OrderNo
     */
    protected $OrderNo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\PurchaseOrderState|null $OrderState
     */
    protected $OrderState;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PostingDate
     */
    protected $PostingDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CreationDate
     */
    protected $CreationDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PromisedDeliveryDate
     */
    protected $PromisedDeliveryDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfPurchaseLine|null $PurchaseLines
     */
    protected $PurchaseLines;

    /**
     * @param  string|null   $orderNo
     * @return PurchaseOrder
     */
    public function setOrderNo($orderNo)
    {
        $this->OrderNo = $orderNo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderNo()
    {
        return $this->OrderNo;
    }

    /**
     * @param  SimpleType\PurchaseOrderState|null $orderState
     * @return PurchaseOrder
     */
    public function setOrderState(SimpleType\PurchaseOrderState $orderState = null)
    {
        $this->OrderState = $orderState;

        return $this;
    }

    /**
     * @return SimpleType\PurchaseOrderState|null
     */
    public function getOrderState()
    {
        return $this->OrderState;
    }

    /**
     * @param  string|null   $postingDate
     * @return PurchaseOrder
     */
    public function setPostingDate($postingDate)
    {
        $this->PostingDate = $postingDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostingDate()
    {
        return $this->PostingDate;
    }

    /**
     * @param  string|null   $creationDate
     * @return PurchaseOrder
     */
    public function setCreationDate($creationDate)
    {
        $this->CreationDate = $creationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }

    /**
     * @param  string|null   $promisedDeliveryDate
     * @return PurchaseOrder
     */
    public function setPromisedDeliveryDate($promisedDeliveryDate)
    {
        $this->PromisedDeliveryDate = $promisedDeliveryDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPromisedDeliveryDate()
    {
        return $this->PromisedDeliveryDate;
    }

    /**
     * @param  ArrayOfPurchaseLine|null $purchaseLines
     * @return PurchaseOrder
     */
    public function setPurchaseLines(ArrayOfPurchaseLine $purchaseLines = null)
    {
        $this->PurchaseLines = $purchaseLines;

        return $this;
    }

    /**
     * @return ArrayOfPurchaseLine|null
     */
    public function getPurchaseLines()
    {
        return $this->PurchaseLines;
    }

}
