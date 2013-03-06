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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Zipcode[] $Zipcode
     */
    protected $Zipcode = array();

    /**
     * @param  Zipcode[]      $zipcode
     * @return ArrayOfZipcode
     */
    public function setZipcode(array $zipcode = array())
    {
        $this->Zipcode = $zipcode;

        return $this;
    }

    /**
     * @return Zipcode[]
     */
    public function getZipcode()
    {
        return $this->Zipcode;
    }

}
