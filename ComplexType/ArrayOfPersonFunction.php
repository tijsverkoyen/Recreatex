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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var PersonFunction[] $PersonFunction
     */
    protected $PersonFunction = array();

    /**
     * @param  PersonFunction[]      $personFunction
     * @return ArrayOfPersonFunction
     */
    public function setPersonFunction(array $personFunction = array())
    {
        $this->PersonFunction = $personFunction;

        return $this;
    }

    /**
     * @return PersonFunction[]
     */
    public function getPersonFunction()
    {
        return $this->PersonFunction;
    }

}
