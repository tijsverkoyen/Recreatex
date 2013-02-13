<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfSalesItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfSalesItem';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SalesItem[] $SalesItem
     */
    protected $SalesItem = array();

    /**
     * @param  SalesItem[]      $salesItem
     * @return ArrayOfSalesItem
     */
    public function setSalesItem(array $salesItem = array())
    {
        $this->SalesItem = $salesItem;

        return $this;
    }

    /**
     * @return SalesItem[]
     */
    public function getSalesItem()
    {
        return $this->SalesItem;
    }
}
