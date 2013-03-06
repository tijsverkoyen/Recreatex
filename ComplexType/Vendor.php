<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Vendor extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Vendor';

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
    protected $Name;

    /**
     * @var string
     */
    protected $Name2;

    /**
     * @var Address
     */
    protected $Address;

    /**
     * @var string
     */
    protected $Phone1;

    /**
     * @var string
     */
    protected $Phone2;

    /**
     * @var string
     */
    protected $Phone3;

    /**
     * @var string
     */
    protected $Fax;

    /**
     * @var string
     */
    protected $Language;

    /**
     * @var string
     */
    protected $VatNo;

    /**
     * @var string
     */
    protected $BankAccount1;

    /**
     * @var string
     */
    protected $BankAccount2;

    /**
     * @var string
     */
    protected $Email;

    /**
     * @var string
     */
    protected $Email2;

    /**
     * @var string
     */
    protected $WebSite;

    /**
     * @var string
     */
    protected $Comment;

    /**
     * @var SimpleTypeGuid
     */
    protected $InvoiceVendorId;

    /**
     * @var VendorState
     */
    protected $VendorState;

    /**
     * @var VendorGroup
     */
    protected $VendorGroup;

    /**
     * @var integer
     */
    protected $VendorNo;

    /**
     * @var VatRegime
     */
    protected $VatRegime;

    /**
     * @var ArrayOfVendorContact
     */
    protected $VendorContacts;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return Vendor
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
     * @param  string[optional] $code
     * @return Vendor
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
     * @param  string[optional] $name
     * @return Vendor
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
     * @param  string[optional] $name2
     * @return Vendor
     */
    public function setName2($name2)
    {
        $this->Name2 = $name2;

        return $this;
    }

    /**
     * @return string
     */
    public function getName2()
    {
        return $this->Name2;
    }

    /**
     * @param  Address[optional] $address
     * @return Vendor
     */
    public function setAddress(Address $address = null)
    {
        $this->Address = $address;

        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param  string[optional] $phone1
     * @return Vendor
     */
    public function setPhone1($phone1)
    {
        $this->Phone1 = $phone1;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone1()
    {
        return $this->Phone1;
    }

    /**
     * @param  string[optional] $phone2
     * @return Vendor
     */
    public function setPhone2($phone2)
    {
        $this->Phone2 = $phone2;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone2()
    {
        return $this->Phone2;
    }

    /**
     * @param  string[optional] $phone3
     * @return Vendor
     */
    public function setPhone3($phone3)
    {
        $this->Phone3 = $phone3;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone3()
    {
        return $this->Phone3;
    }

    /**
     * @param  string[optional] $fax
     * @return Vendor
     */
    public function setFax($fax)
    {
        $this->Fax = $fax;

        return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * @param  string[optional] $language
     * @return Vendor
     */
    public function setLanguage($language)
    {
        $this->Language = $language;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param  string[optional] $vatNo
     * @return Vendor
     */
    public function setVatNo($vatNo)
    {
        $this->VatNo = $vatNo;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatNo()
    {
        return $this->VatNo;
    }

    /**
     * @param  string[optional] $bankAccount1
     * @return Vendor
     */
    public function setBankAccount1($bankAccount1)
    {
        $this->BankAccount1 = $bankAccount1;

        return $this;
    }

    /**
     * @return string
     */
    public function getBankAccount1()
    {
        return $this->BankAccount1;
    }

    /**
     * @param  string[optional] $bankAccount2
     * @return Vendor
     */
    public function setBankAccount2($bankAccount2)
    {
        $this->BankAccount2 = $bankAccount2;

        return $this;
    }

    /**
     * @return string
     */
    public function getBankAccount2()
    {
        return $this->BankAccount2;
    }

    /**
     * @param  string[optional] $email
     * @return Vendor
     */
    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param  string[optional] $email2
     * @return Vendor
     */
    public function setEmail2($email2)
    {
        $this->Email2 = $email2;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail2()
    {
        return $this->Email2;
    }

    /**
     * @param  string[optional] $webSite
     * @return Vendor
     */
    public function setWebSite($webSite)
    {
        $this->WebSite = $webSite;

        return $this;
    }

    /**
     * @return string
     */
    public function getWebSite()
    {
        return $this->WebSite;
    }

    /**
     * @param  string[optional] $comment
     * @return Vendor
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param  SimpleType\Guid[optional] $invoiceVendorId
     * @return Vendor
     */
    public function setInvoiceVendorId(SimpleType\Guid $invoiceVendorId = null)
    {
        $this->InvoiceVendorId = $invoiceVendorId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getInvoiceVendorId()
    {
        return $this->InvoiceVendorId;
    }

    /**
     * @param  VendorState[optional] $vendorState
     * @return Vendor
     */
    public function setVendorState(VendorState $vendorState = null)
    {
        $this->VendorState = $vendorState;

        return $this;
    }

    /**
     * @return VendorState
     */
    public function getVendorState()
    {
        return $this->VendorState;
    }

    /**
     * @param  VendorGroup[optional] $vendorGroup
     * @return Vendor
     */
    public function setVendorGroup(VendorGroup $vendorGroup = null)
    {
        $this->VendorGroup = $vendorGroup;

        return $this;
    }

    /**
     * @return VendorGroup
     */
    public function getVendorGroup()
    {
        return $this->VendorGroup;
    }

    /**
     * @param  integer[optional] $vendorNo
     * @return Vendor
     */
    public function setVendorNo($vendorNo)
    {
        $this->VendorNo = $vendorNo;

        return $this;
    }

    /**
     * @return integer
     */
    public function getVendorNo()
    {
        return $this->VendorNo;
    }

    /**
     * @param  VatRegime[optional] $vatRegime
     * @return Vendor
     */
    public function setVatRegime(VatRegime $vatRegime = null)
    {
        $this->VatRegime = $vatRegime;

        return $this;
    }

    /**
     * @return VatRegime
     */
    public function getVatRegime()
    {
        return $this->VatRegime;
    }

    /**
     * @param  ArrayOfVendorContact[optional] $vendorContacts
     * @return Vendor
     */
    public function setVendorContacts(ArrayOfVendorContact $vendorContacts = null)
    {
        $this->VendorContacts = $vendorContacts;

        return $this;
    }

    /**
     * @return ArrayOfVendorContact
     */
    public function getVendorContacts()
    {
        return $this->VendorContacts;
    }
}
