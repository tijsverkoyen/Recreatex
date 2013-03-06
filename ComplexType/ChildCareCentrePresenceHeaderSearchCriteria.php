<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ChildCareCentrePresenceHeaderSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ChildCareCentrePresenceHeaderSearchCriteria';

    /**

     * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**

     * @var SimpleTypeGuid
     */
    protected $ChildCareCentreId;

    /**

     * @var string
     */
    protected $From;

    /**

     * @var string
     */
    protected $Until;

    /**

     * @var PagingCriteria
     */
    protected $Paging;

    /**

     * @var ChildCareCentrePresenceHeaderIncludes
     */
    protected $Includes;

    /**
     * @param  SimpleType\guid[optional]                   $id
     * @return ChildCareCentrePresenceHeaderSearchCriteria
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\guid[optional]                   $personId
     * @return ChildCareCentrePresenceHeaderSearchCriteria
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
     * @param  SimpleType\guid[optional]                   $childCareCentreId
     * @return ChildCareCentrePresenceHeaderSearchCriteria
     */
    public function setChildCareCentreId(SimpleType\guid $childCareCentreId = null)
    {
        $this->ChildCareCentreId = $childCareCentreId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getChildCareCentreId()
    {
        return $this->ChildCareCentreId;
    }

    /**
     * @param  string[optional]                            $from
     * @return ChildCareCentrePresenceHeaderSearchCriteria
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
     * @param  string[optional]                            $until
     * @return ChildCareCentrePresenceHeaderSearchCriteria
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
     * @param  PagingCriteria[optional]                    $paging
     * @return ChildCareCentrePresenceHeaderSearchCriteria
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
     * @param  ChildCareCentrePresenceHeaderIncludes[optional] $includes
     * @return ChildCareCentrePresenceHeaderSearchCriteria
     */
    public function setIncludes(ChildCareCentrePresenceHeaderIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ChildCareCentrePresenceHeaderIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }
}
