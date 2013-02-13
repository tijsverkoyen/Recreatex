<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfExposition extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfExposition';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Exposition[] $Exposition
     */
    protected $Exposition = array();

    /**
     * @param  Exposition[]      $exposition
     * @return ArrayOfExposition
     */
    public function setExposition(array $exposition = array())
    {
        $this->Exposition = $exposition;

        return $this;
    }

    /**
     * @return Exposition[]
     */
    public function getExposition()
    {
        return $this->Exposition;
    }
}
