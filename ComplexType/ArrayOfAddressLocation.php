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
     * @var array
     */
    protected $AddressLocation = array();

    /**
     * @param  array                  $addressLocation
     * @return ArrayOfAddressLocation
     */
    public function setAddressLocation(array $addressLocation = array())
    {
        $this->AddressLocation = $addressLocation;

        return $this;
    }

    /**
     * @return array
     */
    public function getAddressLocation()
    {
        if (!is_array($this->AddressLocation)) {
            return array($this->AddressLocation);
        }

        return $this->AddressLocation;
    }
}
