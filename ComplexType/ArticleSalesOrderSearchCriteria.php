<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArticleSalesOrderSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArticleSalesOrderSearchCriteria';

    /**

     * * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**

     * @var string
     */
    protected $From;

    /**

     * @var string
     */
    protected $Until;

    /**

     * @var SimpleType\ArticleSalesOrderType
     */
    protected $Type;

    /**

     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @param  SimpleType\Guid[optional]       $id
     * @return ArticleSalesOrderSearchCriteria
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\Guid[optional]       $personId
     * @return ArticleSalesOrderSearchCriteria
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  string[optional]                $from
     * @return ArticleSalesOrderSearchCriteria
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
     * @param  string[optional]                $until
     * @return ArticleSalesOrderSearchCriteria
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
     * @param  SimpleType\ArticleSalesOrderType[optional] $type
     * @return ArticleSalesOrderSearchCriteria
     */
    public function setType(SimpleType\ArticleSalesOrderType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\ArticleSalesOrderType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param  PagingCriteria[optional]        $paging
     * @return ArticleSalesOrderSearchCriteria
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
