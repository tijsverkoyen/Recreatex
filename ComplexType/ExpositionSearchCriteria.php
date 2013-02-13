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
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $AudienceId
     */
    protected $AudienceId;

    /**
     * The ID of a specific exposition that you want to find 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ExpositionId
     */
    protected $ExpositionId;

    /**
     * Only include expositions of this type 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ExpositionTypeId
     */
    protected $ExpositionTypeId;

    /**
     * Ignore expositions that end before this time 
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
     * @var ExpositionIncludes|null $Includes
     */
    protected $Includes;

    /**
     * Part of the name of the exposition to find. Use an asteriks (*) as the wildcard. 
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
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**
     * Ignore expositions that begin after this time 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Until
     */
    protected $Until;

    /**
     * Only include expositions which have a translation in the requested language 
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $TranslationRequired
     */
    protected $TranslationRequired;


    /**
     * @param SimpleType\guid|null $audienceId
     * @return ExpositionSearchCriteria
     */
    public function setAudienceId(SimpleType\guid $audienceId = null)
    {
        $this->AudienceId = $audienceId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getAudienceId()
    {
        return $this->AudienceId;
    }

    /**
     * @param SimpleType\guid|null $expositionId
     * @return ExpositionSearchCriteria
     */
    public function setExpositionId(SimpleType\guid $expositionId = null)
    {
        $this->ExpositionId = $expositionId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getExpositionId()
    {
        return $this->ExpositionId;
    }

    /**
     * @param SimpleType\guid|null $expositionTypeId
     * @return ExpositionSearchCriteria
     */
    public function setExpositionTypeId(SimpleType\guid $expositionTypeId = null)
    {
        $this->ExpositionTypeId = $expositionTypeId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getExpositionTypeId()
    {
        return $this->ExpositionTypeId;
    }

    /**
     * @param string|null $from
     * @return ExpositionSearchCriteria
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
     * @param ExpositionIncludes|null $includes
     * @return ExpositionSearchCriteria
     */
    public function setIncludes(ExpositionIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ExpositionIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param string|null $namePattern
     * @return ExpositionSearchCriteria
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
     * @param PagingCriteria|null $paging
     * @return ExpositionSearchCriteria
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
     * @param string|null $until
     * @return ExpositionSearchCriteria
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
     * @param boolean|null $translationRequired
     * @return ExpositionSearchCriteria
     */
    public function setTranslationRequired($translationRequired)
    {
        $this->TranslationRequired = $translationRequired;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getTranslationRequired()
    {
        return $this->TranslationRequired;
    }


}

