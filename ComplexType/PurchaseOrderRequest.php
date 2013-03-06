<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PurchaseOrderRequest extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PurchaseOrderRequest';

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
     * @var SimpleType\guid|null $EmployeeId
     */
    protected $EmployeeId;

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
     * @var SimpleType\guid|null $VendorId
     */
    protected $VendorId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $VendorContactId
     */
    protected $VendorContactId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PublicComment
     */
    protected $PublicComment;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PrivateComment
     */
    protected $PrivateComment;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $RequestedDeliveryDate
     */
    protected $RequestedDeliveryDate;

    /**
     * @param  SimpleType\guid|null $id
     * @return PurchaseOrderRequest
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
     * @param  SimpleType\guid|null $employeeId
     * @return PurchaseOrderRequest
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
     * @param  string|null          $reference
     * @return PurchaseOrderRequest
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
     * @param  SimpleType\guid|null $vendorId
     * @return PurchaseOrderRequest
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
     * @param  SimpleType\guid|null $vendorContactId
     * @return PurchaseOrderRequest
     */
    public function setVendorContactId(SimpleType\guid $vendorContactId = null)
    {
        $this->VendorContactId = $vendorContactId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getVendorContactId()
    {
        return $this->VendorContactId;
    }

    /**
     * @param  string|null          $publicComment
     * @return PurchaseOrderRequest
     */
    public function setPublicComment($publicComment)
    {
        $this->PublicComment = $publicComment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPublicComment()
    {
        return $this->PublicComment;
    }

    /**
     * @param  string|null          $privateComment
     * @return PurchaseOrderRequest
     */
    public function setPrivateComment($privateComment)
    {
        $this->PrivateComment = $privateComment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrivateComment()
    {
        return $this->PrivateComment;
    }

    /**
     * @param  string|null          $requestedDeliveryDate
     * @return PurchaseOrderRequest
     */
    public function setRequestedDeliveryDate($requestedDeliveryDate)
    {
        $this->RequestedDeliveryDate = $requestedDeliveryDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRequestedDeliveryDate()
    {
        return $this->RequestedDeliveryDate;
    }

}
