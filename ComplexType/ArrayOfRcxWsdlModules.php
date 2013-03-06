<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfRcxWsdlModules extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfRcxWsdlModules';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SimpleType\RcxWsdlModules[] $RcxWsdlModules
     */
    protected $RcxWsdlModules = array();

    /**
     * @param  SimpleType\RcxWsdlModules[] $rcxWsdlModules
     * @return ArrayOfRcxWsdlModules
     */
    public function setRcxWsdlModules(array $rcxWsdlModules = array())
    {
        $this->RcxWsdlModules = $rcxWsdlModules;

        return $this;
    }

    /**
     * @return SimpleType\RcxWsdlModules[]
     */
    public function getRcxWsdlModules()
    {
        return $this->RcxWsdlModules;
    }

}
