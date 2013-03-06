<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FitnessActivityDayReservationSalesItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FitnessActivityDayReservationSalesItem';

    /**

     * @var SimpleTypeGuid
     */
    protected $FitnessActivityDayReservationId;

    /**
     * @param  SimpleType\Guid[optional]              $fitnessActivityDayReservationId
     * @return FitnessActivityDayReservationSalesItem
     */
    public function setFitnessActivityDayReservationId(SimpleType\Guid $fitnessActivityDayReservationId = null)
    {
        $this->FitnessActivityDayReservationId = $fitnessActivityDayReservationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getFitnessActivityDayReservationId()
    {
        return $this->FitnessActivityDayReservationId;
    }
}
