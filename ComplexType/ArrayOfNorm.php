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

     * maxOccurs = unbounded     * @var array
     */
    protected $Norm = array();

    /**
     * @param  array       $norm
     * @return ArrayOfNorm
     */
    public function setNorm(array $norm = array())
    {
        $this->Norm = $norm;

        return $this;
    }

    /**
     * @return array
     */
    public function getNorm()
    {
        return $this->Norm;
    }
}
