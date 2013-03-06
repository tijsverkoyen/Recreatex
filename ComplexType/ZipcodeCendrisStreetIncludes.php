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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Zipcodes
     */
    protected $Zipcodes;

    /**
     * @param  boolean|null                 $zipcodes
     * @return ZipcodeCendrisStreetIncludes
     */
    public function setZipcodes($zipcodes)
    {
        $this->Zipcodes = $zipcodes;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getZipcodes()
    {
        return $this->Zipcodes;
    }

}
