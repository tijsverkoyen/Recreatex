<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class InfrastructureOpeningsSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'InfrastructureOpeningsSearchCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $InfrastructureId;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var string
     */
    protected $Until;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @param  SimpleType\Guid[optional]            $infrastructureId
     * @return InfrastructureOpeningsSearchCriteria
     */
    public function setInfrastructureId(SimpleType\Guid $infrastructureId = null)
    {
        $this->InfrastructureId = $infrastructureId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getInfrastructureId()
    {
        return $this->InfrastructureId;
    }

    /**
     * @param  string[optional]                     $from
     * @return InfrastructureOpeningsSearchCriteria
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
     * @param  string[optional]                     $until
     * @return InfrastructureOpeningsSearchCriteria
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
     * @param  PagingCriteria[optional]             $paging
     * @return InfrastructureOpeningsSearchCriteria
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
}
