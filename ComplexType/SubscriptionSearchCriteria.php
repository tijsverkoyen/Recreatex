<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SubscriptionSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SubscriptionSearchCriteria';

    /**
     * @var string
     */
    protected $CreatedFrom;

    /**
     * @var string
     */
    protected $CreatedUntil;

    /**
     * @var SubscriptionIncludes
     */
    protected $Includes;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonCardId;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var SimpleTypeGuid
     */
    protected $SubscriptionId;

    /**
     * @param  string[optional]           $createdFrom
     * @return SubscriptionSearchCriteria
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
     * @param  string[optional]           $createdUntil
     * @return SubscriptionSearchCriteria
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
     * @param  SubscriptionIncludes[optional] $includes
     * @return SubscriptionSearchCriteria
     */
    public function setIncludes(SubscriptionIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return SubscriptionIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria[optional]   $paging
     * @return SubscriptionSearchCriteria
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
     * @param  SimpleType\Guid[optional]  $personCardId
     * @return SubscriptionSearchCriteria
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
     * @param  SimpleType\Guid[optional]  $personId
     * @return SubscriptionSearchCriteria
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
     * @param  SimpleType\Guid[optional]  $subscriptionId
     * @return SubscriptionSearchCriteria
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
}
