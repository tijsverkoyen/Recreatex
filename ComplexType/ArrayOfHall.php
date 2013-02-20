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
     * @var array
     */
    protected $Hall = array();

    /**
     * @param  array       $hall
     * @return ArrayOfHall
     */
    public function setHall(array $hall = array())
    {
        $this->Hall = $hall;

        return $this;
    }

    /**
     * @return array
     */
    public function getHall()
    {
        return $this->Hall;
    }
}
