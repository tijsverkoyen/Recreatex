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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $OrderLines
     */
    protected $OrderLines;

    /**
     * @param  boolean|null          $orderLines
     * @return PurchaseOrderIncludes
     */
    public function setOrderLines($orderLines)
    {
        $this->OrderLines = $orderLines;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getOrderLines()
    {
        return $this->OrderLines;
    }

}
