<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfStockLocation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfStockLocation';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var StockLocation[] $StockLocation
     */
    protected $StockLocation = array();

    /**
     * @param  StockLocation[]      $stockLocation
     * @return ArrayOfStockLocation
     */
    public function setStockLocation(array $stockLocation = array())
    {
        $this->StockLocation = $stockLocation;

        return $this;
    }

    /**
     * @return StockLocation[]
     */
    public function getStockLocation()
    {
        return $this->StockLocation;
    }
}
