<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SubscriptionLogSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SubscriptionLogSearchCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $SubscriptionLogId;

    /**
     * @var SimpleTypeGuid
     */
    protected $SubscriptionId;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonCardId;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var string
     */
    protected $CreatedFrom;

    /**
     * @var string
     */
    protected $CreatedUntil;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var SubscriptionLogIncludes
     */
    protected $Includes;

    /**
     * @param  SimpleType\Guid[optional]     $subscriptionLogId
     * @return SubscriptionLogSearchCriteria
     */
    public function setSubscriptionLogId(SimpleType\Guid $subscriptionLogId = null)
    {
        $this->SubscriptionLogId = $subscriptionLogId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getSubscriptionLogId()
    {
        return $this->SubscriptionLogId;
    }

    /**
     * @param  SimpleType\Guid[optional]     $subscriptionId
     * @return SubscriptionLogSearchCriteria
     */
    public function setSubscriptionId(SimpleType\Guid $subscriptionId = null)
    {
        $this->SubscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }

    /**
     * @param  SimpleType\Guid[optional]     $personCardId
     * @return SubscriptionLogSearchCriteria
     */
    public function setPersonCardId(SimpleType\Guid $personCardId = null)
    {
        $this->PersonCardId = $personCardId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPersonCardId()
    {
        return $this->PersonCardId;
    }

    /**
     * @param  SimpleType\Guid[optional]     $personId
     * @return SubscriptionLogSearchCriteria
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

    /**
     * @param  string[optional]              $createdFrom
     * @return SubscriptionLogSearchCriteria
     */
    public function setCreatedFrom($createdFrom)
    {
        $this->CreatedFrom = $createdFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedFrom()
    {
        return $this->CreatedFrom;
    }

    /**
     * @param  string[optional]              $createdUntil
     * @return SubscriptionLogSearchCriteria
     */
    public function setCreatedUntil($createdUntil)
    {
        $this->CreatedUntil = $createdUntil;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedUntil()
    {
        return $this->CreatedUntil;
    }

    /**
     * @param  PagingCriteria[optional]      $paging
     * @return SubscriptionLogSearchCriteria
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
     * @param  SubscriptionLogIncludes[optional] $includes
     * @return SubscriptionLogSearchCriteria
     */
    public function setIncludes(SubscriptionLogIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return SubscriptionLogIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }
}
