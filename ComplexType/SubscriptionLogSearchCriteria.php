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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $SubscriptionLogId
     */
    protected $SubscriptionLogId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $SubscriptionId
     */
    protected $SubscriptionId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PersonCardId
     */
    protected $PersonCardId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PersonId
     */
    protected $PersonId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CreatedFrom
     */
    protected $CreatedFrom;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CreatedUntil
     */
    protected $CreatedUntil;

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
     * @var SubscriptionLogIncludes|null $Includes
     */
    protected $Includes;

    /**
     * @param  SimpleType\guid|null          $subscriptionLogId
     * @return SubscriptionLogSearchCriteria
     */
    public function setSubscriptionLogId(SimpleType\guid $subscriptionLogId = null)
    {
        $this->SubscriptionLogId = $subscriptionLogId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSubscriptionLogId()
    {
        return $this->SubscriptionLogId;
    }

    /**
     * @param  SimpleType\guid|null          $subscriptionId
     * @return SubscriptionLogSearchCriteria
     */
    public function setSubscriptionId(SimpleType\guid $subscriptionId = null)
    {
        $this->SubscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }

    /**
     * @param  SimpleType\guid|null          $personCardId
     * @return SubscriptionLogSearchCriteria
     */
    public function setPersonCardId(SimpleType\guid $personCardId = null)
    {
        $this->PersonCardId = $personCardId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPersonCardId()
    {
        return $this->PersonCardId;
    }

    /**
     * @param  SimpleType\guid|null          $personId
     * @return SubscriptionLogSearchCriteria
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  string|null                   $createdFrom
     * @return SubscriptionLogSearchCriteria
     */
    public function setCreatedFrom($createdFrom)
    {
        $this->CreatedFrom = $createdFrom;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreatedFrom()
    {
        return $this->CreatedFrom;
    }

    /**
     * @param  string|null                   $createdUntil
     * @return SubscriptionLogSearchCriteria
     */
    public function setCreatedUntil($createdUntil)
    {
        $this->CreatedUntil = $createdUntil;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreatedUntil()
    {
        return $this->CreatedUntil;
    }

    /**
     * @param  PagingCriteria|null           $paging
     * @return SubscriptionLogSearchCriteria
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
     * @param  SubscriptionLogIncludes|null  $includes
     * @return SubscriptionLogSearchCriteria
     */
    public function setIncludes(SubscriptionLogIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return SubscriptionLogIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

}
