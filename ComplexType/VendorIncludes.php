<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class VendorIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'VendorIncludes';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IncludeVendorContacts
     */
    protected $IncludeVendorContacts;

    /**
     * @param  boolean|null   $includeVendorContacts
     * @return VendorIncludes
     */
    public function setIncludeVendorContacts($includeVendorContacts)
    {
        $this->IncludeVendorContacts = $includeVendorContacts;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIncludeVendorContacts()
    {
        return $this->IncludeVendorContacts;
    }

}
