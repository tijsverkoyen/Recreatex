<?php

namespace TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Guid extends SimpleTypeAbstract
{
    /**
     * Convert into a Guid
     * @param  string $var
     * @return Guid
     */
    public static function fromXml($var)
    {
        $var = strip_tags($var);
        return new Guid($var);
    }
}
