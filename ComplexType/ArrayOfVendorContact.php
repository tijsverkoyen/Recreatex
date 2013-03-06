<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfVendorContact extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfVendorContact';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $VendorContact = array();

    /**
     * @param  array                $vendorContact
     * @return ArrayOfVendorContact
     */
    public function setVendorContact(array $vendorContact = array())
    {
        $this->VendorContact = $vendorContact;

        return $this;
    }

    /**
     * @return array
     */
    public function getVendorContact()
    {
        return $this->VendorContact;
    }
}
