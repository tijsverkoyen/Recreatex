<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PriceGroupSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PriceGroupSearchCriteria';

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var SimpleType\PriceGroupType[optional] $Type
     */
    protected $Type;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return PriceGroupSearchCriteria
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\PriceGroupType[optional] $type
     * @return PriceGroupSearchCriteria
     */
    public function setType(SimpleType\PriceGroupType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\PriceGroupType
     */
    public function getType()
    {
        return $this->Type;
    }
}
