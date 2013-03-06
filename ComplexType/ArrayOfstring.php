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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var string[] $string
     */
    protected $string = array();

    /**
     * @param  string[]      $string
     * @return ArrayOfstring
     */
    public function setString(array $string = array())
    {
        $this->string = $string;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getString()
    {
        return $this->string;
    }

}
