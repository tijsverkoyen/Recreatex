<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class WaitingListSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'WaitingListSearchCriteria';

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @param  PagingCriteria[optional]  $paging
     * @return WaitingListSearchCriteria
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
     * @param  SimpleType\Guid[optional] $personId
     * @return WaitingListSearchCriteria
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }
}
