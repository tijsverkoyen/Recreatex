<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ReservationCost extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ReservationCost';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $MaximumCost
     */
    protected $MaximumCost;


    /**
     * @param float|null $maximumCost
     * @return ReservationCost
     */
    public function setMaximumCost($maximumCost)
    {
        $this->MaximumCost = $maximumCost;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMaximumCost()
    {
        return $this->MaximumCost;
    }


}

