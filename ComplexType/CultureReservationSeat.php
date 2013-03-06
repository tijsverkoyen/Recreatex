<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureReservationSeat extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureReservationSeat';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CultureEvent|null $CultureEvent
     */
    protected $CultureEvent;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $CultureEventId
     */
    protected $CultureEventId;

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
     * @var float|null $Price
     */
    protected $Price;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Price|null $PriceGroup
     */
    protected $PriceGroup;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PriceGroupName
     */
    protected $PriceGroupName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Seat|null $Seat
     */
    protected $Seat;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $SeatId
     */
    protected $SeatId;

    /**
     * @param  CultureEvent|null      $cultureEvent
     * @return CultureReservationSeat
     */
    public function setCultureEvent(CultureEvent $cultureEvent = null)
    {
        $this->CultureEvent = $cultureEvent;

        return $this;
    }

    /**
     * @return CultureEvent|null
     */
    public function getCultureEvent()
    {
        return $this->CultureEvent;
    }

    /**
     * @param  SimpleType\guid|null   $cultureEventId
     * @return CultureReservationSeat
     */
    public function setCultureEventId(SimpleType\guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  SimpleType\guid|null   $id
     * @return CultureReservationSeat
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
     * @param  float|null             $price
     * @return CultureReservationSeat
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param  Price|null             $priceGroup
     * @return CultureReservationSeat
     */
    public function setPriceGroup(Price $priceGroup = null)
    {
        $this->PriceGroup = $priceGroup;

        return $this;
    }

    /**
     * @return Price|null
     */
    public function getPriceGroup()
    {
        return $this->PriceGroup;
    }

    /**
     * @param  string|null            $priceGroupName
     * @return CultureReservationSeat
     */
    public function setPriceGroupName($priceGroupName)
    {
        $this->PriceGroupName = $priceGroupName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPriceGroupName()
    {
        return $this->PriceGroupName;
    }

    /**
     * @param  Seat|null              $seat
     * @return CultureReservationSeat
     */
    public function setSeat(Seat $seat = null)
    {
        $this->Seat = $seat;

        return $this;
    }

    /**
     * @return Seat|null
     */
    public function getSeat()
    {
        return $this->Seat;
    }

    /**
     * @param  SimpleType\guid|null   $seatId
     * @return CultureReservationSeat
     */
    public function setSeatId(SimpleType\guid $seatId = null)
    {
        $this->SeatId = $seatId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSeatId()
    {
        return $this->SeatId;
    }

}
