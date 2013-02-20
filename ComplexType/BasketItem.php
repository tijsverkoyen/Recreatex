<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * Abstract class. An item that belongs in the Basket. (i.e. a Sale, Reservation, Rental of
 * something,...)
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class BasketItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'BasketItem';

    /**
     * @var SimpleType\Guid
     */
    protected $DivisionId;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var integer
     */
    protected $Quantity;

    /**
     * @var ArrayOfstring
     */
    protected $RuleNamesToIgnore;

    /**
     * @var float
     */
    protected $UnitPrice;

    /**
     * @param  SimpleType\Guid|null $divisionId
     * @return BasketItem
     */
    public function setDivisionId(SimpleType\Guid $divisionId = null)
    {
        $this->DivisionId = $divisionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getDivisionId()
    {
        return $this->DivisionId;
    }

    /**
     * @param  SimpleType\Guid|null $id
     * @return BasketItem
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  integer|null $quantity
     * @return BasketItem
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param  ArrayOfstring|null $ruleNamesToIgnore
     * @return BasketItem
     */
    public function setRuleNamesToIgnore(ArrayOfstring $ruleNamesToIgnore = null)
    {
        $this->RuleNamesToIgnore = $ruleNamesToIgnore;

        return $this;
    }

    /**
     * @return ArrayOfstring|null
     */
    public function getRuleNamesToIgnore()
    {
        return $this->RuleNamesToIgnore;
    }

    /**
     * @param  float|null $unitPrice
     * @return BasketItem
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
