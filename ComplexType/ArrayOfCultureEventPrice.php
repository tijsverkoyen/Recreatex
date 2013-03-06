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
     * @var array
     */
    protected $CultureEventPrice = array();

    /**
     * @param  array                    $cultureEventPrice
     * @return ArrayOfCultureEventPrice
     */
    public function setCultureEventPrice(array $cultureEventPrice = array())
    {
        $this->CultureEventPrice = $cultureEventPrice;

        return $this;
    }

    /**
     * @return array
     */
    public function getCultureEventPrice()
    {
        if (!is_array($this->CultureEventPrice)) {
            return array($this->CultureEventPrice);
        }

        return $this->CultureEventPrice;
    }
}
