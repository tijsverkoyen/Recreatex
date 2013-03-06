<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ChildCareCentrePresenceHeader extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ChildCareCentrePresenceHeader';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var SimpleTypeGuid
     */
    protected $ChildCareCentreId;

    /**
     * @var string
     */
    protected $Day;

    /**
     * @var float
     */
    protected $PresenceLineAmount;

    /**
     * @var float
     */
    protected $PresenceVATAmount;

    /**
     * @var float
     */
    protected $PresenceAmount;

    /**
     * @var integer
     */
    protected $PresenceQuantity;

    /**
     * @var float
     */
    protected $FineLineAmount;

    /**
     * @var float
     */
    protected $FineVATAmount;

    /**
     * @var float
     */
    protected $FineAmount;

    /**
     * @var integer
     */
    protected $FineQuantity;

    /**
     * @var float
     */
    protected $TotalPresenceAmount;

    /**
     * @var float
     */
    protected $TotalFineAmount;

    /**
     * @var float
     */
    protected $TotalAmount;

    /**
     * @var ChildCareTariff
     */
    protected $ChildCareTariff;

    /**
     * @var ArrayOfChildCareCentrePresence
     */
    protected $Presences;

    /**
     * @param  SimpleType\Guid[optional]     $id
     * @return ChildCareCentrePresenceHeader
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
     * @param  SimpleType\Guid[optional]     $personId
     * @return ChildCareCentrePresenceHeader
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  SimpleType\Guid[optional]     $childCareCentreId
     * @return ChildCareCentrePresenceHeader
     */
    public function setChildCareCentreId(SimpleType\Guid $childCareCentreId = null)
    {
        $this->ChildCareCentreId = $childCareCentreId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getChildCareCentreId()
    {
        return $this->ChildCareCentreId;
    }

    /**
     * @param  string[optional]              $day
     * @return ChildCareCentrePresenceHeader
     */
    public function setDay($day)
    {
        $this->Day = $day;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDay()
    {
        return $this->Day;
    }

    /**
     * @param  float[optional]               $presenceLineAmount
     * @return ChildCareCentrePresenceHeader
     */
    public function setPresenceLineAmount($presenceLineAmount)
    {
        $this->PresenceLineAmount = $presenceLineAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPresenceLineAmount()
    {
        return $this->PresenceLineAmount;
    }

    /**
     * @param  float[optional]               $presenceVATAmount
     * @return ChildCareCentrePresenceHeader
     */
    public function setPresenceVATAmount($presenceVATAmount)
    {
        $this->PresenceVATAmount = $presenceVATAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPresenceVATAmount()
    {
        return $this->PresenceVATAmount;
    }

    /**
     * @param  float[optional]               $presenceAmount
     * @return ChildCareCentrePresenceHeader
     */
    public function setPresenceAmount($presenceAmount)
    {
        $this->PresenceAmount = $presenceAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPresenceAmount()
    {
        return $this->PresenceAmount;
    }

    /**
     * @param  integer[optional]             $presenceQuantity
     * @return ChildCareCentrePresenceHeader
     */
    public function setPresenceQuantity($presenceQuantity)
    {
        $this->PresenceQuantity = $presenceQuantity;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getPresenceQuantity()
    {
        return $this->PresenceQuantity;
    }

    /**
     * @param  float[optional]               $fineLineAmount
     * @return ChildCareCentrePresenceHeader
     */
    public function setFineLineAmount($fineLineAmount)
    {
        $this->FineLineAmount = $fineLineAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getFineLineAmount()
    {
        return $this->FineLineAmount;
    }

    /**
     * @param  float[optional]               $fineVATAmount
     * @return ChildCareCentrePresenceHeader
     */
    public function setFineVATAmount($fineVATAmount)
    {
        $this->FineVATAmount = $fineVATAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getFineVATAmount()
    {
        return $this->FineVATAmount;
    }

    /**
     * @param  float[optional]               $fineAmount
     * @return ChildCareCentrePresenceHeader
     */
    public function setFineAmount($fineAmount)
    {
        $this->FineAmount = $fineAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getFineAmount()
    {
        return $this->FineAmount;
    }

    /**
     * @param  integer[optional]             $fineQuantity
     * @return ChildCareCentrePresenceHeader
     */
    public function setFineQuantity($fineQuantity)
    {
        $this->FineQuantity = $fineQuantity;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getFineQuantity()
    {
        return $this->FineQuantity;
    }

    /**
     * @param  float[optional]               $totalPresenceAmount
     * @return ChildCareCentrePresenceHeader
     */
    public function setTotalPresenceAmount($totalPresenceAmount)
    {
        $this->TotalPresenceAmount = $totalPresenceAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalPresenceAmount()
    {
        return $this->TotalPresenceAmount;
    }

    /**
     * @param  float[optional]               $totalFineAmount
     * @return ChildCareCentrePresenceHeader
     */
    public function setTotalFineAmount($totalFineAmount)
    {
        $this->TotalFineAmount = $totalFineAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalFineAmount()
    {
        return $this->TotalFineAmount;
    }

    /**
     * @param  float[optional]               $totalAmount
     * @return ChildCareCentrePresenceHeader
     */
    public function setTotalAmount($totalAmount)
    {
        $this->TotalAmount = $totalAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }

    /**
     * @param  ChildCareTariff[optional]     $childCareTariff
     * @return ChildCareCentrePresenceHeader
     */
    public function setChildCareTariff(ChildCareTariff $childCareTariff = null)
    {
        $this->ChildCareTariff = $childCareTariff;

        return $this;
    }

    /**
     * @return ChildCareTariff|null
     */
    public function getChildCareTariff()
    {
        return $this->ChildCareTariff;
    }

    /**
     * @param  ArrayOfChildCareCentrePresence[optional] $presences
     * @return ChildCareCentrePresenceHeader
     */
    public function setPresences(ArrayOfChildCareCentrePresence $presences = null)
    {
        $this->Presences = $presences;

        return $this;
    }

    /**
     * @return ArrayOfChildCareCentrePresence|null
     */
    public function getPresences()
    {
        return $this->Presences;
    }
}
