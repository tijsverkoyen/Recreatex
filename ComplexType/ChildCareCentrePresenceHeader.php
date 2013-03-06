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
     * @var SimpleType\guid|null $PersonId
     */
    protected $PersonId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ChildCareCentreId
     */
    protected $ChildCareCentreId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Day
     */
    protected $Day;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $PresenceLineAmount
     */
    protected $PresenceLineAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $PresenceVATAmount
     */
    protected $PresenceVATAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $PresenceAmount
     */
    protected $PresenceAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $PresenceQuantity
     */
    protected $PresenceQuantity;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $FineLineAmount
     */
    protected $FineLineAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $FineVATAmount
     */
    protected $FineVATAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $FineAmount
     */
    protected $FineAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $FineQuantity
     */
    protected $FineQuantity;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $TotalPresenceAmount
     */
    protected $TotalPresenceAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $TotalFineAmount
     */
    protected $TotalFineAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $TotalAmount
     */
    protected $TotalAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ChildCareTariff|null $ChildCareTariff
     */
    protected $ChildCareTariff;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfChildCareCentrePresence|null $Presences
     */
    protected $Presences;

    /**
     * @param  SimpleType\guid|null          $id
     * @return ChildCareCentrePresenceHeader
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
     * @param  SimpleType\guid|null          $personId
     * @return ChildCareCentrePresenceHeader
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  SimpleType\guid|null          $childCareCentreId
     * @return ChildCareCentrePresenceHeader
     */
    public function setChildCareCentreId(SimpleType\guid $childCareCentreId = null)
    {
        $this->ChildCareCentreId = $childCareCentreId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getChildCareCentreId()
    {
        return $this->ChildCareCentreId;
    }

    /**
     * @param  string|null                   $day
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
     * @param  float|null                    $presenceLineAmount
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
     * @param  float|null                    $presenceVATAmount
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
     * @param  float|null                    $presenceAmount
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
     * @param  integer|null                  $presenceQuantity
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
     * @param  float|null                    $fineLineAmount
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
     * @param  float|null                    $fineVATAmount
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
     * @param  float|null                    $fineAmount
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
     * @param  integer|null                  $fineQuantity
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
     * @param  float|null                    $totalPresenceAmount
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
     * @param  float|null                    $totalFineAmount
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
     * @param  float|null                    $totalAmount
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
     * @param  ChildCareTariff|null          $childCareTariff
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
     * @param  ArrayOfChildCareCentrePresence|null $presences
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
