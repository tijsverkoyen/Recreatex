<?php

namespace TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RentalOrderStatus extends SimpleTypeAbstract
{
    const ORDERED = 'Ordered';
    const PARTIALLYDELIVERED = 'PartiallyDelivered';
    const DELIVERED = 'Delivered';
    const PARTIALLYRETURNED = 'PartiallyReturned';
    const RETURNED = 'Returned';
    const CANCELLED = 'Cancelled';
}
