<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RentalReservationSalesItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RentalReservationSalesItem';

    /**
     * @var SimpleTypeGuid
     */
    protected $RentalReservationId;

    /**
     * @param  SimpleType\Guid[optional]  $rentalReservationId
     * @return RentalReservationSalesItem
     */
    public function setRentalReservationId(SimpleType\Guid $rentalReservationId = null)
    {
        $this->RentalReservationId = $rentalReservationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getRentalReservationId()
    {
        return $this->RentalReservationId;
    }
}
