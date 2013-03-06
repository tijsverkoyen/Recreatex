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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\PriceGroupType|null $Type
     */
    protected $Type;

    /**
     * @param  SimpleType\guid|null     $id
     * @return PriceGroupSearchCriteria
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
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
