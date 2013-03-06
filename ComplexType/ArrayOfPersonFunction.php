<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPersonFunction extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPersonFunction';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $PersonFunction = array();

    /**
     * @param  array                 $personFunction
     * @return ArrayOfPersonFunction
     */
    public function setPersonFunction(array $personFunction = array())
    {
        $this->PersonFunction = $personFunction;

        return $this;
    }

    /**
     * @return array
     */
    public function getPersonFunction()
    {
        return $this->PersonFunction;
    }
}
