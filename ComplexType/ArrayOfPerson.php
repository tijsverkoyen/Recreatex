<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPerson extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPerson';

    /**
     * @var array
     */
    protected $Person = array();

    /**
     * @param  array         $person
     * @return ArrayOfPerson
     */
    public function setPerson(array $person = array())
    {
        $this->Person = $person;

        return $this;
    }

    /**
     * @return array
     */
    public function getPerson()
    {
        return $this->Person;
    }
}
