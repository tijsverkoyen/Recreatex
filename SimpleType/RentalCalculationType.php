<?php

namespace TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RentalCalculationType extends SimpleTypeAbstract
{
    const PRICETIMESHOURS = 'PriceTimesHours';
    const FIXEDPRICE = 'FixedPrice';
    const PRICETIMESQUANTITY = 'PriceTimesQuantity';
    const PRICETIMESQUANTITYTIMESHOURS = 'PriceTimesQuantityTimesHours';
    const PRICETIMESQUANTITYTIMESDAYS = 'PriceTimesQuantityTimesDays';
    const PRICETIMESQUANTITYTIMESNIGHTS = 'PriceTimesQuantityTimesNights';
}