<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SubscriptionArticleSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SubscriptionArticleSearchCriteria';

    /**

     * maxOccurs = 1     * @var SimpleTypeGuid
     */
    protected $SubscriptionArticleId;

    /**

     * maxOccurs = 1     * @var string
     */
    protected $NamePattern;

    /**

     * maxOccurs = 1     * @var SimpleTypeGuid
     */
    protected $BuyerId;

    /**

     * maxOccurs = 1     * @var SimpleType\SubscriptionType
     */
    protected $Types;

    /**

     * maxOccurs = 1     * @var PagingCriteria
     */
    protected $Paging;

    /**

     * maxOccurs = 1     * @var SubscriptionArticleIncludes
     */
    protected $Includes;

    /**
     * @param  SimpleType\Guid[optional]         $subscriptionArticleId
     * @return SubscriptionArticleSearchCriteria
     */
    public function setSubscriptionArticleId(SimpleType\Guid $subscriptionArticleId = null)
    {
        $this->SubscriptionArticleId = $subscriptionArticleId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getSubscriptionArticleId()
    {
        return $this->SubscriptionArticleId;
    }

    /**
     * @param  string[optional]                  $namePattern
     * @return SubscriptionArticleSearchCriteria
     */
    public function setNamePattern($namePattern)
    {
        $this->NamePattern = $namePattern;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamePattern()
    {
        return $this->NamePattern;
    }

    /**
     * @param  SimpleType\Guid[optional]         $buyerId
     * @return SubscriptionArticleSearchCriteria
     */
    public function setBuyerId(SimpleType\Guid $buyerId = null)
    {
        $this->BuyerId = $buyerId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getBuyerId()
    {
        return $this->BuyerId;
    }

    /**
     * @param  SimpleType\SubscriptionType[optional] $types
     * @return SubscriptionArticleSearchCriteria
     */
    public function setTypes(SimpleType\SubscriptionType $types = null)
    {
        $this->Types = $types;

        return $this;
    }

    /**
     * @return SimpleType\SubscriptionType
     */
    public function getTypes()
    {
        return $this->Types;
    }

    /**
     * @param  PagingCriteria[optional]          $paging
     * @return SubscriptionArticleSearchCriteria
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
     * @param  SubscriptionArticleIncludes[optional] $includes
     * @return SubscriptionArticleSearchCriteria
     */
    public function setIncludes(SubscriptionArticleIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return SubscriptionArticleIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }
}
