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
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $EmployeeId;

    /**
     * @var string
     */
    protected $Reference;

    /**
     * @var SimpleTypeGuid
     */
    protected $VendorId;

    /**
     * @var SimpleTypeGuid
     */
    protected $VendorContactId;

    /**
     * @var string
     */
    protected $PublicComment;

    /**
     * @var string
     */
    protected $PrivateComment;

    /**
     * @var string
     */
    protected $RequestedDeliveryDate;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return PurchaseOrderRequest
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
     * @param  SimpleType\Guid[optional] $employeeId
     * @return PurchaseOrderRequest
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
     * @param  string[optional]     $reference
     * @return PurchaseOrderRequest
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
     * @param  SimpleType\Guid[optional] $vendorId
     * @return PurchaseOrderRequest
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
     * @param  SimpleType\Guid[optional] $vendorContactId
     * @return PurchaseOrderRequest
     */
    public function setVendorContactId(SimpleType\Guid $vendorContactId = null)
    {
        $this->VendorContactId = $vendorContactId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getVendorContactId()
    {
        return $this->VendorContactId;
    }

    /**
     * @param  string[optional]     $publicComment
     * @return PurchaseOrderRequest
     */
    public function setPublicComment($publicComment)
    {
        $this->PublicComment = $publicComment;

        return $this;
    }

    /**
     * @return string
     */
    public function getPublicComment()
    {
        return $this->PublicComment;
    }

    /**
     * @param  string[optional]     $privateComment
     * @return PurchaseOrderRequest
     */
    public function setPrivateComment($privateComment)
    {
        $this->PrivateComment = $privateComment;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrivateComment()
    {
        return $this->PrivateComment;
    }

    /**
     * @param  string[optional]     $requestedDeliveryDate
     * @return PurchaseOrderRequest
     */
    public function setRequestedDeliveryDate($requestedDeliveryDate)
    {
        $this->RequestedDeliveryDate = $requestedDeliveryDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestedDeliveryDate()
    {
        return $this->RequestedDeliveryDate;
    }
}
