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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PurchaseOrderIncludes|null $Includes
     */
    protected $Includes;

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
     * @var SimpleType\guid|null $PurchaseId
     */
    protected $PurchaseId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $OrderNo
     */
    protected $OrderNo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Reference
     */
    protected $Reference;

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
     * @var SimpleType\guid|null $VendorId
     */
    protected $VendorId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FromCreationDate
     */
    protected $FromCreationDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $TillCreationDate
     */
    protected $TillCreationDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ArticleId
     */
    protected $ArticleId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FromLastUpdate
     */
    protected $FromLastUpdate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $TillLastUpdate
     */
    protected $TillLastUpdate;

    /**
     * @param  PurchaseOrderIncludes|null  $includes
     * @return PurchaseOrderSearchCriteria
     */
    public function setIncludes(PurchaseOrderIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return PurchaseOrderIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria|null         $paging
     * @return PurchaseOrderSearchCriteria
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
     * @param  SimpleType\guid|null        $purchaseId
     * @return PurchaseOrderSearchCriteria
     */
    public function setPurchaseId(SimpleType\guid $purchaseId = null)
    {
        $this->PurchaseId = $purchaseId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPurchaseId()
    {
        return $this->PurchaseId;
    }

    /**
     * @param  string|null                 $orderNo
     * @return PurchaseOrderSearchCriteria
     */
    public function setOrderNo($orderNo)
    {
        $this->OrderNo = $orderNo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderNo()
    {
        return $this->OrderNo;
    }

    /**
     * @param  string|null                 $reference
     * @return PurchaseOrderSearchCriteria
     */
    public function setReference($reference)
    {
        $this->Reference = $reference;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param  SimpleType\guid|null        $employeeId
     * @return PurchaseOrderSearchCriteria
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
     * @param  SimpleType\guid|null        $vendorId
     * @return PurchaseOrderSearchCriteria
     */
    public function setVendorId(SimpleType\guid $vendorId = null)
    {
        $this->VendorId = $vendorId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getVendorId()
    {
        return $this->VendorId;
    }

    /**
     * @param  string|null                 $fromCreationDate
     * @return PurchaseOrderSearchCriteria
     */
    public function setFromCreationDate($fromCreationDate)
    {
        $this->FromCreationDate = $fromCreationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromCreationDate()
    {
        return $this->FromCreationDate;
    }

    /**
     * @param  string|null                 $tillCreationDate
     * @return PurchaseOrderSearchCriteria
     */
    public function setTillCreationDate($tillCreationDate)
    {
        $this->TillCreationDate = $tillCreationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTillCreationDate()
    {
        return $this->TillCreationDate;
    }

    /**
     * @param  SimpleType\guid|null        $articleId
     * @return PurchaseOrderSearchCriteria
     */
    public function setArticleId(SimpleType\guid $articleId = null)
    {
        $this->ArticleId = $articleId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getArticleId()
    {
        return $this->ArticleId;
    }

    /**
     * @param  string|null                 $fromLastUpdate
     * @return PurchaseOrderSearchCriteria
     */
    public function setFromLastUpdate($fromLastUpdate)
    {
        $this->FromLastUpdate = $fromLastUpdate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromLastUpdate()
    {
        return $this->FromLastUpdate;
    }

    /**
     * @param  string|null                 $tillLastUpdate
     * @return PurchaseOrderSearchCriteria
     */
    public function setTillLastUpdate($tillLastUpdate)
    {
        $this->TillLastUpdate = $tillLastUpdate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTillLastUpdate()
    {
        return $this->TillLastUpdate;
    }

}
