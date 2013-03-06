<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Person extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Person';

    /**
     * @var SimpleType\Guid
     */
    protected $ActivationId;

    /**
     * @var Address
     */
    protected $Address;

    /**
     * @var string
     */
    protected $BankAccount;

    /**
     * @var string
     */
    protected $BirthDate;

    /**
     * @var string
     */
    protected $CellPhone;

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var string
     */
    protected $Comments;

    /**
     * @var Credential[optional] $Credential
     */
    protected $Credential;

    /**
     * @var string
     */
    protected $Email;

    /**
     * @var SimpleType\Gender[optional] $Gender
     */
    protected $Gender;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var boolean
     */
    protected $IsBlocked;

    /**
     * @var string
     */
    protected $Language;

    /**
     * @var PersonName[optional] $Name
     */
    protected $Name;

    /**
     * @var string
     */
    protected $NationalNumber;

    /**
     * @var string
     */
    protected $Phone;

    /**
     * @var string
     */
    protected $Picture;

    /**
     * @var ArrayOfRelation
     */
    protected $ResetPasswordId;

    /**
     * @var PersonSettings
     */
    protected $Settings;

    /**
     * @var ArrayOfContact
     */
    protected $Contacts;

    /**
     * @var SimpleType\PersonType
     */
    protected $Type;

    /**
     * @var boolean
     */
    protected $Parent;

    /**
     * @var boolean
     */
    protected $Disabled;

    /**
     * @var boolean
     */
    protected $HeadOfFamily;

    /**
     * @var ArrayOfRelation
     */
    protected $Relations;

    /**
     * @var string
     */
    protected $Info1;

    /**
     * @var string
     */
    protected $Info2;

    /**
     * @var string
     */
    protected $Info3;

    /**
     * @var string
     */
    protected $Info4;

    /**
     * @var string
     */
    protected $Info5;

    /**
     * @var string
     */
    protected $ExternalMasterID;

    /**
     * @var ArrayOfRelation
     */
    protected $ParentRelations;

    /**
     * @var SimpleType\Guid
     */
    protected $InvoiceAddressId;

    /**
     * @param  SimpleType\Guid $activationId
     * @return Person
     */
    public function setActivationId(SimpleType\Guid $activationId = null)
    {
        $this->ActivationId = $activationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getActivationId()
    {
        return $this->ActivationId;
    }

    /**
     * @param  Address[optional] $address
     * @return Person
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
     * @param  string[optional] $bankAccount
     * @return Person
     */
    public function setBankAccount($bankAccount)
    {
        $this->BankAccount = $bankAccount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBankAccount()
    {
        return $this->BankAccount;
    }

    /**
     * @param  string[optional] $birthDate
     * @return Person
     */
    public function setBirthDate($birthDate)
    {
        $this->BirthDate = $birthDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getBirthDate()
    {
        return $this->BirthDate;
    }

    /**
     * @param  string[optional] $cellPhone
     * @return Person
     */
    public function setCellPhone($cellPhone)
    {
        $this->CellPhone = $cellPhone;

        return $this;
    }

    /**
     * @return string
     */
    public function getCellPhone()
    {
        return $this->CellPhone;
    }

    /**
     * @param  string[optional] $code
     * @return Person
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
     * @param  string[optional] $comments
     * @return Person
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param  Credential[optional] $credential
     * @return Person
     */
    public function setCredential(Credential $credential = null)
    {
        $this->Credential = $credential;

        return $this;
    }

    /**
     * @return Credential
     */
    public function getCredential()
    {
        return $this->Credential;
    }

    /**
     * @param  string[optional] $email
     * @return Person
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
     * @param  SimpleType\Gender[optional] $gender
     * @return Person
     */
    public function setGender(SimpleType\Gender $gender = null)
    {
        $this->Gender = $gender;

        return $this;
    }

    /**
     * @return SimpleType\Gender
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return Person
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
     * @param  boolean[optional] $isBlocked
     * @return Person
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
     * @param  string[optional] $language
     * @return Person
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
     * @param  PersonName[optional] $name
     * @return Person
     */
    public function setName(PersonName $name = null)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return PersonName
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  string[optional] $nationalNumber
     * @return Person
     */
    public function setNationalNumber($nationalNumber)
    {
        $this->NationalNumber = $nationalNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getNationalNumber()
    {
        return $this->NationalNumber;
    }

    /**
     * @param  string[optional] $phone
     * @return Person
     */
    public function setPhone($phone)
    {
        $this->Phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param  string[optional] $picture
     * @return Person
     */
    public function setPicture($picture)
    {
        $this->Picture = $picture;

        return $this;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
        return $this->Picture;
    }

    /**
     * @param  ArrayOfRelation[optional] $relations
     * @return Person
     */
    public function setResetPasswordId(SimpleType\Guid $resetPasswordId = null)
    {
        $this->ResetPasswordId = $resetPasswordId;

        return $this;
    }

    /**
     * @return SimpleType\Guid[optional]
     */
    public function getResetPasswordId()
    {
        return $this->ResetPasswordId;
    }

    /**
     * @param  PersonSettings[optional] $settings
     * @return Person
     */
    public function setSettings(PersonSettings $settings = null)
    {
        $this->Settings = $settings;

        return $this;
    }

    /**
     * @return PersonSettings
     */
    public function getSettings()
    {
        return $this->Settings;
    }

    /**
     * @param  ArrayOfContact[optional] $contacts
     * @return Person
     */
    public function setContacts(ArrayOfContact $contacts = null)
    {
        $this->Contacts = $contacts;

        return $this;
    }

    /**
     * @return ArrayOfContact
     */
    public function getContacts()
    {
        return $this->Contacts;
    }

    /**
     * @param  SimpleType\PersonType[optional] $type
     * @return Person
     */
    public function setType(SimpleType\PersonType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\PersonType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param  boolean[optional] $parent
     * @return Person
     */
    public function setParent($parent)
    {
        $this->Parent = $parent;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getParent()
    {
        return $this->Parent;
    }

    /**
     * @param  boolean[optional] $disabled
     * @return Person
     */
    public function setDisabled($disabled)
    {
        $this->Disabled = $disabled;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDisabled()
    {
        return $this->Disabled;
    }

    /**
     * @param  boolean[optional] $headOfFamily
     * @return Person
     */
    public function setHeadOfFamily($headOfFamily)
    {
        $this->HeadOfFamily = $headOfFamily;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getHeadOfFamily()
    {
        return $this->HeadOfFamily;
    }

    /**
     * @param  ArrayOfRelation[optional] $relations
     * @return Person
     */
    public function setRelations(ArrayOfRelation $relations = null)
    {
        $this->Relations = $relations;

        return $this;
    }

    /**
     * @return ArrayOfRelation
     */
    public function getRelations()
    {
        return $this->Relations;
    }

    /**
     * @param  string[optional] $info1
     * @return Person
     */
    public function setInfo1($info1)
    {
        $this->Info1 = $info1;

        return $this;
    }

    /**
     * @return string
     */
    public function getInfo1()
    {
        return $this->Info1;
    }

    /**
     * @param  string[optional] $info2
     * @return Person
     */
    public function setInfo2($info2)
    {
        $this->Info2 = $info2;

        return $this;
    }

    /**
     * @return string
     */
    public function getInfo2()
    {
        return $this->Info2;
    }

    /**
     * @param  string[optional] $info3
     * @return Person
     */
    public function setInfo3($info3)
    {
        $this->Info3 = $info3;

        return $this;
    }

    /**
     * @return string
     */
    public function getInfo3()
    {
        return $this->Info3;
    }

    /**
     * @param  string[optional] $info4
     * @return Person
     */
    public function setInfo4($info4)
    {
        $this->Info4 = $info4;

        return $this;
    }

    /**
     * @return string
     */
    public function getInfo4()
    {
        return $this->Info4;
    }

    /**
     * @param  string[optional] $info5
     * @return Person
     */
    public function setInfo5($info5)
    {
        $this->Info5 = $info5;

        return $this;
    }

    /**
     * @return string
     */
    public function getInfo5()
    {
        return $this->Info5;
    }

    /**
     * @param  string[optional] $externalMasterID
     * @return Person
     */
    public function setExternalMasterID($externalMasterID)
    {
        $this->ExternalMasterID = $externalMasterID;

        return $this;
    }

    /**
     * @return string
     */
    public function getExternalMasterID()
    {
        return $this->ExternalMasterID;
    }

    /**
     * @param  ArrayOfRelation[optional] $parentRelations
     * @return Person
     */
    public function setParentRelations(ArrayOfRelation $parentRelations = null)
    {
        $this->ParentRelations = $parentRelations;

        return $this;
    }

    /**
     * @return ArrayOfRelation
     */
    public function getParentRelations()
    {
        return $this->ParentRelations;
    }

    /**
     * @param  SimpleType\Guid[optional] $invoiceAddressId
     * @return Person
     */
    public function setInvoiceAddressId(SimpleType\Guid $invoiceAddressId = null)
    {
        $this->InvoiceAddressId = $invoiceAddressId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getInvoiceAddressId()
    {
        return $this->InvoiceAddressId;
    }
}
