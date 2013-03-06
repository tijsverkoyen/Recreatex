<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SortingCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SortingCriteria';

    /**
     * @var boolean
     */
    protected $IsAscending;

    /**
     * @var string
     */
    protected $PropertyName;

    /**
     * @param  boolean[optional] $isAscending
     * @return SortingCriteria
     */
    public function setIsAscending($isAscending)
    {
        $this->IsAscending = $isAscending;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAscending()
    {
        return $this->IsAscending;
    }

    /**
     * @param  string[optional] $propertyName
     * @return SortingCriteria
     */
    public function setPropertyName($propertyName)
    {
        $this->PropertyName = $propertyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPropertyName()
    {
        return $this->PropertyName;
    }
}
