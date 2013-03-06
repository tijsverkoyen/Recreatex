<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfZipcodeStreet extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfZipcodeStreet';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $ZipcodeStreet = array();

    /**
     * @param  array                $zipcodeStreet
     * @return ArrayOfZipcodeStreet
     */
    public function setZipcodeStreet(array $zipcodeStreet = array())
    {
        $this->ZipcodeStreet = $zipcodeStreet;

        return $this;
    }

    /**
     * @return array
     */
    public function getZipcodeStreet()
    {
        return $this->ZipcodeStreet;
    }
}
