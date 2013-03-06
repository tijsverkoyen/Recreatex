<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class VendorSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'VendorSearchCriteria';

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var string
     */
    protected $NamePattern;

    /**
     * @var SimpleTypeGuid
     */
    protected $VendorGroupId;

    /**
     * @var SimpleTypeGuid
     */
    protected $EmployeeId;

    /**
     * @var boolean
     */
    protected $IncludeBlocked;

    /**
     * @var VendorIncludes
     */
    protected $Includes;

    /**
     * @param  PagingCriteria[optional] $paging
     * @return VendorSearchCriteria
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
     * @param  SimpleType\Guid[optional] $id
     * @return VendorSearchCriteria
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
     * @param  string[optional]     $code
     * @return VendorSearchCriteria
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string[optional]     $namePattern
     * @return VendorSearchCriteria
     */
    public function setNamePattern($namePattern)
    {
        $this->NamePattern = $namePattern;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamePattern()
    {
        return $this->NamePattern;
    }

    /**
     * @param  SimpleType\Guid[optional] $vendorGroupId
     * @return VendorSearchCriteria
     */
    public function setVendorGroupId(SimpleType\Guid $vendorGroupId = null)
    {
        $this->VendorGroupId = $vendorGroupId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getVendorGroupId()
    {
        return $this->VendorGroupId;
    }

    /**
     * @param  SimpleType\Guid[optional] $employeeId
     * @return VendorSearchCriteria
     */
    public function setEmployeeId(SimpleType\Guid $employeeId = null)
    {
        $this->EmployeeId = $employeeId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getEmployeeId()
    {
        return $this->EmployeeId;
    }

    /**
     * @param  boolean[optional]    $includeBlocked
     * @return VendorSearchCriteria
     */
    public function setIncludeBlocked($includeBlocked)
    {
        $this->IncludeBlocked = $includeBlocked;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeBlocked()
    {
        return $this->IncludeBlocked;
    }

    /**
     * @param  VendorIncludes[optional] $includes
     * @return VendorSearchCriteria
     */
    public function setIncludes(VendorIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return VendorIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }
}
