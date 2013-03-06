<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPurchaseOrder extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPurchaseOrder';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var PurchaseOrder[] $PurchaseOrder
     */
    protected $PurchaseOrder = array();

    /**
     * @param  PurchaseOrder[]      $purchaseOrder
     * @return ArrayOfPurchaseOrder
     */
    public function setPurchaseOrder(array $purchaseOrder = array())
    {
        $this->PurchaseOrder = $purchaseOrder;

        return $this;
    }

    /**
     * @return PurchaseOrder[]
     */
    public function getPurchaseOrder()
    {
        return $this->PurchaseOrder;
    }

}
