<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FitnessActivitySearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FitnessActivitySearchCriteria';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $FitnessActivityId
     */
    protected $FitnessActivityId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfguid|null $FitnessActivityIds
     */
    protected $FitnessActivityIds;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DescriptionPattern
     */
    protected $DescriptionPattern;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $From
     */
    protected $From;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Until
     */
    protected $Until;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $CardId
     */
    protected $CardId;

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
     * @var SimpleType\guid|null $LocationId
     */
    protected $LocationId;

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
     * @var FitnessActivityIncludes|null $Includes
     */
    protected $Includes;

    /**
     * @param  SimpleType\guid|null          $fitnessActivityId
     * @return FitnessActivitySearchCriteria
     */
    public function setFitnessActivityId(SimpleType\guid $fitnessActivityId = null)
    {
        $this->FitnessActivityId = $fitnessActivityId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getFitnessActivityId()
    {
        return $this->FitnessActivityId;
    }

    /**
     * @param  ArrayOfguid|null              $fitnessActivityIds
     * @return FitnessActivitySearchCriteria
     */
    public function setFitnessActivityIds(ArrayOfguid $fitnessActivityIds = null)
    {
        $this->FitnessActivityIds = $fitnessActivityIds;

        return $this;
    }

    /**
     * @return ArrayOfguid|null
     */
    public function getFitnessActivityIds()
    {
        return $this->FitnessActivityIds;
    }

    /**
     * @param  string|null                   $descriptionPattern
     * @return FitnessActivitySearchCriteria
     */
    public function setDescriptionPattern($descriptionPattern)
    {
        $this->DescriptionPattern = $descriptionPattern;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescriptionPattern()
    {
        return $this->DescriptionPattern;
    }

    /**
     * @param  string|null                   $from
     * @return FitnessActivitySearchCriteria
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  string|null                   $until
     * @return FitnessActivitySearchCriteria
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUntil()
    {
        return $this->Until;
    }

    /**
     * @param  SimpleType\guid|null          $cardId
     * @return FitnessActivitySearchCriteria
     */
    public function setCardId(SimpleType\guid $cardId = null)
    {
        $this->CardId = $cardId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCardId()
    {
        return $this->CardId;
    }

    /**
     * @param  SimpleType\guid|null          $subscriptionId
     * @return FitnessActivitySearchCriteria
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
     * @param  SimpleType\guid|null          $locationId
     * @return FitnessActivitySearchCriteria
     */
    public function setLocationId(SimpleType\guid $locationId = null)
    {
        $this->LocationId = $locationId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }

    /**
     * @param  PagingCriteria|null           $paging
     * @return FitnessActivitySearchCriteria
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
     * @param  FitnessActivityIncludes|null  $includes
     * @return FitnessActivitySearchCriteria
     */
    public function setIncludes(FitnessActivityIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return FitnessActivityIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

}
