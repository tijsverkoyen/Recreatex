<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Occupancy extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Occupancy';

    /**
     * @var integer
     */
    protected $Current;

    /**
     * @var integer
     */
    protected $Maximum;

    /**
     * @param  integer[optional] $current
     * @return Occupancy
     */
    public function setCurrent($current)
    {
        $this->Current = $current;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCurrent()
    {
        return $this->Current;
    }

    /**
     * @param  integer[optional] $maximum
     * @return Occupancy
     */
    public function setMaximum($maximum)
    {
        $this->Maximum = $maximum;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaximum()
    {
        return $this->Maximum;
    }
}
