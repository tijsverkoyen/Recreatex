<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PurchaseOrderIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PurchaseOrderIncludes';

    /**
     * @var boolean
     */
    protected $OrderLines;

    /**
     * @param  boolean[optional]     $orderLines
     * @return PurchaseOrderIncludes
     */
    public function setOrderLines($orderLines)
    {
        $this->OrderLines = $orderLines;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getOrderLines()
    {
        return $this->OrderLines;
    }
}
