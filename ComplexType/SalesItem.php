<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SalesItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SalesItem';

    /**
     * @var ArrayOfstring
     */
    protected $Barcodes;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var float
     */
    protected $Quantity;

    /**
     * @var float
     */
    protected $UnitPrice;

    /**
     * @param  ArrayOfstring[optional] $barcodes
     * @return SalesItem
     */
    public function setBarcodes(ArrayOfstring $barcodes = null)
    {
        $this->Barcodes = $barcodes;

        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getBarcodes()
    {
        return $this->Barcodes;
    }

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return SalesItem
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string[optional] $name
     * @return SalesItem
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  float[optional] $quantity
     * @return SalesItem
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param  float[optional] $unitPrice
     * @return SalesItem
     */
    public function setUnitPrice($unitPrice)
    {
        $this->UnitPrice = $unitPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }
}
