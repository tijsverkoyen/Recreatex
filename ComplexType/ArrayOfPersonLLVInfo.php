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

     * maxOccurs = unbounded     * @var array
     */
    protected $PersonLLVInfo = array();

    /**
     * @param  array                $personLLVInfo
     * @return ArrayOfPersonLLVInfo
     */
    public function setPersonLLVInfo(array $personLLVInfo = array())
    {
        $this->PersonLLVInfo = $personLLVInfo;

        return $this;
    }

    /**
     * @return array
     */
    public function getPersonLLVInfo()
    {
        return $this->PersonLLVInfo;
    }
}
