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
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var string
     */
    protected $UserName;

    /**
     * @var boolean
     */
    protected $IsBlocked;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var ChildCareCentreIncludes
     */
    protected $Includes;

    /**
     * @param  SimpleType\Guid[optional]     $id
     * @return ChildCareCentreSearchCriteria
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
     * @param  string[optional]              $name
     * @return ChildCareCentreSearchCriteria
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  string[optional]              $userName
     * @return ChildCareCentreSearchCriteria
     */
    public function setUserName($userName)
    {
        $this->UserName = $userName;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param  boolean[optional]             $isBlocked
     * @return ChildCareCentreSearchCriteria
     */
    public function setIsBlocked($isBlocked)
    {
        $this->IsBlocked = $isBlocked;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBlocked()
    {
        return $this->IsBlocked;
    }

    /**
     * @param  PagingCriteria[optional]      $paging
     * @return ChildCareCentreSearchCriteria
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
     * @param  ChildCareCentreIncludes[optional] $includes
     * @return ChildCareCentreSearchCriteria
     */
    public function setIncludes(ChildCareCentreIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ChildCareCentreIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }
}
