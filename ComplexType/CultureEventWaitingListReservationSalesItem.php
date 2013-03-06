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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $CultureEventWaitingListReservationId
     */
    protected $CultureEventWaitingListReservationId;

    /**
     * @param  SimpleType\guid|null                        $cultureEventWaitingListReservationId
     * @return CultureEventWaitingListReservationSalesItem
     */
    public function setCultureEventWaitingListReservationId(SimpleType\guid $cultureEventWaitingListReservationId = null)
    {
        $this->CultureEventWaitingListReservationId = $cultureEventWaitingListReservationId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCultureEventWaitingListReservationId()
    {
        return $this->CultureEventWaitingListReservationId;
    }

}
