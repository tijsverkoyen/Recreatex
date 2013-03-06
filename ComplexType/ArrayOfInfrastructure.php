<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfInfrastructure extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfInfrastructure';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Infrastructure[] $Infrastructure
     */
    protected $Infrastructure = array();

    /**
     * @param  Infrastructure[]      $infrastructure
     * @return ArrayOfInfrastructure
     */
    public function setInfrastructure(array $infrastructure = array())
    {
        $this->Infrastructure = $infrastructure;

        return $this;
    }

    /**
     * @return Infrastructure[]
     */
    public function getInfrastructure()
    {
        return $this->Infrastructure;
    }

}
