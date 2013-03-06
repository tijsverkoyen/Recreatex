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
     * @var SimpleType\Guid
     */
    protected $DivisionId;

    /**
     * @var string
     */
    protected $Language;

    /**
     * @var SimpleType\Guid
     */
    protected $ShopId;

    /**
     * @var SimpleTypeGuid
     */
    protected $SessionId;

    /**
     * @param  SimpleType\Guid[optional] $divisionId
     * @return ServiceContext
     */
    public function setDivisionId(SimpleType\Guid $divisionId = null)
    {
        $this->DivisionId = $divisionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getDivisionId()
    {
        return $this->DivisionId;
    }

    /**
     * @param  string[optional] $language
     * @return ServiceContext
     */
    public function setLanguage($language)
    {
        $this->Language = $language;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param  SimpleType\Guid[optional] $shopId
     * @return ServiceContext
     */
    public function setShopId(SimpleType\Guid $shopId = null)
    {
        $this->ShopId = $shopId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getShopId()
    {
        return $this->ShopId;
    }

    /**
     * @param  SimpleType\Guid[optional] $sessionId
     * @return ServiceContext
     */
    public function setSessionId(SimpleType\Guid $sessionId = null)
    {
        $this->SessionId = $sessionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getSessionId()
    {
        return $this->SessionId;
    }
}
