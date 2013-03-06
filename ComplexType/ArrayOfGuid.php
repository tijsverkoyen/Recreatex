<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfGuid extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfguid';

    /**
     * @var array
     */
    protected $guid = array();

    /**
     * @param  array       $guid
     * @return ArrayOfGuid
     */
    public function setGuid(array $guid = array())
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * @return array
     */
    public function getGuid()
    {
        if (!is_array($this->guid)) {
            return array($this->guid);
        }

        return $this->guid;
    }
}
