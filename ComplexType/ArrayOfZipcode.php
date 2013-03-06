<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfZipcode extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfZipcode';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $Zipcode = array();

    /**
     * @param  array          $zipcode
     * @return ArrayOfZipcode
     */
    public function setZipcode(array $zipcode = array())
    {
        $this->Zipcode = $zipcode;

        return $this;
    }

    /**
     * @return array
     */
    public function getZipcode()
    {
        return $this->Zipcode;
    }
}
