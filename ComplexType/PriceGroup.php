<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PriceGroup extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PriceGroup';

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var SimpleType\PriceGroupType|null $Type
     */
    protected $Type;

    /**
     * @param  SimpleType\Guid|null $id
     * @return PriceGroup
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
     * @param  string|null $name
     * @return PriceGroup
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  SimpleType\PriceGroupType|null $type
     * @return PriceGroup
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
