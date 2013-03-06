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

     * maxOccurs = unbounded     * @var array
     */
    protected $Vendor = array();

    /**
     * @param  array         $vendor
     * @return ArrayOfVendor
     */
    public function setVendor(array $vendor = array())
    {
        $this->Vendor = $vendor;

        return $this;
    }

    /**
     * @return array
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
}
