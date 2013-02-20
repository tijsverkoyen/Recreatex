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
     * @var CultureEvent
     */
    protected $CultureEvent;

    /**
     * @var SimpleType\Guid
     */
    protected $CultureEventId;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @var Price
     */
    protected $PriceGroup;

    /**
     * @var string
     */
    protected $PriceGroupName;

    /**
     * @var Seat
     */
    protected $Seat;

    /**
     * @var SimpleType\Guid
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
     * @param  SimpleType\Guid|null   $cultureEventId
     * @return CultureReservationSeat
     */
    public function setCultureEventId(SimpleType\Guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  SimpleType\Guid|null   $id
     * @return CultureReservationSeat
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
     * @param  SimpleType\Guid|null   $seatId
     * @return CultureReservationSeat
     */
    public function setSeatId(SimpleType\Guid $seatId = null)
    {
        $this->SeatId = $seatId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getSeatId()
    {
        return $this->SeatId;
    }
}
