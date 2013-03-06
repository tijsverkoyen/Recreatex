<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FindPersonFunctionsCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FindPersonFunctionsCriteria';

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

     * @var PersonFunctionIncludes
     */
    protected $Includes;

    /**
     * @param  SimpleType\Guid[optional]   $id
     * @return FindPersonFunctionsCriteria
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
     * @param  string[optional]            $namePattern
     * @return FindPersonFunctionsCriteria
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
     * @param  PagingCriteria[optional]    $paging
     * @return FindPersonFunctionsCriteria
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
     * @param  PersonFunctionIncludes[optional] $includes
     * @return FindPersonFunctionsCriteria
     */
    public function setIncludes(PersonFunctionIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return PersonFunctionIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }
}
