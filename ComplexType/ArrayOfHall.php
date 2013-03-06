<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfHall extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfHall';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Hall[] $Hall
     */
    protected $Hall = array();

    /**
     * @param  Hall[]      $hall
     * @return ArrayOfHall
     */
    public function setHall(array $hall = array())
    {
        $this->Hall = $hall;

        return $this;
    }

    /**
     * @return Hall[]
     */
    public function getHall()
    {
        return $this->Hall;
    }

}
