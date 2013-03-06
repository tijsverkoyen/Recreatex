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
     * @var SimpleTypeGuid
     */
    protected $SerieId;

    /**
     * @param  SimpleType\Guid[optional]          $serieId
     * @return RecurringPlaceReservationSalesItem
     */
    public function setSerieId(SimpleType\Guid $serieId = null)
    {
        $this->SerieId = $serieId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getSerieId()
    {
        return $this->SerieId;
    }
}
