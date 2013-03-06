<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfAdditionalCost extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfAdditionalCost';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var AdditionalCost[] $AdditionalCost
     */
    protected $AdditionalCost = array();

    /**
     * @param  AdditionalCost[]      $additionalCost
     * @return ArrayOfAdditionalCost
     */
    public function setAdditionalCost(array $additionalCost = array())
    {
        $this->AdditionalCost = $additionalCost;

        return $this;
    }

    /**
     * @return AdditionalCost[]
     */
    public function getAdditionalCost()
    {
        return $this->AdditionalCost;
    }

}
