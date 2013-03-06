<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ChildCareCentreSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ChildCareCentreSearchCriteria';

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
     * @var string|null $Name
     */
    protected $Name;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $UserName
     */
    protected $UserName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsBlocked
     */
    protected $IsBlocked;

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
     * @var ChildCareCentreIncludes|null $Includes
     */
    protected $Includes;

    /**
     * @param  SimpleType\guid|null          $id
     * @return ChildCareCentreSearchCriteria
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
     * @param  string|null                   $name
     * @return ChildCareCentreSearchCriteria
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  string|null                   $userName
     * @return ChildCareCentreSearchCriteria
     */
    public function setUserName($userName)
    {
        $this->UserName = $userName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param  boolean|null                  $isBlocked
     * @return ChildCareCentreSearchCriteria
     */
    public function setIsBlocked($isBlocked)
    {
        $this->IsBlocked = $isBlocked;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsBlocked()
    {
        return $this->IsBlocked;
    }

    /**
     * @param  PagingCriteria|null           $paging
     * @return ChildCareCentreSearchCriteria
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
     * @param  ChildCareCentreIncludes|null  $includes
     * @return ChildCareCentreSearchCriteria
     */
    public function setIncludes(ChildCareCentreIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ChildCareCentreIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

}
