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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $SubscriptionArticleId
     */
    protected $SubscriptionArticleId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $NamePattern
     */
    protected $NamePattern;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $BuyerId
     */
    protected $BuyerId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\SubscriptionType|null $Types
     */
    protected $Types;

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
     * @var SubscriptionArticleIncludes|null $Includes
     */
    protected $Includes;

    /**
     * @param  SimpleType\guid|null              $subscriptionArticleId
     * @return SubscriptionArticleSearchCriteria
     */
    public function setSubscriptionArticleId(SimpleType\guid $subscriptionArticleId = null)
    {
        $this->SubscriptionArticleId = $subscriptionArticleId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSubscriptionArticleId()
    {
        return $this->SubscriptionArticleId;
    }

    /**
     * @param  string|null                       $namePattern
     * @return SubscriptionArticleSearchCriteria
     */
    public function setNamePattern($namePattern)
    {
        $this->NamePattern = $namePattern;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNamePattern()
    {
        return $this->NamePattern;
    }

    /**
     * @param  SimpleType\guid|null              $buyerId
     * @return SubscriptionArticleSearchCriteria
     */
    public function setBuyerId(SimpleType\guid $buyerId = null)
    {
        $this->BuyerId = $buyerId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getBuyerId()
    {
        return $this->BuyerId;
    }

    /**
     * @param  SimpleType\SubscriptionType|null  $types
     * @return SubscriptionArticleSearchCriteria
     */
    public function setTypes(SimpleType\SubscriptionType $types = null)
    {
        $this->Types = $types;

        return $this;
    }

    /**
     * @return SimpleType\SubscriptionType|null
     */
    public function getTypes()
    {
        return $this->Types;
    }

    /**
     * @param  PagingCriteria|null               $paging
     * @return SubscriptionArticleSearchCriteria
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
     * @param  SubscriptionArticleIncludes|null  $includes
     * @return SubscriptionArticleSearchCriteria
     */
    public function setIncludes(SubscriptionArticleIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return SubscriptionArticleIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

}
