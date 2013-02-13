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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Cost
     */
    protected $Cost;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

    /**
     * @param  float|null     $cost
     * @return AdditionalCost
     */
    public function setCost($cost)
    {
        $this->Cost = $cost;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getCost()
    {
        return $this->Cost;
    }

    /**
     * @param  string|null    $name
     * @return AdditionalCost
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
}
