<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RentalArticle extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RentalArticle';

    /**
     * @var float
     */
    protected $DefaultWarranty;

    /**
     * @var SimpleType\WarrantyCalculationType
     */
    protected $WarrantyCalculationType;

    /**
     * @var integer
     */
    protected $TotalItemsInStock;

    /**
     * @var integer
     */
    protected $AvailableToRent;

    /**
     * @var integer
     */
    protected $MaxToRent;

    /**
     * @var integer
     */
    protected $MaxDaysToRent;

    /**
     * @var integer
     */
    protected $MaxHoursToRent;

    /**
     * @var boolean
     */
    protected $NegativeSaldoAllowed;

    /**
     * @var ArrayOfRentalArticleComponent
     */
    protected $Components;

    /**
     * @var SimpleType\RentalPriceCalculationType
     */
    protected $RentalPriceCalculationType;

    /**
     * @var string
     */
    protected $MaxTimeToRent;

    /**
     * @param  float[optional] $defaultWarranty
     * @return RentalArticle
     */
    public function setDefaultWarranty($defaultWarranty)
    {
        $this->DefaultWarranty = $defaultWarranty;

        return $this;
    }

    /**
     * @return float
     */
    public function getDefaultWarranty()
    {
        return $this->DefaultWarranty;
    }

    /**
     * @param  SimpleType\WarrantyCalculationType[optional] $warrantyCalculationType
     * @return RentalArticle
     */
    public function setWarrantyCalculationType(
        SimpleType\WarrantyCalculationType $warrantyCalculationType = null
    ) {
        $this->WarrantyCalculationType = $warrantyCalculationType;

        return $this;
    }

    /**
     * @return SimpleType\WarrantyCalculationType
     */
    public function getWarrantyCalculationType()
    {
        return $this->WarrantyCalculationType;
    }

    /**
     * @param  integer[optional] $totalItemsInStock
     * @return RentalArticle
     */
    public function setTotalItemsInStock($totalItemsInStock)
    {
        $this->TotalItemsInStock = $totalItemsInStock;

        return $this;
    }

    /**
     * @return integer
     */
    public function getTotalItemsInStock()
    {
        return $this->TotalItemsInStock;
    }

    /**
     * @param  integer[optional] $availableToRent
     * @return RentalArticle
     */
    public function setAvailableToRent($availableToRent)
    {
        $this->AvailableToRent = $availableToRent;

        return $this;
    }

    /**
     * @return integer
     */
    public function getAvailableToRent()
    {
        return $this->AvailableToRent;
    }

    /**
     * @param  integer[optional] $maxToRent
     * @return RentalArticle
     */
    public function setMaxToRent($maxToRent)
    {
        $this->MaxToRent = $maxToRent;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaxToRent()
    {
        return $this->MaxToRent;
    }

    /**
     * @param  integer[optional] $maxDaysToRent
     * @return RentalArticle
     */
    public function setMaxDaysToRent($maxDaysToRent)
    {
        $this->MaxDaysToRent = $maxDaysToRent;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaxDaysToRent()
    {
        return $this->MaxDaysToRent;
    }

    /**
     * @param  integer[optional] $maxHoursToRent
     * @return RentalArticle
     */
    public function setMaxHoursToRent($maxHoursToRent)
    {
        $this->MaxHoursToRent = $maxHoursToRent;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaxHoursToRent()
    {
        return $this->MaxHoursToRent;
    }

    /**
     * @param  boolean[optional] $negativeSaldoAllowed
     * @return RentalArticle
     */
    public function setNegativeSaldoAllowed($negativeSaldoAllowed)
    {
        $this->NegativeSaldoAllowed = $negativeSaldoAllowed;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getNegativeSaldoAllowed()
    {
        return $this->NegativeSaldoAllowed;
    }

    /**
     * @param  ArrayOfRentalArticleComponent[optional] $components
     * @return RentalArticle
     */
    public function setComponents(ArrayOfRentalArticleComponent $components = null)
    {
        $this->Components = $components;

        return $this;
    }

    /**
     * @return ArrayOfRentalArticleComponent
     */
    public function getComponents()
    {
        return $this->Components;
    }

    /**
     * @param  SimpleType\RentalPriceCalculationType[optional] $rentalPriceCalculationType
     * @return RentalArticle
     */
    public function setRentalPriceCalculationType(
        SimpleType\RentalPriceCalculationType $rentalPriceCalculationType = null
    ) {
        $this->RentalPriceCalculationType = $rentalPriceCalculationType;

        return $this;
    }

    /**
     * @return SimpleType\RentalPriceCalculationType
     */
    public function getRentalPriceCalculationType()
    {
        return $this->RentalPriceCalculationType;
    }

    /**
     * @param  string[optional] $maxTimeToRent
     * @return RentalArticle
     */
    public function setMaxTimeToRent($maxTimeToRent)
    {
        $this->MaxTimeToRent = $maxTimeToRent;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaxTimeToRent()
    {
        return $this->MaxTimeToRent;
    }
}
