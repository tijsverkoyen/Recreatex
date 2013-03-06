<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfAddressLocation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfAddressLocation';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var AddressLocation[] $AddressLocation
     */
    protected $AddressLocation = array();

    /**
     * @param  AddressLocation[]      $addressLocation
     * @return ArrayOfAddressLocation
     */
    public function setAddressLocation(array $addressLocation = array())
    {
        $this->AddressLocation = $addressLocation;

        return $this;
    }

    /**
     * @return AddressLocation[]
     */
    public function getAddressLocation()
    {
        return $this->AddressLocation;
    }

}
