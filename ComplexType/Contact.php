<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Contact extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Contact';

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
     * @var PersonTitle|null $Title
     */
    protected $Title;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Initials
     */
    protected $Initials;

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
     * @var PersonFunction|null $Function
     */
    protected $Function;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FunctionComments
     */
    protected $FunctionComments;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Address|null $Location
     */
    protected $Location;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Telephone1
     */
    protected $Telephone1;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Telephone2
     */
    protected $Telephone2;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Telephone3
     */
    protected $Telephone3;

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
     * @var string|null $Email
     */
    protected $Email;

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
     * @var string|null $RegisterNumber
     */
    protected $RegisterNumber;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsGeneral
     */
    protected $IsGeneral;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsInvoice
     */
    protected $IsInvoice;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsReservation
     */
    protected $IsReservation;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsMailing
     */
    protected $IsMailing;

    /**
     * @param  SimpleType\guid|null $id
     * @return Contact
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
     * @param  PersonTitle|null $title
     * @return Contact
     */
    public function setTitle(PersonTitle $title = null)
    {
        $this->Title = $title;

        return $this;
    }

    /**
     * @return PersonTitle|null
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param  string|null $initials
     * @return Contact
     */
    public function setInitials($initials)
    {
        $this->Initials = $initials;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInitials()
    {
        return $this->Initials;
    }

    /**
     * @param  PersonName|null $name
     * @return Contact
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
     * @param  PersonFunction|null $function
     * @return Contact
     */
    public function setFunction(PersonFunction $function = null)
    {
        $this->Function = $function;

        return $this;
    }

    /**
     * @return PersonFunction|null
     */
    public function getFunction()
    {
        return $this->Function;
    }

    /**
     * @param  string|null $functionComments
     * @return Contact
     */
    public function setFunctionComments($functionComments)
    {
        $this->FunctionComments = $functionComments;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFunctionComments()
    {
        return $this->FunctionComments;
    }

    /**
     * @param  Address|null $location
     * @return Contact
     */
    public function setLocation(Address $location = null)
    {
        $this->Location = $location;

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param  string|null $telephone1
     * @return Contact
     */
    public function setTelephone1($telephone1)
    {
        $this->Telephone1 = $telephone1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelephone1()
    {
        return $this->Telephone1;
    }

    /**
     * @param  string|null $telephone2
     * @return Contact
     */
    public function setTelephone2($telephone2)
    {
        $this->Telephone2 = $telephone2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelephone2()
    {
        return $this->Telephone2;
    }

    /**
     * @param  string|null $telephone3
     * @return Contact
     */
    public function setTelephone3($telephone3)
    {
        $this->Telephone3 = $telephone3;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelephone3()
    {
        return $this->Telephone3;
    }

    /**
     * @param  string|null $fax
     * @return Contact
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
     * @param  string|null $email
     * @return Contact
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
     * @param  string|null $comment
     * @return Contact
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
     * @param  string|null $registerNumber
     * @return Contact
     */
    public function setRegisterNumber($registerNumber)
    {
        $this->RegisterNumber = $registerNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegisterNumber()
    {
        return $this->RegisterNumber;
    }

    /**
     * @param  boolean|null $isGeneral
     * @return Contact
     */
    public function setIsGeneral($isGeneral)
    {
        $this->IsGeneral = $isGeneral;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsGeneral()
    {
        return $this->IsGeneral;
    }

    /**
     * @param  boolean|null $isInvoice
     * @return Contact
     */
    public function setIsInvoice($isInvoice)
    {
        $this->IsInvoice = $isInvoice;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsInvoice()
    {
        return $this->IsInvoice;
    }

    /**
     * @param  boolean|null $isReservation
     * @return Contact
     */
    public function setIsReservation($isReservation)
    {
        $this->IsReservation = $isReservation;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsReservation()
    {
        return $this->IsReservation;
    }

    /**
     * @param  boolean|null $isMailing
     * @return Contact
     */
    public function setIsMailing($isMailing)
    {
        $this->IsMailing = $isMailing;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsMailing()
    {
        return $this->IsMailing;
    }

}
