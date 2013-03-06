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
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var PersonChipKnipIncludes
     */
    protected $Includes;

    /**
     * @param  SimpleType\guid[optional]    $personId
     * @return PersonChipKnipSearchCriteria
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  PagingCriteria[optional]     $paging
     * @return PersonChipKnipSearchCriteria
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
     * @param  PersonChipKnipIncludes[optional] $includes
     * @return PersonChipKnipSearchCriteria
     */
    public function setIncludes(PersonChipKnipIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return PersonChipKnipIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }
}
