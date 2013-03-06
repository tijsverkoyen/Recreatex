<?php

namespace TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PurchaseOrderState extends SimpleTypeAbstract
{
    const TOBEORDERED = 'ToBeOrdered';
    const ORDERED = 'Ordered';
    const PARTIALLYRECEIVED = 'PartiallyReceived';
    const ENTIRELYRECEIVED = 'EntirelyReceived';
    const TOAPPROVE = 'ToApprove';
    const REJECTED = 'Rejected';
}
