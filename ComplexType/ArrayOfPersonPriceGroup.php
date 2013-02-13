<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPersonPriceGroup extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPersonPriceGroup';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var PersonPriceGroup[] $PersonPriceGroup
     */
    protected $PersonPriceGroup = array();


    /**
     * @param PersonPriceGroup[] $personPriceGroup
     * @return ArrayOfPersonPriceGroup
     */
    public function setPersonPriceGroup(array $personPriceGroup = array())
    {
        $this->PersonPriceGroup = $personPriceGroup;

        return $this;
    }

    /**
     * @return PersonPriceGroup[]
     */
    public function getPersonPriceGroup()
    {
        return $this->PersonPriceGroup;
    }


}

