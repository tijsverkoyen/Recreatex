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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $FitnessActivityDayReservationId
     */
    protected $FitnessActivityDayReservationId;

    /**
     * @param  SimpleType\guid|null                   $fitnessActivityDayReservationId
     * @return FitnessActivityDayReservationSalesItem
     */
    public function setFitnessActivityDayReservationId(SimpleType\guid $fitnessActivityDayReservationId = null)
    {
        $this->FitnessActivityDayReservationId = $fitnessActivityDayReservationId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getFitnessActivityDayReservationId()
    {
        return $this->FitnessActivityDayReservationId;
    }

}
