<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfInfrastructureOpeningHours extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfInfrastructureOpeningHours';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $InfrastructureOpeningHours = array();

    /**
     * @param  array                             $infrastructureOpeningHours
     * @return ArrayOfInfrastructureOpeningHours
     */
    public function setInfrastructureOpeningHours(array $infrastructureOpeningHours = array())
    {
        $this->InfrastructureOpeningHours = $infrastructureOpeningHours;

        return $this;
    }

    /**
     * @return array
     */
    public function getInfrastructureOpeningHours()
    {
        return $this->InfrastructureOpeningHours;
    }
}
