<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonChipKnipSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonChipKnipSearchCriteria';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PersonId
     */
    protected $PersonId;

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
     * @var PersonChipKnipIncludes|null $Includes
     */
    protected $Includes;

    /**
     * @param  SimpleType\guid|null         $personId
     * @return PersonChipKnipSearchCriteria
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

    /**
     * @param  PagingCriteria|null          $paging
     * @return PersonChipKnipSearchCriteria
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
     * @param  PersonChipKnipIncludes|null  $includes
     * @return PersonChipKnipSearchCriteria
     */
    public function setIncludes(PersonChipKnipIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return PersonChipKnipIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

}
