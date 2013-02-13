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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $DivisionId
     */
    protected $DivisionId;

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
     * @var integer|null $Quantity
     */
    protected $Quantity;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfstring|null $RuleNamesToIgnore
     */
    protected $RuleNamesToIgnore;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $UnitPrice
     */
    protected $UnitPrice;


    /**
     * @param SimpleType\guid|null $divisionId
     * @return BasketItem
     */
    public function setDivisionId(SimpleType\guid $divisionId = null)
    {
        $this->DivisionId = $divisionId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getDivisionId()
    {
        return $this->DivisionId;
    }

    /**
     * @param SimpleType\guid|null $id
     * @return BasketItem
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
     * @param integer|null $quantity
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
     * @param ArrayOfstring|null $ruleNamesToIgnore
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
     * @param float|null $unitPrice
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

