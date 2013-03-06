<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ReservationCost extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ReservationCost';

    /**
     * @var float
     */
    protected $MaximumCost;

    /**
     * @param  float[optional] $maximumCost
     * @return ReservationCost
     */
    public function setMaximumCost($maximumCost)
    {
        $this->MaximumCost = $maximumCost;

        return $this;
    }

    /**
     * @return float
     */
    public function getMaximumCost()
    {
        return $this->MaximumCost;
    }
}
