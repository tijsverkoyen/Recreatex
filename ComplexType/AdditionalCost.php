<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class AdditionalCost extends ComplexTypeAbstract
{
    const CLASS_NAME = 'AdditionalCost';

    /**
     * @var float
     */
    protected $Cost;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @param  float[optional] $cost
     * @return AdditionalCost
     */
    public function setCost($cost)
    {
        $this->Cost = $cost;

        return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->Cost;
    }

    /**
     * @param  string[optional] $name
     * @return AdditionalCost
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
}
