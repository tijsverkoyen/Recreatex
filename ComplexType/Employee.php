<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Employee extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Employee';

    /**

     * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * @var string
     */
    protected $Code;

    /**

     * @var PersonName
     */
    protected $Name;

    /**

     * @var string
     */
    protected $BirthDate;

    /**

     * @var SimpleType\Gender
     */
    protected $Gender;

    /**

     * @var string
     */
    protected $Language;

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
    protected $Email;

    /**

     * @var string
     */
    protected $Comments;

    /**

     * @var Department
     */
    protected $Department;

    /**

     * @var Function
     */
    protected $Function;

    /**

     * @var Credential
     */
    protected $Credential;

    /**

     * @var boolean
     */
    protected $IsBlocked;

    /**

     * @var Picture
     */
    protected $Picture;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return Employee
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
     * @return Employee
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
     * @param  PersonName[optional] $name
     * @return Employee
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
     * @param  string[optional] $birthDate
     * @return Employee
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
     * @param  SimpleType\Gender[optional] $gender
     * @return Employee
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
     * @param  string[optional] $language
     * @return Employee
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
     * @param  Address[optional] $address
     * @return Employee
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
     * @return Employee
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
     * @return Employee
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
     * @return Employee
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
     * @param  string[optional] $email
     * @return Employee
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
     * @param  string[optional] $comments
     * @return Employee
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
     * @param  Department[optional] $department
     * @return Employee
     */
    public function setDepartment(Department $department = null)
    {
        $this->Department = $department;

        return $this;
    }

    /**
     * @return Department
     */
    public function getDepartment()
    {
        return $this->Department;
    }

    /**
     * @param  Function[optional] $function
     * @return Employee
     */
    public function setFunction($function = null)
    {
        $this->Function = $function;

        return $this;
    }

    /**
     * @return Function
     */
    public function getFunction()
    {
        return $this->Function;
    }

    /**
     * @param  Credential[optional] $credential
     * @return Employee
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
     * @param  boolean[optional] $isBlocked
     * @return Employee
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
     * @param  Picture[optional] $picture
     * @return Employee
     */
    public function setPicture(Picture $picture = null)
    {
        $this->Picture = $picture;

        return $this;
    }

    /**
     * @return Picture
     */
    public function getPicture()
    {
        return $this->Picture;
    }
}
