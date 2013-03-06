<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfRcxWsdlModules extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfRcxWsdlModules';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $RcxWsdlModules = array();

    /**
     * @param  array                 $rcxWsdlModules
     * @return ArrayOfRcxWsdlModules
     */
    public function setRcxWsdlModules(array $rcxWsdlModules = array())
    {
        $this->RcxWsdlModules = $rcxWsdlModules;

        return $this;
    }

    /**
     * @return array
     */
    public function getRcxWsdlModules()
    {
        return $this->RcxWsdlModules;
    }
}
