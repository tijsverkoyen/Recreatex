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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var VendorArticle[] $VendorArticle
     */
    protected $VendorArticle = array();

    /**
     * @param  VendorArticle[]      $vendorArticle
     * @return ArrayOfVendorArticle
     */
    public function setVendorArticle(array $vendorArticle = array())
    {
        $this->VendorArticle = $vendorArticle;

        return $this;
    }

    /**
     * @return VendorArticle[]
     */
    public function getVendorArticle()
    {
        return $this->VendorArticle;
    }

}
