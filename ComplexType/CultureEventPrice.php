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
     * @param  SimpleType\Guid[optional] $customerID
     * @return CultureEventPrice
     */
    public function setCustomerID(SimpleType\Guid $customerID = null)
    {
        $this->CustomerID = $customerID;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCustomerID()
    {
        return $this->CustomerID;
    }

    /**
     * @param  SeatBlock[optional] $seatBlock
     * @return CultureEventPrice
     */
    public function setSeatBlock(SeatBlock $seatBlock = null)
    {
        $this->SeatBlock = $seatBlock;

        return $this;
    }

    /**
     * @return SeatBlock
     */
    public function getSeatBlock()
    {
        return $this->SeatBlock;
    }

    /**
     * @param  SeatRow[optional] $seatRow
     * @return CultureEventPrice
     */
    public function setSeatRow(SeatRow $seatRow = null)
    {
        $this->SeatRow = $seatRow;

        return $this;
    }

    /**
     * @return SeatRow
     */
    public function getSeatRow()
    {
        return $this->SeatRow;
    }

    /**
     * @param  Seat[optional]    $seat
     * @return CultureEventPrice
     */
    public function setSeat(Seat $seat = null)
    {
        $this->Seat = $seat;

        return $this;
    }

    /**
     * @return Seat
     */
    public function getSeat()
    {
        return $this->Seat;
    }

    /**
     * @param  SeatRange[optional] $seatRange
     * @return CultureEventPrice
     */
    public function setSeatRange(SeatRange $seatRange = null)
    {
        $this->SeatRange = $seatRange;

        return $this;
    }

    /**
     * @return SeatRange
     */
    public function getSeatRange()
    {
        return $this->SeatRange;
    }

    /**
     * @param  string[optional]  $startDate
     * @return CultureEventPrice
     */
    public function setStartDate($startDate)
    {
        $this->StartDate = $startDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param  integer[optional] $minimumQty
     * @return CultureEventPrice
     */
    public function setMinimumQty($minimumQty)
    {
        $this->MinimumQty = $minimumQty;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMinimumQty()
    {
        return $this->MinimumQty;
    }
}
