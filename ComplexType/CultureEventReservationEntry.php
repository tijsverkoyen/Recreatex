<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureEventReservationEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureEventReservationEntry';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $PriceGroupId
     */
    protected $PriceGroupId;

    /**
     * @param  SimpleType\Guid|null         $priceGroupId
     * @return CultureEventReservationEntry
     */
    public function setPriceGroupId(SimpleType\Guid $priceGroupId = null)
    {
        $this->PriceGroupId = $priceGroupId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getPriceGroupId()
    {
        return $this->PriceGroupId;
    }
}
