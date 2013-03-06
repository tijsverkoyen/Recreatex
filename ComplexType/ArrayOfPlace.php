<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPlace extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPlace';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $Place = array();

    /**
     * @param  array        $place
     * @return ArrayOfPlace
     */
    public function setPlace(array $place = array())
    {
        $this->Place = $place;

        return $this;
    }

    /**
     * @return array
     */
    public function getPlace()
    {
        return $this->Place;
    }
}
