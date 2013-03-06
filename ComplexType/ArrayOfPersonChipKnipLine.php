<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPersonChipKnipLine extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPersonChipKnipLine';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var PersonChipKnipLine[] $PersonChipKnipLine
     */
    protected $PersonChipKnipLine = array();

    /**
     * @param  PersonChipKnipLine[]      $personChipKnipLine
     * @return ArrayOfPersonChipKnipLine
     */
    public function setPersonChipKnipLine(array $personChipKnipLine = array())
    {
        $this->PersonChipKnipLine = $personChipKnipLine;

        return $this;
    }

    /**
     * @return PersonChipKnipLine[]
     */
    public function getPersonChipKnipLine()
    {
        return $this->PersonChipKnipLine;
    }

}
