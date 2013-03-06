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
     * @var array
     */
    protected $Exposition = array();

    /**
     * @param  array             $exposition
     * @return ArrayOfExposition
     */
    public function setExposition(array $exposition = array())
    {
        $this->Exposition = $exposition;

        return $this;
    }

    /**
     * @return array
     */
    public function getExposition()
    {
        if (!is_array($this->Exposition)) {
            return array($this->Exposition);
        }

        return $this->Exposition;
    }
}
