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
     * @var SimpleType\guid|null $PersonId
     */
    protected $PersonId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ChildCareCentreId
     */
    protected $ChildCareCentreId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $From
     */
    protected $From;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Until
     */
    protected $Until;

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
     * @var ChildCareCentrePresenceHeaderIncludes|null $Includes
     */
    protected $Includes;

    /**
     * @param  SimpleType\guid|null                        $id
     * @return ChildCareCentrePresenceHeaderSearchCriteria
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
     * @param  SimpleType\guid|null                        $personId
     * @return ChildCareCentrePresenceHeaderSearchCriteria
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
     * @param  SimpleType\guid|null                        $childCareCentreId
     * @return ChildCareCentrePresenceHeaderSearchCriteria
     */
    public function setChildCareCentreId(SimpleType\guid $childCareCentreId = null)
    {
        $this->ChildCareCentreId = $childCareCentreId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getChildCareCentreId()
    {
        return $this->ChildCareCentreId;
    }

    /**
     * @param  string|null                                 $from
     * @return ChildCareCentrePresenceHeaderSearchCriteria
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  string|null                                 $until
     * @return ChildCareCentrePresenceHeaderSearchCriteria
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUntil()
    {
        return $this->Until;
    }

    /**
     * @param  PagingCriteria|null                         $paging
     * @return ChildCareCentrePresenceHeaderSearchCriteria
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
     * @param  ChildCareCentrePresenceHeaderIncludes|null  $includes
     * @return ChildCareCentrePresenceHeaderSearchCriteria
     */
    public function setIncludes(ChildCareCentrePresenceHeaderIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ChildCareCentrePresenceHeaderIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

}
