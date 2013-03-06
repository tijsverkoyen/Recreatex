<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfGuid extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfguid';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\guid[] $guid
     */
    protected $guid = array();

    /**
     * @param  SimpleType\guid[] $guid
     * @return ArrayOfguid
     */
    public function setGuid(array $guid = array())
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * @return SimpleType\guid[]
     */
    public function getGuid()
    {
        return $this->guid;
    }

}
