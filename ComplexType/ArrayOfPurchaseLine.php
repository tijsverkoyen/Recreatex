<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPurchaseLine extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPurchaseLine';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $PurchaseLine = array();

    /**
     * @param  array               $purchaseLine
     * @return ArrayOfPurchaseLine
     */
    public function setPurchaseLine(array $purchaseLine = array())
    {
        $this->PurchaseLine = $purchaseLine;

        return $this;
    }

    /**
     * @return array
     */
    public function getPurchaseLine()
    {
        return $this->PurchaseLine;
    }
}
