<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfIncassoCost extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfIncassoCost';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var IncassoCost[] $IncassoCost
     */
    protected $IncassoCost = array();


    /**
     * @param IncassoCost[] $incassoCost
     * @return ArrayOfIncassoCost
     */
    public function setIncassoCost(array $incassoCost = array())
    {
        $this->IncassoCost = $incassoCost;

        return $this;
    }

    /**
     * @return IncassoCost[]
     */
    public function getIncassoCost()
    {
        return $this->IncassoCost;
    }


}

