<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfZipcodeCendrisStreet extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfZipcodeCendrisStreet';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $ZipcodeCendrisStreet = array();

    /**
     * @param  array                       $zipcodeCendrisStreet
     * @return ArrayOfZipcodeCendrisStreet
     */
    public function setZipcodeCendrisStreet(array $zipcodeCendrisStreet = array())
    {
        $this->ZipcodeCendrisStreet = $zipcodeCendrisStreet;

        return $this;
    }

    /**
     * @return array
     */
    public function getZipcodeCendrisStreet()
    {
        return $this->ZipcodeCendrisStreet;
    }
}
