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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var VendorContact[] $VendorContact
     */
    protected $VendorContact = array();

    /**
     * @param  VendorContact[]      $vendorContact
     * @return ArrayOfVendorContact
     */
    public function setVendorContact(array $vendorContact = array())
    {
        $this->VendorContact = $vendorContact;

        return $this;
    }

    /**
     * @return VendorContact[]
     */
    public function getVendorContact()
    {
        return $this->VendorContact;
    }

}
