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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfExpositionPeriodReservationEntry|null $Entries
     */
    protected $Entries;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ExpositionPeriodId
     */
    protected $ExpositionPeriodId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var LockTicket|null $LockTicket
     */
    protected $LockTicket;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Comments
     */
    protected $Comments;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfArticleSale|null $ArticleSales
     */
    protected $ArticleSales;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Donation
     */
    protected $Donation;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $OrderWithoutPayment
     */
    protected $OrderWithoutPayment;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $GiftAid
     */
    protected $GiftAid;

    /**
     * @param  ArrayOfExpositionPeriodReservationEntry|null $entries
     * @return ExpositionPeriodReservation
     */
    public function setEntries(ArrayOfExpositionPeriodReservationEntry $entries = null)
    {
        $this->Entries = $entries;

        return $this;
    }

    /**
     * @return ArrayOfExpositionPeriodReservationEntry|null
     */
    public function getEntries()
    {
        return $this->Entries;
    }

    /**
     * @param  SimpleType\guid|null        $expositionPeriodId
     * @return ExpositionPeriodReservation
     */
    public function setExpositionPeriodId(SimpleType\guid $expositionPeriodId = null)
    {
        $this->ExpositionPeriodId = $expositionPeriodId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getExpositionPeriodId()
    {
        return $this->ExpositionPeriodId;
    }

    /**
     * @param  LockTicket|null             $lockTicket
     * @return ExpositionPeriodReservation
     */
    public function setLockTicket(LockTicket $lockTicket = null)
    {
        $this->LockTicket = $lockTicket;

        return $this;
    }

    /**
     * @return LockTicket|null
     */
    public function getLockTicket()
    {
        return $this->LockTicket;
    }

    /**
     * @param  string|null                 $comments
     * @return ExpositionPeriodReservation
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param  ArrayOfArticleSale|null     $articleSales
     * @return ExpositionPeriodReservation
     */
    public function setArticleSales(ArrayOfArticleSale $articleSales = null)
    {
        $this->ArticleSales = $articleSales;

        return $this;
    }

    /**
     * @return ArrayOfArticleSale|null
     */
    public function getArticleSales()
    {
        return $this->ArticleSales;
    }

    /**
     * @param  boolean|null                $donation
     * @return ExpositionPeriodReservation
     */
    public function setDonation($donation)
    {
        $this->Donation = $donation;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getDonation()
    {
        return $this->Donation;
    }

    /**
     * @param  boolean|null                $orderWithoutPayment
     * @return ExpositionPeriodReservation
     */
    public function setOrderWithoutPayment($orderWithoutPayment)
    {
        $this->OrderWithoutPayment = $orderWithoutPayment;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getOrderWithoutPayment()
    {
        return $this->OrderWithoutPayment;
    }

    /**
     * @param  boolean|null                $giftAid
     * @return ExpositionPeriodReservation
     */
    public function setGiftAid($giftAid)
    {
        $this->GiftAid = $giftAid;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getGiftAid()
    {
        return $this->GiftAid;
    }

}
