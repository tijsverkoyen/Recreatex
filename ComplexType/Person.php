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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ActivationId
     */
    protected $ActivationId;

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
     * @var string|null $BankAccount
     */
    protected $BankAccount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $BirthDate
     */
    protected $BirthDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $CellPhone
     */
    protected $CellPhone;

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
     * @var string|null $Comments
     */
    protected $Comments;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Credential|null $Credential
     */
    protected $Credential;

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
     * @var SimpleType\Gender|null $Gender
     */
    protected $Gender;

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
     * @var boolean|null $IsBlocked
     */
    protected $IsBlocked;

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
     * @var PersonName|null $Name
     */
    protected $Name;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $NationalNumber
     */
    protected $NationalNumber;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Phone
     */
    protected $Phone;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Picture|null $Picture
     */
    protected $Picture;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ResetPasswordId
     */
    protected $ResetPasswordId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PersonSettings|null $Settings
     */
    protected $Settings;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfContact|null $Contacts
     */
    protected $Contacts;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\PersonType|null $Type
     */
    protected $Type;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Parent
     */
    protected $Parent;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Disabled
     */
    protected $Disabled;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $HeadOfFamily
     */
    protected $HeadOfFamily;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfRelation|null $Relations
     */
    protected $Relations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Info1
     */
    protected $Info1;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Info2
     */
    protected $Info2;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Info3
     */
    protected $Info3;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Info4
     */
    protected $Info4;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Info5
     */
    protected $Info5;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ExternalMasterID
     */
    protected $ExternalMasterID;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfRelation|null $ParentRelations
     */
    protected $ParentRelations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $InvoiceAddressId
     */
    protected $InvoiceAddressId;

    /**
     * @param  SimpleType\guid|null $activationId
     * @return Person
     */
    public function setActivationId(SimpleType\guid $activationId = null)
    {
        $this->ActivationId = $activationId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getActivationId()
    {
        return $this->ActivationId;
    }

    /**
     * @param  Address|null $address
     * @return Person
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
     * @param  string|null $bankAccount
     * @return Person
     */
    public function setBankAccount($bankAccount)
    {
        $this->BankAccount = $bankAccount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankAccount()
    {
        return $this->BankAccount;
    }

    /**
     * @param  string|null $birthDate
     * @return Person
     */
    public function setBirthDate($birthDate)
    {
        $this->BirthDate = $birthDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBirthDate()
    {
        return $this->BirthDate;
    }

    /**
     * @param  string|null $cellPhone
     * @return Person
     */
    public function setCellPhone($cellPhone)
    {
        $this->CellPhone = $cellPhone;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCellPhone()
    {
        return $this->CellPhone;
    }

    /**
     * @param  string|null $code
     * @return Person
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
     * @param  string|null $comments
     * @return Person
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param  Credential|null $credential
     * @return Person
     */
    public function setCredential(Credential $credential = null)
    {
        $this->Credential = $credential;

        return $this;
    }

    /**
     * @return Credential|null
     */
    public function getCredential()
    {
        return $this->Credential;
    }

    /**
     * @param  string|null $email
     * @return Person
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
     * @param  SimpleType\Gender|null $gender
     * @return Person
     */
    public function setGender(SimpleType\Gender $gender = null)
    {
        $this->Gender = $gender;

        return $this;
    }

    /**
     * @return SimpleType\Gender|null
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * @param  SimpleType\guid|null $id
     * @return Person
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
     * @param  boolean|null $isBlocked
     * @return Person
     */
    public function setIsBlocked($isBlocked)
    {
        $this->IsBlocked = $isBlocked;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsBlocked()
    {
        return $this->IsBlocked;
    }

    /**
     * @param  string|null $language
     * @return Person
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
     * @param  PersonName|null $name
     * @return Person
     */
    public function setName(PersonName $name = null)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return PersonName|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  string|null $nationalNumber
     * @return Person
     */
    public function setNationalNumber($nationalNumber)
    {
        $this->NationalNumber = $nationalNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNationalNumber()
    {
        return $this->NationalNumber;
    }

    /**
     * @param  string|null $phone
     * @return Person
     */
    public function setPhone($phone)
    {
        $this->Phone = $phone;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param  Picture|null $picture
     * @return Person
     */
    public function setPicture(Picture $picture = null)
    {
        $this->Picture = $picture;

        return $this;
    }

    /**
     * @return Picture|null
     */
    public function getPicture()
    {
        return $this->Picture;
    }

    /**
     * @param  SimpleType\guid|null $resetPasswordId
     * @return Person
     */
    public function setResetPasswordId(SimpleType\guid $resetPasswordId = null)
    {
        $this->ResetPasswordId = $resetPasswordId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getResetPasswordId()
    {
        return $this->ResetPasswordId;
    }

    /**
     * @param  PersonSettings|null $settings
     * @return Person
     */
    public function setSettings(PersonSettings $settings = null)
    {
        $this->Settings = $settings;

        return $this;
    }

    /**
     * @return PersonSettings|null
     */
    public function getSettings()
    {
        return $this->Settings;
    }

    /**
     * @param  ArrayOfContact|null $contacts
     * @return Person
     */
    public function setContacts(ArrayOfContact $contacts = null)
    {
        $this->Contacts = $contacts;

        return $this;
    }

    /**
     * @return ArrayOfContact|null
     */
    public function getContacts()
    {
        return $this->Contacts;
    }

    /**
     * @param  SimpleType\PersonType|null $type
     * @return Person
     */
    public function setType(SimpleType\PersonType $type = null)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return SimpleType\PersonType|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param  boolean|null $parent
     * @return Person
     */
    public function setParent($parent)
    {
        $this->Parent = $parent;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getParent()
    {
        return $this->Parent;
    }

    /**
     * @param  boolean|null $disabled
     * @return Person
     */
    public function setDisabled($disabled)
    {
        $this->Disabled = $disabled;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getDisabled()
    {
        return $this->Disabled;
    }

    /**
     * @param  boolean|null $headOfFamily
     * @return Person
     */
    public function setHeadOfFamily($headOfFamily)
    {
        $this->HeadOfFamily = $headOfFamily;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getHeadOfFamily()
    {
        return $this->HeadOfFamily;
    }

    /**
     * @param  ArrayOfRelation|null $relations
     * @return Person
     */
    public function setRelations(ArrayOfRelation $relations = null)
    {
        $this->Relations = $relations;

        return $this;
    }

    /**
     * @return ArrayOfRelation|null
     */
    public function getRelations()
    {
        return $this->Relations;
    }

    /**
     * @param  string|null $info1
     * @return Person
     */
    public function setInfo1($info1)
    {
        $this->Info1 = $info1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInfo1()
    {
        return $this->Info1;
    }

    /**
     * @param  string|null $info2
     * @return Person
     */
    public function setInfo2($info2)
    {
        $this->Info2 = $info2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInfo2()
    {
        return $this->Info2;
    }

    /**
     * @param  string|null $info3
     * @return Person
     */
    public function setInfo3($info3)
    {
        $this->Info3 = $info3;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInfo3()
    {
        return $this->Info3;
    }

    /**
     * @param  string|null $info4
     * @return Person
     */
    public function setInfo4($info4)
    {
        $this->Info4 = $info4;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInfo4()
    {
        return $this->Info4;
    }

    /**
     * @param  string|null $info5
     * @return Person
     */
    public function setInfo5($info5)
    {
        $this->Info5 = $info5;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInfo5()
    {
        return $this->Info5;
    }

    /**
     * @param  string|null $externalMasterID
     * @return Person
     */
    public function setExternalMasterID($externalMasterID)
    {
        $this->ExternalMasterID = $externalMasterID;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExternalMasterID()
    {
        return $this->ExternalMasterID;
    }

    /**
     * @param  ArrayOfRelation|null $parentRelations
     * @return Person
     */
    public function setParentRelations(ArrayOfRelation $parentRelations = null)
    {
        $this->ParentRelations = $parentRelations;

        return $this;
    }

    /**
     * @return ArrayOfRelation|null
     */
    public function getParentRelations()
    {
        return $this->ParentRelations;
    }

    /**
     * @param  SimpleType\guid|null $invoiceAddressId
     * @return Person
     */
    public function setInvoiceAddressId(SimpleType\guid $invoiceAddressId = null)
    {
        $this->InvoiceAddressId = $invoiceAddressId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getInvoiceAddressId()
    {
        return $this->InvoiceAddressId;
    }

}
