<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ReasonSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ReasonSearchCriteria';

    /**

     * @var SimpleTypeGuid
     */
    protected $ID;

    /**

     * @var SimpleType\ReasonType
     */
    protected $ReasonType;

    /**

     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @param  SimpleType\Guid[optional] $iD
     * @return ReasonSearchCriteria
     */
    public function setID(SimpleType\Guid $iD = null)
    {
        $this->ID = $iD;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param  SimpleType\ReasonType[optional] $reasonType
     * @return ReasonSearchCriteria
     */
    public function setReasonType(SimpleType\ReasonType $reasonType = null)
    {
        $this->ReasonType = $reasonType;

        return $this;
    }

    /**
     * @return SimpleType\ReasonType
     */
    public function getReasonType()
    {
        return $this->ReasonType;
    }

    /**
     * @param  PagingCriteria[optional] $paging
     * @return ReasonSearchCriteria
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
