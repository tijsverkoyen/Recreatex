<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FindPersonTitlesCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FindPersonTitlesCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $NamePattern;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var PersonTitleIncludes
     */
    protected $Includes;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return FindPersonTitlesCriteria
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
     * @param  string[optional]         $namePattern
     * @return FindPersonTitlesCriteria
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
     * @return FindPersonTitlesCriteria
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
     * @param  PersonTitleIncludes[optional] $includes
     * @return FindPersonTitlesCriteria
     */
    public function setIncludes(PersonTitleIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return PersonTitleIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }
}
