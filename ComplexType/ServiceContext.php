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
     * @var SimpleType\guid|null $DivisionId
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
     * @var SimpleType\guid|null $ShopId
     */
    protected $ShopId;


    /**
     * @param SimpleType\guid|null $divisionId
     * @return ServiceContext
     */
    public function setDivisionId(SimpleType\guid $divisionId = null)
    {
        $this->DivisionId = $divisionId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getDivisionId()
    {
        return $this->DivisionId;
    }

    /**
     * @param string|null $language
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
     * @param SimpleType\guid|null $shopId
     * @return ServiceContext
     */
    public function setShopId(SimpleType\guid $shopId = null)
    {
        $this->ShopId = $shopId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getShopId()
    {
        return $this->ShopId;
    }


}

