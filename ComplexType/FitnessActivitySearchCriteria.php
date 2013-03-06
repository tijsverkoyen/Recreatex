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
     * @var SimpleTypeGuid
     */
    protected $FitnessActivityId;

    /**
     * @var ArrayOfGuid
     */
    protected $FitnessActivityIds;

    /**
     * @var string
     */
    protected $DescriptionPattern;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var string
     */
    protected $Until;

    /**
     * @var SimpleTypeGuid
     */
    protected $CardId;

    /**
     * @var SimpleTypeGuid
     */
    protected $SubscriptionId;

    /**
     * @var SimpleTypeGuid
     */
    protected $LocationId;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var FitnessActivityIncludes
     */
    protected $Includes;

    /**
     * @param  SimpleType\Guid[optional]     $fitnessActivityId
     * @return FitnessActivitySearchCriteria
     */
    public function setFitnessActivityId(SimpleType\Guid $fitnessActivityId = null)
    {
        $this->FitnessActivityId = $fitnessActivityId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getFitnessActivityId()
    {
        return $this->FitnessActivityId;
    }

    /**
     * @param  ArrayOfguid[optional]         $fitnessActivityIds
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
     * @param  string[optional]              $descriptionPattern
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
     * @param  string[optional]              $from
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
     * @param  string[optional]              $until
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
     * @param  SimpleType\Guid[optional]     $cardId
     * @return FitnessActivitySearchCriteria
     */
    public function setCardId(SimpleType\Guid $cardId = null)
    {
        $this->CardId = $cardId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCardId()
    {
        return $this->CardId;
    }

    /**
     * @param  SimpleType\Guid[optional]     $subscriptionId
     * @return FitnessActivitySearchCriteria
     */
    public function setSubscriptionId(SimpleType\Guid $subscriptionId = null)
    {
        $this->SubscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }

    /**
     * @param  SimpleType\Guid[optional]     $locationId
     * @return FitnessActivitySearchCriteria
     */
    public function setLocationId(SimpleType\Guid $locationId = null)
    {
        $this->LocationId = $locationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }

    /**
     * @param  PagingCriteria[optional]      $paging
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
     * @param  FitnessActivityIncludes[optional] $includes
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
