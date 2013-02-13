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
     * @var SimpleType\Guid|null $ActivationId
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
     * @var SimpleType\Guid|null $Id
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
     * @var string|null $Picture
     */
    protected $Picture;

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
     * @var SimpleType\Guid|null $ResetPasswordId
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
     * @param  SimpleType\Guid|null $activationId
     * @return Person
     */
    public function setActivationId(SimpleType\Guid $activationId = null)
    {
        $this->ActivationId = $activationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
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
     * @param  SimpleType\Guid|null $id
     * @return Person
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
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
     * @param  string|null $picture
     * @return Person
     */
    public function setPicture($picture)
    {
        $this->Picture = $picture;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPicture()
    {
        return $this->Picture;
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
     * @param  SimpleType\Guid|null $resetPasswordId
     * @return Person
     */
    public function setResetPasswordId(SimpleType\Guid $resetPasswordId = null)
    {
        $this->ResetPasswordId = $resetPasswordId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
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
}
