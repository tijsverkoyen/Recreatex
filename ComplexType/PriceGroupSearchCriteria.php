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
     * @var SimpleType\PriceGroupType|null $Type
     */
    protected $Type;

    /**
     * @param  SimpleType\Guid|null     $id
     * @return PriceGroupSearchCriteria
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\PriceGroupType|null $type
     * @return PriceGroupSearchCriteria
     */
    public function setType(SimpleType\PriceGroupType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\PriceGroupType|null
     */
    public function getType()
    {
        return $this->Type;
    }
}
