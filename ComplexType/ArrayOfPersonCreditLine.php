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

     * maxOccurs = unbounded     * @var array
     */
    protected $PersonCreditLine = array();

    /**
     * @param  array                   $personCreditLine
     * @return ArrayOfPersonCreditLine
     */
    public function setPersonCreditLine(array $personCreditLine = array())
    {
        $this->PersonCreditLine = $personCreditLine;

        return $this;
    }

    /**
     * @return array
     */
    public function getPersonCreditLine()
    {
        return $this->PersonCreditLine;
    }
}
