<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureEventPrice extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureEventPrice';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $CustomerID
     */
    protected $CustomerID;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SeatBlock|null $SeatBlock
     */
    protected $SeatBlock;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SeatRow|null $SeatRow
     */
    protected $SeatRow;

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
     * @var SeatRange|null $SeatRange
     */
    protected $SeatRange;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $StartDate
     */
    protected $StartDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MinimumQty
     */
    protected $MinimumQty;

    /**
     * @param  SimpleType\Guid|null $customerID
     * @return CultureEventPrice
     */
    public function setCustomerID(SimpleType\Guid $customerID = null)
    {
        $this->CustomerID = $customerID;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCustomerID()
    {
        return $this->CustomerID;
    }

    /**
     * @param  SeatBlock|null    $seatBlock
     * @return CultureEventPrice
     */
    public function setSeatBlock(SeatBlock $seatBlock = null)
    {
        $this->SeatBlock = $seatBlock;

        return $this;
    }

    /**
     * @return SeatBlock|null
     */
    public function getSeatBlock()
    {
        return $this->SeatBlock;
    }

    /**
     * @param  SeatRow|null      $seatRow
     * @return CultureEventPrice
     */
    public function setSeatRow(SeatRow $seatRow = null)
    {
        $this->SeatRow = $seatRow;

        return $this;
    }

    /**
     * @return SeatRow|null
     */
    public function getSeatRow()
    {
        return $this->SeatRow;
    }

    /**
     * @param  Seat|null         $seat
     * @return CultureEventPrice
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
     * @param  SeatRange|null    $seatRange
     * @return CultureEventPrice
     */
    public function setSeatRange(SeatRange $seatRange = null)
    {
        $this->SeatRange = $seatRange;

        return $this;
    }

    /**
     * @return SeatRange|null
     */
    public function getSeatRange()
    {
        return $this->SeatRange;
    }

    /**
     * @param  string|null       $startDate
     * @return CultureEventPrice
     */
    public function setStartDate($startDate)
    {
        $this->StartDate = $startDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param  integer|null      $minimumQty
     * @return CultureEventPrice
     */
    public function setMinimumQty($minimumQty)
    {
        $this->MinimumQty = $minimumQty;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMinimumQty()
    {
        return $this->MinimumQty;
    }
}
