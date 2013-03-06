<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RecurringPlaceReservationSalesItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RecurringPlaceReservationSalesItem';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $SerieId
     */
    protected $SerieId;

    /**
     * @param  SimpleType\guid|null               $serieId
     * @return RecurringPlaceReservationSalesItem
     */
    public function setSerieId(SimpleType\guid $serieId = null)
    {
        $this->SerieId = $serieId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSerieId()
    {
        return $this->SerieId;
    }

}
