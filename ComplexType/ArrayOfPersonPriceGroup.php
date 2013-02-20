<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPersonPriceGroup extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPersonPriceGroup';

    /**
     * @var array
     */
    protected $PersonPriceGroup = array();

    /**
     * @param  array      $personPriceGroup
     * @return ArrayOfPersonPriceGroup
     */
    public function setPersonPriceGroup(array $personPriceGroup = array())
    {
        $this->PersonPriceGroup = $personPriceGroup;

        return $this;
    }

    /**
     * @return array
     */
    public function getPersonPriceGroup()
    {
        return $this->PersonPriceGroup;
    }
}
