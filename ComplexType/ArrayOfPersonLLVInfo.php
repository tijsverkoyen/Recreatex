<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPersonLLVInfo extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPersonLLVInfo';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var PersonLLVInfo[] $PersonLLVInfo
     */
    protected $PersonLLVInfo = array();

    /**
     * @param  PersonLLVInfo[]      $personLLVInfo
     * @return ArrayOfPersonLLVInfo
     */
    public function setPersonLLVInfo(array $personLLVInfo = array())
    {
        $this->PersonLLVInfo = $personLLVInfo;

        return $this;
    }

    /**
     * @return PersonLLVInfo[]
     */
    public function getPersonLLVInfo()
    {
        return $this->PersonLLVInfo;
    }

}
