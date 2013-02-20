<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfIncassoCost extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfIncassoCost';

    /**
     * @var array
     */
    protected $IncassoCost = array();

    /**
     * @param  array              $incassoCost
     * @return ArrayOfIncassoCost
     */
    public function setIncassoCost(array $incassoCost = array())
    {
        $this->IncassoCost = $incassoCost;

        return $this;
    }

    /**
     * @return array
     */
    public function getIncassoCost()
    {
        return $this->IncassoCost;
    }
}
