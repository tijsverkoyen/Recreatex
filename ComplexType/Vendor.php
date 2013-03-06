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
     * @var string|null $Name
     */
    protected $Name;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name2
     */
    protected $Name2;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Address|null $Address
     */
    protected $Address;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Phone1
     */
    protected $Phone1;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Phone2
     */
    protected $Phone2;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Phone3
     */
    protected $Phone3;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Fax
     */
    protected $Fax;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Language
     */
    protected $Language;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $VatNo
     */
    protected $VatNo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $BankAccount1
     */
    protected $BankAccount1;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $BankAccount2
     */
    protected $BankAccount2;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Email
     */
    protected $Email;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Email2
     */
    protected $Email2;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $WebSite
     */
    protected $WebSite;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Comment
     */
    protected $Comment;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $InvoiceVendorId
     */
    protected $InvoiceVendorId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var VendorState|null $VendorState
     */
    protected $VendorState;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var VendorGroup|null $VendorGroup
     */
    protected $VendorGroup;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $VendorNo
     */
    protected $VendorNo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var VatRegime|null $VatRegime
     */
    protected $VatRegime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfVendorContact|null $VendorContacts
     */
    protected $VendorContacts;

    /**
     * @param  SimpleType\guid|null $id
     * @return Vendor
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
     * @param  string|null $code
     * @return Vendor
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
     * @param  string|null $name
     * @return Vendor
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
     * @param  string|null $name2
     * @return Vendor
     */
    public function setName2($name2)
    {
        $this->Name2 = $name2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName2()
    {
        return $this->Name2;
    }

    /**
     * @param  Address|null $address
     * @return Vendor
     */
    public function setAddress(Address $address = null)
    {
        $this->Address = $address;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param  string|null $phone1
     * @return Vendor
     */
    public function setPhone1($phone1)
    {
        $this->Phone1 = $phone1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone1()
    {
        return $this->Phone1;
    }

    /**
     * @param  string|null $phone2
     * @return Vendor
     */
    public function setPhone2($phone2)
    {
        $this->Phone2 = $phone2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone2()
    {
        return $this->Phone2;
    }

    /**
     * @param  string|null $phone3
     * @return Vendor
     */
    public function setPhone3($phone3)
    {
        $this->Phone3 = $phone3;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone3()
    {
        return $this->Phone3;
    }

    /**
     * @param  string|null $fax
     * @return Vendor
     */
    public function setFax($fax)
    {
        $this->Fax = $fax;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * @param  string|null $language
     * @return Vendor
     */
    public function setLanguage($language)
    {
        $this->Language = $language;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param  string|null $vatNo
     * @return Vendor
     */
    public function setVatNo($vatNo)
    {
        $this->VatNo = $vatNo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVatNo()
    {
        return $this->VatNo;
    }

    /**
     * @param  string|null $bankAccount1
     * @return Vendor
     */
    public function setBankAccount1($bankAccount1)
    {
        $this->BankAccount1 = $bankAccount1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankAccount1()
    {
        return $this->BankAccount1;
    }

    /**
     * @param  string|null $bankAccount2
     * @return Vendor
     */
    public function setBankAccount2($bankAccount2)
    {
        $this->BankAccount2 = $bankAccount2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankAccount2()
    {
        return $this->BankAccount2;
    }

    /**
     * @param  string|null $email
     * @return Vendor
     */
    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param  string|null $email2
     * @return Vendor
     */
    public function setEmail2($email2)
    {
        $this->Email2 = $email2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail2()
    {
        return $this->Email2;
    }

    /**
     * @param  string|null $webSite
     * @return Vendor
     */
    public function setWebSite($webSite)
    {
        $this->WebSite = $webSite;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWebSite()
    {
        return $this->WebSite;
    }

    /**
     * @param  string|null $comment
     * @return Vendor
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param  SimpleType\guid|null $invoiceVendorId
     * @return Vendor
     */
    public function setInvoiceVendorId(SimpleType\guid $invoiceVendorId = null)
    {
        $this->InvoiceVendorId = $invoiceVendorId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getInvoiceVendorId()
    {
        return $this->InvoiceVendorId;
    }

    /**
     * @param  VendorState|null $vendorState
     * @return Vendor
     */
    public function setVendorState(VendorState $vendorState = null)
    {
        $this->VendorState = $vendorState;

        return $this;
    }

    /**
     * @return VendorState|null
     */
    public function getVendorState()
    {
        return $this->VendorState;
    }

    /**
     * @param  VendorGroup|null $vendorGroup
     * @return Vendor
     */
    public function setVendorGroup(VendorGroup $vendorGroup = null)
    {
        $this->VendorGroup = $vendorGroup;

        return $this;
    }

    /**
     * @return VendorGroup|null
     */
    public function getVendorGroup()
    {
        return $this->VendorGroup;
    }

    /**
     * @param  integer|null $vendorNo
     * @return Vendor
     */
    public function setVendorNo($vendorNo)
    {
        $this->VendorNo = $vendorNo;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getVendorNo()
    {
        return $this->VendorNo;
    }

    /**
     * @param  VatRegime|null $vatRegime
     * @return Vendor
     */
    public function setVatRegime(VatRegime $vatRegime = null)
    {
        $this->VatRegime = $vatRegime;

        return $this;
    }

    /**
     * @return VatRegime|null
     */
    public function getVatRegime()
    {
        return $this->VatRegime;
    }

    /**
     * @param  ArrayOfVendorContact|null $vendorContacts
     * @return Vendor
     */
    public function setVendorContacts(ArrayOfVendorContact $vendorContacts = null)
    {
        $this->VendorContacts = $vendorContacts;

        return $this;
    }

    /**
     * @return ArrayOfVendorContact|null
     */
    public function getVendorContacts()
    {
        return $this->VendorContacts;
    }

}
