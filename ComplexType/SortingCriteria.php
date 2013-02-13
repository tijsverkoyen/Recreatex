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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsAscending
     */
    protected $IsAscending;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PropertyName
     */
    protected $PropertyName;

    /**
     * @param  boolean|null    $isAscending
     * @return SortingCriteria
     */
    public function setIsAscending($isAscending)
    {
        $this->IsAscending = $isAscending;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsAscending()
    {
        return $this->IsAscending;
    }

    /**
     * @param  string|null     $propertyName
     * @return SortingCriteria
     */
    public function setPropertyName($propertyName)
    {
        $this->PropertyName = $propertyName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPropertyName()
    {
        return $this->PropertyName;
    }
}
