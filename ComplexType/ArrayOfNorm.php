<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfNorm extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfNorm';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Norm[] $Norm
     */
    protected $Norm = array();

    /**
     * @param  Norm[]      $norm
     * @return ArrayOfNorm
     */
    public function setNorm(array $norm = array())
    {
        $this->Norm = $norm;

        return $this;
    }

    /**
     * @return Norm[]
     */
    public function getNorm()
    {
        return $this->Norm;
    }

}
