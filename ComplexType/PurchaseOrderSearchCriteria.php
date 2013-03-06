<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PurchaseOrderSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PurchaseOrderSearchCriteria';

    /**
     * @var PurchaseOrderIncludes
     */
    protected $Includes;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var SimpleTypeGuid
     */
    protected $PurchaseId;

    /**
     * @var string
     */
    protected $OrderNo;

    /**
     * @var string
     */
    protected $Reference;

    /**
     * @var SimpleTypeGuid
     */
    protected $EmployeeId;

    /**
     * @var SimpleTypeGuid
     */
    protected $VendorId;

    /**
     * @var string
     */
    protected $FromCreationDate;

    /**
     * @var string
     */
    protected $TillCreationDate;

    /**
     * @var SimpleTypeGuid
     */
    protected $ArticleId;

    /**
     * @var string
     */
    protected $FromLastUpdate;

    /**
     * @var string
     */
    protected $TillLastUpdate;

    /**
     * @param  PurchaseOrderIncludes[optional] $includes
     * @return PurchaseOrderSearchCriteria
     */
    public function setIncludes(PurchaseOrderIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return PurchaseOrderIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria[optional]    $paging
     * @return PurchaseOrderSearchCriteria
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
     * @param  SimpleType\Guid[optional]   $purchaseId
     * @return PurchaseOrderSearchCriteria
     */
    public function setPurchaseId(SimpleType\Guid $purchaseId = null)
    {
        $this->PurchaseId = $purchaseId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPurchaseId()
    {
        return $this->PurchaseId;
    }

    /**
     * @param  string[optional]            $orderNo
     * @return PurchaseOrderSearchCriteria
     */
    public function setOrderNo($orderNo)
    {
        $this->OrderNo = $orderNo;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNo()
    {
        return $this->OrderNo;
    }

    /**
     * @param  string[optional]            $reference
     * @return PurchaseOrderSearchCriteria
     */
    public function setReference($reference)
    {
        $this->Reference = $reference;

        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param  SimpleType\Guid[optional]   $employeeId
     * @return PurchaseOrderSearchCriteria
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
     * @param  SimpleType\Guid[optional]   $vendorId
     * @return PurchaseOrderSearchCriteria
     */
    public function setVendorId(SimpleType\Guid $vendorId = null)
    {
        $this->VendorId = $vendorId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getVendorId()
    {
        return $this->VendorId;
    }

    /**
     * @param  string[optional]            $fromCreationDate
     * @return PurchaseOrderSearchCriteria
     */
    public function setFromCreationDate($fromCreationDate)
    {
        $this->FromCreationDate = $fromCreationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getFromCreationDate()
    {
        return $this->FromCreationDate;
    }

    /**
     * @param  string[optional]            $tillCreationDate
     * @return PurchaseOrderSearchCriteria
     */
    public function setTillCreationDate($tillCreationDate)
    {
        $this->TillCreationDate = $tillCreationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getTillCreationDate()
    {
        return $this->TillCreationDate;
    }

    /**
     * @param  SimpleType\Guid[optional]   $articleId
     * @return PurchaseOrderSearchCriteria
     */
    public function setArticleId(SimpleType\Guid $articleId = null)
    {
        $this->ArticleId = $articleId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getArticleId()
    {
        return $this->ArticleId;
    }

    /**
     * @param  string[optional]            $fromLastUpdate
     * @return PurchaseOrderSearchCriteria
     */
    public function setFromLastUpdate($fromLastUpdate)
    {
        $this->FromLastUpdate = $fromLastUpdate;

        return $this;
    }

    /**
     * @return string
     */
    public function getFromLastUpdate()
    {
        return $this->FromLastUpdate;
    }

    /**
     * @param  string[optional]            $tillLastUpdate
     * @return PurchaseOrderSearchCriteria
     */
    public function setTillLastUpdate($tillLastUpdate)
    {
        $this->TillLastUpdate = $tillLastUpdate;

        return $this;
    }

    /**
     * @return string
     */
    public function getTillLastUpdate()
    {
        return $this->TillLastUpdate;
    }
}
