<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ZipcodeCendrisStreetIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ZipcodeCendrisStreetIncludes';

    /**
     * @var boolean
     */
    protected $Zipcodes;

    /**
     * @param  boolean[optional]            $zipcodes
     * @return ZipcodeCendrisStreetIncludes
     */
    public function setZipcodes($zipcodes)
    {
        $this->Zipcodes = $zipcodes;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getZipcodes()
    {
        return $this->Zipcodes;
    }
}
