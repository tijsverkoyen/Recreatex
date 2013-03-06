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

     * maxOccurs = unbounded     * @var array
     */
    protected $AdditionalCost = array();

    /**
     * @param  array                 $additionalCost
     * @return ArrayOfAdditionalCost
     */
    public function setAdditionalCost(array $additionalCost = array())
    {
        $this->AdditionalCost = $additionalCost;

        return $this;
    }

    /**
     * @return array
     */
    public function getAdditionalCost()
    {
        if (!is_array($this->AdditionalCost)) {
            return array($this->AdditionalCost);
        }

        return $this->AdditionalCost;
    }
}
