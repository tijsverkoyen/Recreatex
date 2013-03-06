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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $DefaultWarranty
     */
    protected $DefaultWarranty;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\WarrantyCalculationType|null $WarrantyCalculationType
     */
    protected $WarrantyCalculationType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $TotalItemsInStock
     */
    protected $TotalItemsInStock;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $AvailableToRent
     */
    protected $AvailableToRent;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaxToRent
     */
    protected $MaxToRent;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaxDaysToRent
     */
    protected $MaxDaysToRent;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaxHoursToRent
     */
    protected $MaxHoursToRent;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $NegativeSaldoAllowed
     */
    protected $NegativeSaldoAllowed;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfRentalArticleComponent|null $Components
     */
    protected $Components;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\RentalPriceCalculationType|null $RentalPriceCalculationType
     */
    protected $RentalPriceCalculationType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $MaxTimeToRent
     */
    protected $MaxTimeToRent;

    /**
     * @param  float|null    $defaultWarranty
     * @return RentalArticle
     */
    public function setDefaultWarranty($defaultWarranty)
    {
        $this->DefaultWarranty = $defaultWarranty;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getDefaultWarranty()
    {
        return $this->DefaultWarranty;
    }

    /**
     * @param  SimpleType\WarrantyCalculationType|null $warrantyCalculationType
     * @return RentalArticle
     */
    public function setWarrantyCalculationType(SimpleType\WarrantyCalculationType $warrantyCalculationType = null)
    {
        $this->WarrantyCalculationType = $warrantyCalculationType;

        return $this;
    }

    /**
     * @return SimpleType\WarrantyCalculationType|null
     */
    public function getWarrantyCalculationType()
    {
        return $this->WarrantyCalculationType;
    }

    /**
     * @param  integer|null  $totalItemsInStock
     * @return RentalArticle
     */
    public function setTotalItemsInStock($totalItemsInStock)
    {
        $this->TotalItemsInStock = $totalItemsInStock;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getTotalItemsInStock()
    {
        return $this->TotalItemsInStock;
    }

    /**
     * @param  integer|null  $availableToRent
     * @return RentalArticle
     */
    public function setAvailableToRent($availableToRent)
    {
        $this->AvailableToRent = $availableToRent;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getAvailableToRent()
    {
        return $this->AvailableToRent;
    }

    /**
     * @param  integer|null  $maxToRent
     * @return RentalArticle
     */
    public function setMaxToRent($maxToRent)
    {
        $this->MaxToRent = $maxToRent;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaxToRent()
    {
        return $this->MaxToRent;
    }

    /**
     * @param  integer|null  $maxDaysToRent
     * @return RentalArticle
     */
    public function setMaxDaysToRent($maxDaysToRent)
    {
        $this->MaxDaysToRent = $maxDaysToRent;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaxDaysToRent()
    {
        return $this->MaxDaysToRent;
    }

    /**
     * @param  integer|null  $maxHoursToRent
     * @return RentalArticle
     */
    public function setMaxHoursToRent($maxHoursToRent)
    {
        $this->MaxHoursToRent = $maxHoursToRent;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaxHoursToRent()
    {
        return $this->MaxHoursToRent;
    }

    /**
     * @param  boolean|null  $negativeSaldoAllowed
     * @return RentalArticle
     */
    public function setNegativeSaldoAllowed($negativeSaldoAllowed)
    {
        $this->NegativeSaldoAllowed = $negativeSaldoAllowed;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getNegativeSaldoAllowed()
    {
        return $this->NegativeSaldoAllowed;
    }

    /**
     * @param  ArrayOfRentalArticleComponent|null $components
     * @return RentalArticle
     */
    public function setComponents(ArrayOfRentalArticleComponent $components = null)
    {
        $this->Components = $components;

        return $this;
    }

    /**
     * @return ArrayOfRentalArticleComponent|null
     */
    public function getComponents()
    {
        return $this->Components;
    }

    /**
     * @param  SimpleType\RentalPriceCalculationType|null $rentalPriceCalculationType
     * @return RentalArticle
     */
    public function setRentalPriceCalculationType(SimpleType\RentalPriceCalculationType $rentalPriceCalculationType = null)
    {
        $this->RentalPriceCalculationType = $rentalPriceCalculationType;

        return $this;
    }

    /**
     * @return SimpleType\RentalPriceCalculationType|null
     */
    public function getRentalPriceCalculationType()
    {
        return $this->RentalPriceCalculationType;
    }

    /**
     * @param  string|null   $maxTimeToRent
     * @return RentalArticle
     */
    public function setMaxTimeToRent($maxTimeToRent)
    {
        $this->MaxTimeToRent = $maxTimeToRent;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMaxTimeToRent()
    {
        return $this->MaxTimeToRent;
    }

}
