<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfVendorGroup extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfVendorGroup';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var VendorGroup[] $VendorGroup
     */
    protected $VendorGroup = array();

    /**
     * @param  VendorGroup[]      $vendorGroup
     * @return ArrayOfVendorGroup
     */
    public function setVendorGroup(array $vendorGroup = array())
    {
        $this->VendorGroup = $vendorGroup;

        return $this;
    }

    /**
     * @return VendorGroup[]
     */
    public function getVendorGroup()
    {
        return $this->VendorGroup;
    }

}
