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
     * @var SimpleType\Guid
     */
    protected $CustomerID;

    /**
     * @var Seat
     */
    protected $SeatBlock;

    /**
     * @var Seat
     */
    protected $SeatRow;

    /**
     * @var Seat
     */
    protected $Seat;

    /**
     * @var Seat
     */
    protected $SeatRange;

    /**
     * @var string
     */
    protected $StartDate;

    /**
     * @var integer
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
