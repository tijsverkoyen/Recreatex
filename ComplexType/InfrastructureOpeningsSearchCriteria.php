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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $InfrastructureId
     */
    protected $InfrastructureId;

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
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**
     * @param  SimpleType\guid|null                 $infrastructureId
     * @return InfrastructureOpeningsSearchCriteria
     */
    public function setInfrastructureId(SimpleType\guid $infrastructureId = null)
    {
        $this->InfrastructureId = $infrastructureId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getInfrastructureId()
    {
        return $this->InfrastructureId;
    }

    /**
     * @param  string|null                          $from
     * @return InfrastructureOpeningsSearchCriteria
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
     * @param  string|null                          $until
     * @return InfrastructureOpeningsSearchCriteria
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
     * @param  PagingCriteria|null                  $paging
     * @return InfrastructureOpeningsSearchCriteria
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

}
