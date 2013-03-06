<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureEventWaitingListReservationSalesItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureEventWaitingListReservationSalesItem';

    /**
     * @var SimpleTypeGuid
     */
    protected $CultureEventWaitingListReservationId;

    /**
     * @param  SimpleType\Guid[optional]                   $cultureEventWaitingListReservationId
     * @return CultureEventWaitingListReservationSalesItem
     */
    public function setCultureEventWaitingListReservationId(
        SimpleType\Guid $cultureEventWaitingListReservationId = null
    ) {
        $this->CultureEventWaitingListReservationId = $cultureEventWaitingListReservationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCultureEventWaitingListReservationId()
    {
        return $this->CultureEventWaitingListReservationId;
    }
}
