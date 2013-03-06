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

     * maxOccurs = unbounded     * @var array
     */
    protected $VendorGroup = array();

    /**
     * @param  array              $vendorGroup
     * @return ArrayOfVendorGroup
     */
    public function setVendorGroup(array $vendorGroup = array())
    {
        $this->VendorGroup = $vendorGroup;

        return $this;
    }

    /**
     * @return array
     */
    public function getVendorGroup()
    {
        return $this->VendorGroup;
    }
}
