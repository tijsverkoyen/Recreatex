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
     * @var SubscriptionIncludes|null $Includes
     */
    protected $Includes;

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
     * @var SimpleType\guid|null $SubscriptionId
     */
    protected $SubscriptionId;

    /**
     * @param  string|null                $createdFrom
     * @return SubscriptionSearchCriteria
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
     * @param  string|null                $createdUntil
     * @return SubscriptionSearchCriteria
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
     * @param  SubscriptionIncludes|null  $includes
     * @return SubscriptionSearchCriteria
     */
    public function setIncludes(SubscriptionIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return SubscriptionIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria|null        $paging
     * @return SubscriptionSearchCriteria
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
     * @param  SimpleType\guid|null       $personCardId
     * @return SubscriptionSearchCriteria
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
     * @param  SimpleType\guid|null       $personId
     * @return SubscriptionSearchCriteria
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
     * @param  SimpleType\guid|null       $subscriptionId
     * @return SubscriptionSearchCriteria
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

}
