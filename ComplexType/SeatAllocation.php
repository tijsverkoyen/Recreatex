<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SeatAllocation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SeatAllocation';

    /**
     * @var string
     */
    protected $CardNumber;

    /**
     * @var SimpleType\Guid
     */
    protected $CultureEventId;

    /**
     * @var SimpleType\Guid
     */
    protected $CultureEventReservationId;

    /**
     * @var SimpleType\Guid
     */
    protected $CustomerId;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @var string
     */
    protected $SeatBlockCode;

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $SeatCode
     */
    protected $SeatCode;

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\Guid
     */
    protected $SeatId;

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var string $SeatRowCode
     */
    protected $SeatRowCode;

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\SeatAllocationStatus $Status
     */
    protected $Status;

    /**
     * @param  string|null    $cardNumber
     * @return SeatAllocation
     */
    public function setCardNumber($cardNumber)
    {
        $this->CardNumber = $cardNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }

    /**
     * @param  SimpleType\Guid|null $cultureEventId
     * @return SeatAllocation
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
     * @param  SimpleType\Guid|null $cultureEventReservationId
     * @return SeatAllocation
     */
    public function setCultureEventReservationId(SimpleType\Guid $cultureEventReservationId = null)
    {
        $this->CultureEventReservationId = $cultureEventReservationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCultureEventReservationId()
    {
        return $this->CultureEventReservationId;
    }

    /**
     * @param  SimpleType\Guid|null $customerId
     * @return SeatAllocation
     */
    public function setCustomerId(SimpleType\Guid $customerId = null)
    {
        $this->CustomerId = $customerId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param  float|null     $price
     * @return SeatAllocation
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
     * @param  string|null    $seatBlockCode
     * @return SeatAllocation
     */
    public function setSeatBlockCode($seatBlockCode)
    {
        $this->SeatBlockCode = $seatBlockCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSeatBlockCode()
    {
        return $this->SeatBlockCode;
    }

    /**
     * @param  string         $seatCode
     * @return SeatAllocation
     */
    public function setSeatCode($seatCode)
    {
        $this->SeatCode = $seatCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getSeatCode()
    {
        return $this->SeatCode;
    }

    /**
     * @param  SimpleType\Guid $seatId
     * @return SeatAllocation
     */
    public function setSeatId(SimpleType\Guid $seatId)
    {
        $this->SeatId = $seatId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getSeatId()
    {
        return $this->SeatId;
    }

    /**
     * @param  string         $seatRowCode
     * @return SeatAllocation
     */
    public function setSeatRowCode($seatRowCode)
    {
        $this->SeatRowCode = $seatRowCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getSeatRowCode()
    {
        return $this->SeatRowCode;
    }

    /**
     * @param  SimpleType\SeatAllocationStatus $status
     * @return SeatAllocation
     */
    public function setStatus(SimpleType\SeatAllocationStatus $status)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * @return SimpleType\SeatAllocationStatus
     */
    public function getStatus()
    {
        return $this->Status;
    }
}
