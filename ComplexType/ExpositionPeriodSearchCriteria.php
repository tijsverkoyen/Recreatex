<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExpositionPeriodSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpositionPeriodSearchCriteria';

    /**
     * @var SimpleType\Guid
     */
    protected $ExpositionId;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var string
     */
    protected $Until;

    /**
     * @param  SimpleType\Guid[optional]      $expositionId
     * @return ExpositionPeriodSearchCriteria
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
     * @param  PagingCriteria[optional]       $paging
     * @return ExpositionPeriodSearchCriteria
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
     * @param  string[optional]               $from
     * @return ExpositionPeriodSearchCriteria
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
     * @param  string[optional]               $until
     * @return ExpositionPeriodSearchCriteria
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
}
