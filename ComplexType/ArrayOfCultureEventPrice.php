<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureEventPrice extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureEventPrice';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CultureEventPrice[] $CultureEventPrice
     */
    protected $CultureEventPrice = array();

    /**
     * @param  CultureEventPrice[]      $cultureEventPrice
     * @return ArrayOfCultureEventPrice
     */
    public function setCultureEventPrice(array $cultureEventPrice = array())
    {
        $this->CultureEventPrice = $cultureEventPrice;

        return $this;
    }

    /**
     * @return CultureEventPrice[]
     */
    public function getCultureEventPrice()
    {
        return $this->CultureEventPrice;
    }

}
