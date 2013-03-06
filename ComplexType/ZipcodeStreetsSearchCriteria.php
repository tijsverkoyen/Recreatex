<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ZipcodeStreetsSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ZipcodeStreetsSearchCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $ZipcodeId;

    /**
     * @var string
     */
    protected $StreetNamePattern;

    /**
     * @var boolean
     */
    protected $IncludeZipcodes;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @param  SimpleType\Guid[optional]    $id
     * @return ZipcodeStreetsSearchCriteria
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
     * @param  SimpleType\Guid[optional]    $zipcodeId
     * @return ZipcodeStreetsSearchCriteria
     */
    public function setZipcodeId(SimpleType\Guid $zipcodeId = null)
    {
        $this->ZipcodeId = $zipcodeId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getZipcodeId()
    {
        return $this->ZipcodeId;
    }

    /**
     * @param  string[optional]             $streetNamePattern
     * @return ZipcodeStreetsSearchCriteria
     */
    public function setStreetNamePattern($streetNamePattern)
    {
        $this->StreetNamePattern = $streetNamePattern;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNamePattern()
    {
        return $this->StreetNamePattern;
    }

    /**
     * @param  boolean[optional]            $includeZipcodes
     * @return ZipcodeStreetsSearchCriteria
     */
    public function setIncludeZipcodes($includeZipcodes)
    {
        $this->IncludeZipcodes = $includeZipcodes;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeZipcodes()
    {
        return $this->IncludeZipcodes;
    }

    /**
     * @param  PagingCriteria[optional]     $paging
     * @return ZipcodeStreetsSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria
     */
    public function getPaging()
    {
        return $this->Paging;
    }
}
