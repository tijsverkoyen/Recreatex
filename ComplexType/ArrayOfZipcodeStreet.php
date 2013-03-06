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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ZipcodeStreet[] $ZipcodeStreet
     */
    protected $ZipcodeStreet = array();

    /**
     * @param  ZipcodeStreet[]      $zipcodeStreet
     * @return ArrayOfZipcodeStreet
     */
    public function setZipcodeStreet(array $zipcodeStreet = array())
    {
        $this->ZipcodeStreet = $zipcodeStreet;

        return $this;
    }

    /**
     * @return ZipcodeStreet[]
     */
    public function getZipcodeStreet()
    {
        return $this->ZipcodeStreet;
    }

}
