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
     * @var PersonCardIncludes|null $Includes
     */
    protected $Includes;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Number
     */
    protected $Number;

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
     * @var SimpleType\guid|null $PersonId
     */
    protected $PersonId;

    /**
     * @param  SimpleType\guid|null    $id
     * @return FindPersonCardsCriteria
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
     * @param  PersonCardIncludes|null $includes
     * @return FindPersonCardsCriteria
     */
    public function setIncludes(PersonCardIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return PersonCardIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  string|null             $number
     * @return FindPersonCardsCriteria
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param  PagingCriteria|null     $paging
     * @return FindPersonCardsCriteria
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
     * @param  SimpleType\guid|null    $personId
     * @return FindPersonCardsCriteria
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

}
