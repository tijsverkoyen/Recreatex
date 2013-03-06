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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Country[] $Country
     */
    protected $Country = array();

    /**
     * @param  Country[]      $country
     * @return ArrayOfCountry
     */
    public function setCountry(array $country = array())
    {
        $this->Country = $country;

        return $this;
    }

    /**
     * @return Country[]
     */
    public function getCountry()
    {
        return $this->Country;
    }

}
