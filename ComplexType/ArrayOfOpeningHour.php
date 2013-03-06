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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var OpeningHour[] $OpeningHour
     */
    protected $OpeningHour = array();

    /**
     * @param  OpeningHour[]      $openingHour
     * @return ArrayOfOpeningHour
     */
    public function setOpeningHour(array $openingHour = array())
    {
        $this->OpeningHour = $openingHour;

        return $this;
    }

    /**
     * @return OpeningHour[]
     */
    public function getOpeningHour()
    {
        return $this->OpeningHour;
    }

}
