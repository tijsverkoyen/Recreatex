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
     * @var PersonName|null $Name
     */
    protected $Name;

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
     * @var SimpleType\Gender|null $Gender
     */
    protected $Gender;

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
     * @var string|null $Email
     */
    protected $Email;

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
     * @var Department|null $Department
     */
    protected $Department;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Function|null $Function
     */
    protected $Function;

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
     * @var boolean|null $IsBlocked
     */
    protected $IsBlocked;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Picture|null $Picture
     */
    protected $Picture;

    /**
     * @param  SimpleType\guid|null $id
     * @return Employee
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
     * @return Employee
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
     * @param  PersonName|null $name
     * @return Employee
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
     * @param  string|null $birthDate
     * @return Employee
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
     * @param  SimpleType\Gender|null $gender
     * @return Employee
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
     * @param  string|null $language
     * @return Employee
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
     * @param  Address|null $address
     * @return Employee
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
     * @return Employee
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
     * @return Employee
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
     * @return Employee
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
     * @param  string|null $email
     * @return Employee
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
     * @param  string|null $comments
     * @return Employee
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
     * @param  Department|null $department
     * @return Employee
     */
    public function setDepartment(Department $department = null)
    {
        $this->Department = $department;

        return $this;
    }

    /**
     * @return Department|null
     */
    public function getDepartment()
    {
        return $this->Department;
    }

    /**
     * @param  Function|null $function
     * @return Employee
     */
    public function setFunction(Function $function = null)
    {
        $this->Function = $function;

        return $this;
    }

    /**
     * @return Function|null
     */
    public function getFunction()
    {
        return $this->Function;
    }

    /**
     * @param  Credential|null $credential
     * @return Employee
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
     * @param  boolean|null $isBlocked
     * @return Employee
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
     * @param  Picture|null $picture
     * @return Employee
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

}
