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

     * maxOccurs = unbounded     * @var array
     */
    protected $PurchaseOrder = array();

    /**
     * @param  array                $purchaseOrder
     * @return ArrayOfPurchaseOrder
     */
    public function setPurchaseOrder(array $purchaseOrder = array())
    {
        $this->PurchaseOrder = $purchaseOrder;

        return $this;
    }

    /**
     * @return array
     */
    public function getPurchaseOrder()
    {
        return $this->PurchaseOrder;
    }
}
