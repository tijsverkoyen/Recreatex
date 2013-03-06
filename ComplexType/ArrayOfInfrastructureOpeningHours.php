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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var InfrastructureOpeningHours[] $InfrastructureOpeningHours
     */
    protected $InfrastructureOpeningHours = array();

    /**
     * @param  InfrastructureOpeningHours[]      $infrastructureOpeningHours
     * @return ArrayOfInfrastructureOpeningHours
     */
    public function setInfrastructureOpeningHours(array $infrastructureOpeningHours = array())
    {
        $this->InfrastructureOpeningHours = $infrastructureOpeningHours;

        return $this;
    }

    /**
     * @return InfrastructureOpeningHours[]
     */
    public function getInfrastructureOpeningHours()
    {
        return $this->InfrastructureOpeningHours;
    }

}
