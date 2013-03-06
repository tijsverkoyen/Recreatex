<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPersonTitle extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPersonTitle';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var PersonTitle[] $PersonTitle
     */
    protected $PersonTitle = array();

    /**
     * @param  PersonTitle[]      $personTitle
     * @return ArrayOfPersonTitle
     */
    public function setPersonTitle(array $personTitle = array())
    {
        $this->PersonTitle = $personTitle;

        return $this;
    }

    /**
     * @return PersonTitle[]
     */
    public function getPersonTitle()
    {
        return $this->PersonTitle;
    }

}
