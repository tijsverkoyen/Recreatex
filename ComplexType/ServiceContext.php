<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ServiceContext extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ServiceContext';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $DivisionId
     */
    protected $DivisionId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Language
     */
    protected $Language;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $ShopId
     */
    protected $ShopId;

    /**
     * @param  SimpleType\Guid|null $divisionId
     * @return ServiceContext
     */
    public function setDivisionId(SimpleType\Guid $divisionId = null)
    {
        $this->DivisionId = $divisionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getDivisionId()
    {
        return $this->DivisionId;
    }

    /**
     * @param  string|null    $language
     * @return ServiceContext
     */
    public function setLanguage($language)
    {
        $this->Language = $language;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param  SimpleType\Guid|null $shopId
     * @return ServiceContext
     */
    public function setShopId(SimpleType\Guid $shopId = null)
    {
        $this->ShopId = $shopId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getShopId()
    {
        return $this->ShopId;
    }
}
