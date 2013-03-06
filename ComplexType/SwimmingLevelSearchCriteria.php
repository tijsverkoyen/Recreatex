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
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var SimpleTypeGuid
     */
    protected $WaitingListId;

    /**
     * @param  PagingCriteria[optional]    $paging
     * @return SwimmingLevelSearchCriteria
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

    /**
     * @param  SimpleType\Guid[optional]   $waitingListId
     * @return SwimmingLevelSearchCriteria
     */
    public function setWaitingListId(SimpleType\Guid $waitingListId = null)
    {
        $this->WaitingListId = $waitingListId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getWaitingListId()
    {
        return $this->WaitingListId;
    }
}
