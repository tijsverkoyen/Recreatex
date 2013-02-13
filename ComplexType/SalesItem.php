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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfstring|null $Barcodes
     */
    protected $Barcodes;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Quantity
     */
    protected $Quantity;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $UnitPrice
     */
    protected $UnitPrice;


    /**
     * @param ArrayOfstring|null $barcodes
     * @return SalesItem
     */
    public function setBarcodes(ArrayOfstring $barcodes = null)
    {
        $this->Barcodes = $barcodes;

        return $this;
    }

    /**
     * @return ArrayOfstring|null
     */
    public function getBarcodes()
    {
        return $this->Barcodes;
    }

    /**
     * @param SimpleType\guid|null $id
     * @return SalesItem
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string|null $name
     * @return SalesItem
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param float|null $quantity
     * @return SalesItem
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param float|null $unitPrice
     * @return SalesItem
     */
    public function setUnitPrice($unitPrice)
    {
        $this->UnitPrice = $unitPrice;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }


}
