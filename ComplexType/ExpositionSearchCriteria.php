<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * The search criteria that will be applied to the search query
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExpositionSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpositionSearchCriteria';

    /**
     * Only include expositions for this target audience
     * @var SimpleType\Guid
     */
    protected $AudienceId;

    /**
     * The ID of a specific exposition that you want to find
     * @var SimpleType\Guid
     */
    protected $ExpositionId;

    /**
     * Only include expositions of this type
     * @var SimpleType\Guid
     */
    protected $ExpositionTypeId;

    /**
     * Ignore expositions that end before this time
     * @var string
     */
    protected $From;

    /**
     * @var ExpositionIncludes
     */
    protected $Includes;

    /**
     * Part of the name of the exposition to find. Use an asteriks (*) as the wildcard.
     * @var string
     */
    protected $NamePattern;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * Ignore expositions that begin after this time
     * @var string
     */
    protected $Until;

    /**
     * Only include expositions which have a translation in the requested language
     * @var boolean
     */
    protected $TranslationRequired;

    /**
     * @param  SimpleType\Guid[optional] $audienceId
     * @return ExpositionSearchCriteria
     */
    public function setAudienceId(SimpleType\Guid $audienceId = null)
    {
        $this->AudienceId = $audienceId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getAudienceId()
    {
        return $this->AudienceId;
    }

    /**
     * @param  SimpleType\Guid[optional] $expositionId
     * @return ExpositionSearchCriteria
     */
    public function setExpositionId(SimpleType\Guid $expositionId = null)
    {
        $this->ExpositionId = $expositionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getExpositionId()
    {
        return $this->ExpositionId;
    }

    /**
     * @param  SimpleType\Guid[optional] $expositionTypeId
     * @return ExpositionSearchCriteria
     */
    public function setExpositionTypeId(SimpleType\Guid $expositionTypeId = null)
    {
        $this->ExpositionTypeId = $expositionTypeId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getExpositionTypeId()
    {
        return $this->ExpositionTypeId;
    }

    /**
     * @param  string[optional]         $from
     * @return ExpositionSearchCriteria
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  ExpositionIncludes[optional] $includes
     * @return ExpositionSearchCriteria
     */
    public function setIncludes(ExpositionIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ExpositionIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  string[optional]         $namePattern
     * @return ExpositionSearchCriteria
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
     * @param  PagingCriteria[optional] $paging
     * @return ExpositionSearchCriteria
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
     * @param  string[optional]         $until
     * @return ExpositionSearchCriteria
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string
     */
    public function getUntil()
    {
        return $this->Until;
    }

    /**
     * @param  boolean[optional]        $translationRequired
     * @return ExpositionSearchCriteria
     */
    public function setTranslationRequired($translationRequired)
    {
        $this->TranslationRequired = $translationRequired;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTranslationRequired()
    {
        return $this->TranslationRequired;
    }
}
