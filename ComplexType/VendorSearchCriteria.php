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
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Code
     */
    protected $Code;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $NamePattern
     */
    protected $NamePattern;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $VendorGroupId
     */
    protected $VendorGroupId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $EmployeeId
     */
    protected $EmployeeId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IncludeBlocked
     */
    protected $IncludeBlocked;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var VendorIncludes|null $Includes
     */
    protected $Includes;

    /**
     * @param  PagingCriteria|null  $paging
     * @return VendorSearchCriteria
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
     * @param  SimpleType\guid|null $id
     * @return VendorSearchCriteria
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
     * @param  string|null          $code
     * @return VendorSearchCriteria
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string|null          $namePattern
     * @return VendorSearchCriteria
     */
    public function setNamePattern($namePattern)
    {
        $this->NamePattern = $namePattern;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNamePattern()
    {
        return $this->NamePattern;
    }

    /**
     * @param  SimpleType\guid|null $vendorGroupId
     * @return VendorSearchCriteria
     */
    public function setVendorGroupId(SimpleType\guid $vendorGroupId = null)
    {
        $this->VendorGroupId = $vendorGroupId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getVendorGroupId()
    {
        return $this->VendorGroupId;
    }

    /**
     * @param  SimpleType\guid|null $employeeId
     * @return VendorSearchCriteria
     */
    public function setEmployeeId(SimpleType\guid $employeeId = null)
    {
        $this->EmployeeId = $employeeId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getEmployeeId()
    {
        return $this->EmployeeId;
    }

    /**
     * @param  boolean|null         $includeBlocked
     * @return VendorSearchCriteria
     */
    public function setIncludeBlocked($includeBlocked)
    {
        $this->IncludeBlocked = $includeBlocked;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIncludeBlocked()
    {
        return $this->IncludeBlocked;
    }

    /**
     * @param  VendorIncludes|null  $includes
     * @return VendorSearchCriteria
     */
    public function setIncludes(VendorIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return VendorIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

}
