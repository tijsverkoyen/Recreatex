<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfOpeningHour extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfOpeningHour';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $OpeningHour = array();

    /**
     * @param  array              $openingHour
     * @return ArrayOfOpeningHour
     */
    public function setOpeningHour(array $openingHour = array())
    {
        $this->OpeningHour = $openingHour;

        return $this;
    }

    /**
     * @return array
     */
    public function getOpeningHour()
    {
        return $this->OpeningHour;
    }
}
