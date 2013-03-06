<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCountry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCountry';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $Country = array();

    /**
     * @param  array          $country
     * @return ArrayOfCountry
     */
    public function setCountry(array $country = array())
    {
        $this->Country = $country;

        return $this;
    }

    /**
     * @return array
     */
    public function getCountry()
    {
        return $this->Country;
    }
}
