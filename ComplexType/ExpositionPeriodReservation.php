<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExpositionPeriodReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpositionPeriodReservation';

    /**
     * @var ArrayOfExpositionPeriodReservationEntry
     */
    protected $Entries;

    /**
     * @var SimpleType\Guid
     */
    protected $ExpositionPeriodId;

    /**
     * @var LockTicket
     */
    protected $LockTicket;

    /**
     * @var string
     */
    protected $Comments;

    /**
     * @var ArrayOfArticleSale
     */
    protected $ArticleSales;

    /**
     * @var boolean
     */
    protected $Donation;

    /**
     * @var boolean
     */
    protected $OrderWithoutPayment;

    /**
     * @var boolean
     */
    protected $GiftAid;

    /**
     * @param  ArrayOfExpositionPeriodReservationEntry[optional] $entries
     * @return ExpositionPeriodReservation
     */
    public function setEntries(ArrayOfExpositionPeriodReservationEntry $entries = null)
    {
        $this->Entries = $entries;

        return $this;
    }

    /**
     * @return ArrayOfExpositionPeriodReservationEntry
     */
    public function getEntries()
    {
        return $this->Entries;
    }

    /**
     * @param  SimpleType\Guid[optional]   $expositionPeriodId
     * @return ExpositionPeriodReservation
     */
    public function setExpositionPeriodId(SimpleType\Guid $expositionPeriodId = null)
    {
        $this->ExpositionPeriodId = $expositionPeriodId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getExpositionPeriodId()
    {
        return $this->ExpositionPeriodId;
    }

    /**
     * @param  LockTicket[optional]        $lockTicket
     * @return ExpositionPeriodReservation
     */
    public function setLockTicket(LockTicket $lockTicket = null)
    {
        $this->LockTicket = $lockTicket;

        return $this;
    }

    /**
     * @return LockTicket
     */
    public function getLockTicket()
    {
        return $this->LockTicket;
    }

    /**
     * @param  string[optional]            $comments
     * @return ExpositionPeriodReservation
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param  ArrayOfArticleSale[optional] $articleSales
     * @return ExpositionPeriodReservation
     */
    public function setArticleSales(ArrayOfArticleSale $articleSales = null)
    {
        $this->ArticleSales = $articleSales;

        return $this;
    }

    /**
     * @return ArrayOfArticleSale
     */
    public function getArticleSales()
    {
        return $this->ArticleSales;
    }

    /**
     * @param  boolean[optional]           $donation
     * @return ExpositionPeriodReservation
     */
    public function setDonation($donation)
    {
        $this->Donation = $donation;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDonation()
    {
        return $this->Donation;
    }

    /**
     * @param  boolean[optional]           $orderWithoutPayment
     * @return ExpositionPeriodReservation
     */
    public function setOrderWithoutPayment($orderWithoutPayment)
    {
        $this->OrderWithoutPayment = $orderWithoutPayment;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getOrderWithoutPayment()
    {
        return $this->OrderWithoutPayment;
    }

    /**
     * @param  boolean[optional]           $giftAid
     * @return ExpositionPeriodReservation
     */
    public function setGiftAid($giftAid)
    {
        $this->GiftAid = $giftAid;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getGiftAid()
    {
        return $this->GiftAid;
    }
}
