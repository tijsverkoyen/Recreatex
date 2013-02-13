<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPerson extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPerson';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Person[] $Person
     */
    protected $Person = array();


    /**
     * @param Person[] $person
     * @return ArrayOfPerson
     */
    public function setPerson(array $person = array())
    {
        $this->Person = $person;

        return $this;
    }

    /**
     * @return Person[]
     */
    public function getPerson()
    {
        return $this->Person;
    }


}

