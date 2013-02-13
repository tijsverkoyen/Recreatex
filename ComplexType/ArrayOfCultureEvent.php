<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureEvent extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureEvent';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CultureEvent[] $CultureEvent
     */
    protected $CultureEvent = array();

    /**
     * @param  CultureEvent[]      $cultureEvent
     * @return ArrayOfCultureEvent
     */
    public function setCultureEvent(array $cultureEvent = array())
    {
        $this->CultureEvent = $cultureEvent;

        return $this;
    }

    /**
     * @return CultureEvent[]
     */
    public function getCultureEvent()
    {
        return $this->CultureEvent;
    }
}
