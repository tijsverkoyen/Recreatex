<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfVendorArticle extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfVendorArticle';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $VendorArticle = array();

    /**
     * @param  array                $vendorArticle
     * @return ArrayOfVendorArticle
     */
    public function setVendorArticle(array $vendorArticle = array())
    {
        $this->VendorArticle = $vendorArticle;

        return $this;
    }

    /**
     * @return array
     */
    public function getVendorArticle()
    {
        return $this->VendorArticle;
    }
}
