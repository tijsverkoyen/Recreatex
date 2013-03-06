<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FindPersonCardsCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FindPersonCardsCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var PersonCardIncludes
     */
    protected $Includes;

    /**
     * @var string
     */
    protected $Number;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return FindPersonCardsCriteria
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
     * @param  PersonCardIncludes[optional] $includes
     * @return FindPersonCardsCriteria
     */
    public function setIncludes(PersonCardIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return PersonCardIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  string[optional]        $number
     * @return FindPersonCardsCriteria
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param  PagingCriteria[optional] $paging
     * @return FindPersonCardsCriteria
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
     * @param  SimpleType\Guid[optional] $personId
     * @return FindPersonCardsCriteria
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
}
