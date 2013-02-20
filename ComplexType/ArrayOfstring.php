<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfstring extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfstring';

    /**
     * @var array
     */
    protected $string = array();

    /**
     * @param  array      $string
     * @return ArrayOfstring
     */
    public function setString(array $string = array())
    {
        $this->string = $string;

        return $this;
    }

    /**
     * @return array
     */
    public function getString()
    {
        return $this->string;
    }
}
