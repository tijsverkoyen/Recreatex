<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonCreditsSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonCreditsSearchCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var PersonCreditsIncludes
     */
    protected $Includes;

    /**
     * @param  SimpleType\Guid[optional]   $personId
     * @return PersonCreditsSearchCriteria
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
     * @param  PagingCriteria[optional]    $paging
     * @return PersonCreditsSearchCriteria
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
     * @param  PersonCreditsIncludes[optional] $includes
     * @return PersonCreditsSearchCriteria
     */
    public function setIncludes(PersonCreditsIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return PersonCreditsIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }
}
