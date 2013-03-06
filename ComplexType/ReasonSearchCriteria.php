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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ID
     */
    protected $ID;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ReasonType|null $ReasonType
     */
    protected $ReasonType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**
     * @param  SimpleType\guid|null $iD
     * @return ReasonSearchCriteria
     */
    public function setID(SimpleType\guid $iD = null)
    {
        $this->ID = $iD;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param  SimpleType\ReasonType|null $reasonType
     * @return ReasonSearchCriteria
     */
    public function setReasonType(SimpleType\ReasonType $reasonType = null)
    {
        $this->ReasonType = $reasonType;

        return $this;
    }

    /**
     * @return SimpleType\ReasonType|null
     */
    public function getReasonType()
    {
        return $this->ReasonType;
    }

    /**
     * @param  PagingCriteria|null  $paging
     * @return ReasonSearchCriteria
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
