<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfVendor extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfVendor';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Vendor[] $Vendor
     */
    protected $Vendor = array();

    /**
     * @param  Vendor[]      $vendor
     * @return ArrayOfVendor
     */
    public function setVendor(array $vendor = array())
    {
        $this->Vendor = $vendor;

        return $this;
    }

    /**
     * @return Vendor[]
     */
    public function getVendor()
    {
        return $this->Vendor;
    }

}
