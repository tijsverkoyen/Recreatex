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
     * @var array $StockLocation
     */
    protected $StockLocation = array();

    /**
     * @param  array                $stockLocation
     * @return ArrayOfStockLocation
     */
    public function setStockLocation(array $stockLocation = array())
    {
        $this->StockLocation = $stockLocation;

        return $this;
    }

    /**
     * @return array
     */
    public function getStockLocation()
    {
        return $this->StockLocation;
    }
}
