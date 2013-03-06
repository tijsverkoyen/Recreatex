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
     * @var SimpleType\guid|null $ZipcodeId
     */
    protected $ZipcodeId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $StreetNamePattern
     */
    protected $StreetNamePattern;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IncludeZipcodes
     */
    protected $IncludeZipcodes;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**
     * @param  SimpleType\guid|null         $id
     * @return ZipcodeStreetsSearchCriteria
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
     * @param  SimpleType\guid|null         $zipcodeId
     * @return ZipcodeStreetsSearchCriteria
     */
    public function setZipcodeId(SimpleType\guid $zipcodeId = null)
    {
        $this->ZipcodeId = $zipcodeId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getZipcodeId()
    {
        return $this->ZipcodeId;
    }

    /**
     * @param  string|null                  $streetNamePattern
     * @return ZipcodeStreetsSearchCriteria
     */
    public function setStreetNamePattern($streetNamePattern)
    {
        $this->StreetNamePattern = $streetNamePattern;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreetNamePattern()
    {
        return $this->StreetNamePattern;
    }

    /**
     * @param  boolean|null                 $includeZipcodes
     * @return ZipcodeStreetsSearchCriteria
     */
    public function setIncludeZipcodes($includeZipcodes)
    {
        $this->IncludeZipcodes = $includeZipcodes;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIncludeZipcodes()
    {
        return $this->IncludeZipcodes;
    }

    /**
     * @param  PagingCriteria|null          $paging
     * @return ZipcodeStreetsSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria|null
     */
    public function getPaging()
    {
        return $this->Paging;
    }

}
