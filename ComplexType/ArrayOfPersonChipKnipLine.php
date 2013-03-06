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

     * maxOccurs = unbounded     * @var array
     */
    protected $PersonChipKnipLine = array();

    /**
     * @param  array                     $personChipKnipLine
     * @return ArrayOfPersonChipKnipLine
     */
    public function setPersonChipKnipLine(array $personChipKnipLine = array())
    {
        $this->PersonChipKnipLine = $personChipKnipLine;

        return $this;
    }

    /**
     * @return array
     */
    public function getPersonChipKnipLine()
    {
        return $this->PersonChipKnipLine;
    }
}
