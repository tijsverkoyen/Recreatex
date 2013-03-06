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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $RentalReservationId
     */
    protected $RentalReservationId;

    /**
     * @param  SimpleType\guid|null       $rentalReservationId
     * @return RentalReservationSalesItem
     */
    public function setRentalReservationId(SimpleType\guid $rentalReservationId = null)
    {
        $this->RentalReservationId = $rentalReservationId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getRentalReservationId()
    {
        return $this->RentalReservationId;
    }

}
