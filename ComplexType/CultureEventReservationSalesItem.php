<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureEventReservationSalesItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureEventReservationSalesItem';

    /**
     * @var SimpleType\Guid
     */
    protected $CultureEventReservationId;

    /**
     * @var ArrayOfSeatAllocation
     */
    protected $Seats;

    /**
     * @param  SimpleType\Guid[optional]        $cultureEventReservationId
     * @return CultureEventReservationSalesItem
     */
    public function setCultureEventReservationId(SimpleType\Guid $cultureEventReservationId = null)
    {
        $this->CultureEventReservationId = $cultureEventReservationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCultureEventReservationId()
    {
        return $this->CultureEventReservationId;
    }

    /**
     * @param  ArrayOfSeatAllocation[optional]  $seats
     * @return CultureEventReservationSalesItem
     */
    public function setSeats(ArrayOfSeatAllocation $seats = null)
    {
        $this->Seats = $seats;

        return $this;
    }

    /**
     * @return ArrayOfSeatAllocation
     */
    public function getSeats()
    {
        return $this->Seats;
    }
}
