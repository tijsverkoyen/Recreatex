<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPersonCreditLine extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPersonCreditLine';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var PersonCreditLine[] $PersonCreditLine
     */
    protected $PersonCreditLine = array();

    /**
     * @param  PersonCreditLine[]      $personCreditLine
     * @return ArrayOfPersonCreditLine
     */
    public function setPersonCreditLine(array $personCreditLine = array())
    {
        $this->PersonCreditLine = $personCreditLine;

        return $this;
    }

    /**
     * @return PersonCreditLine[]
     */
    public function getPersonCreditLine()
    {
        return $this->PersonCreditLine;
    }

}
