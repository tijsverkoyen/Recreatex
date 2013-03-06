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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PersonTitleIncludes|null $Includes
     */
    protected $Includes;

    /**
     * @param  SimpleType\guid|null     $id
     * @return FindPersonTitlesCriteria
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string|null              $namePattern
     * @return FindPersonTitlesCriteria
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
     * @param  PagingCriteria|null      $paging
     * @return FindPersonTitlesCriteria
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
     * @param  PersonTitleIncludes|null $includes
     * @return FindPersonTitlesCriteria
     */
    public function setIncludes(PersonTitleIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return PersonTitleIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

}
