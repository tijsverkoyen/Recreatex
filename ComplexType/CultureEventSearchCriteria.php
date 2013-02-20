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
     * @var SimpleType\Guid
     */
    protected $CultureActivityId;

    /**
     * @var SimpleType\Guid
     */
    protected $CultureEventId;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var CultureEventIncludes
     */
    protected $Includes;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var string
     */
    protected $Until;

    /**
     * @var SimpleType\Guid
     */
    protected $CultureEventCategoryId;

    /**
     * @param  SimpleType\Guid|null       $cultureActivityId
     * @return CultureEventSearchCriteria
     */
    public function setCultureActivityId(SimpleType\Guid $cultureActivityId = null)
    {
        $this->CultureActivityId = $cultureActivityId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCultureActivityId()
    {
        return $this->CultureActivityId;
    }

    /**
     * @param  SimpleType\Guid|null       $cultureEventId
     * @return CultureEventSearchCriteria
     */
    public function setCultureEventId(SimpleType\Guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  string|null                $from
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
     * @param  CultureEventIncludes|null  $includes
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
     * @param  string|null                $name
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
     * @param  PagingCriteria|null        $paging
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
     * @param  string|null                $until
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
     * @param  SimpleType\Guid|null       $cultureEventCategoryId
     * @return CultureEventSearchCriteria
     */
    public function setCultureEventCategoryId(SimpleType\Guid $cultureEventCategoryId = null)
    {
        $this->CultureEventCategoryId = $cultureEventCategoryId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCultureEventCategoryId()
    {
        return $this->CultureEventCategoryId;
    }
}
