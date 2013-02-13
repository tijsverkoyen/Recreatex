<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureEventSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureEventSearchCriteria';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $CultureActivityId
     */
    protected $CultureActivityId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $CultureEventId
     */
    protected $CultureEventId;

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
     * @var CultureEventIncludes|null $Includes
     */
    protected $Includes;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

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
     * @var string|null $Until
     */
    protected $Until;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $CultureEventCategoryId
     */
    protected $CultureEventCategoryId;


    /**
     * @param SimpleType\guid|null $cultureActivityId
     * @return CultureEventSearchCriteria
     */
    public function setCultureActivityId(SimpleType\guid $cultureActivityId = null)
    {
        $this->CultureActivityId = $cultureActivityId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCultureActivityId()
    {
        return $this->CultureActivityId;
    }

    /**
     * @param SimpleType\guid|null $cultureEventId
     * @return CultureEventSearchCriteria
     */
    public function setCultureEventId(SimpleType\guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param string|null $from
     * @return CultureEventSearchCriteria
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
     * @param CultureEventIncludes|null $includes
     * @return CultureEventSearchCriteria
     */
    public function setIncludes(CultureEventIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return CultureEventIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param string|null $name
     * @return CultureEventSearchCriteria
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param PagingCriteria|null $paging
     * @return CultureEventSearchCriteria
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
     * @return CultureEventSearchCriteria
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
     * @param SimpleType\guid|null $cultureEventCategoryId
     * @return CultureEventSearchCriteria
     */
    public function setCultureEventCategoryId(SimpleType\guid $cultureEventCategoryId = null)
    {
        $this->CultureEventCategoryId = $cultureEventCategoryId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCultureEventCategoryId()
    {
        return $this->CultureEventCategoryId;
    }


}

