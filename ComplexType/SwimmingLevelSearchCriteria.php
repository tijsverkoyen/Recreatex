<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SwimmingLevelSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SwimmingLevelSearchCriteria';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $WaitingListId
     */
    protected $WaitingListId;

    /**
     * @param  PagingCriteria|null         $paging
     * @return SwimmingLevelSearchCriteria
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

    /**
     * @param  SimpleType\guid|null        $waitingListId
     * @return SwimmingLevelSearchCriteria
     */
    public function setWaitingListId(SimpleType\guid $waitingListId = null)
    {
        $this->WaitingListId = $waitingListId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getWaitingListId()
    {
        return $this->WaitingListId;
    }

}
