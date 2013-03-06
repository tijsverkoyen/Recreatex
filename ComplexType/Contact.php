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
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var PersonTitle
     */
    protected $Title;

    /**
     * @var string
     */
    protected $Initials;

    /**
     * @var PersonName
     */
    protected $Name;

    /**
     * @var PersonFunction
     */
    protected $Function;

    /**
     * @var string
     */
    protected $FunctionComments;

    /**
     * @var Address
     */
    protected $Location;

    /**
     * @var string
     */
    protected $Telephone1;

    /**
     * @var string
     */
    protected $Telephone2;

    /**
     * @var string
     */
    protected $Telephone3;

    /**
     * @var string
     */
    protected $Fax;

    /**
     * @var string
     */
    protected $Email;

    /**
     * @var string
     */
    protected $Comment;

    /**
     * @var string
     */
    protected $RegisterNumber;

    /**
     * @var boolean
     */
    protected $IsGeneral;

    /**
     * @var boolean
     */
    protected $IsInvoice;

    /**
     * @var boolean
     */
    protected $IsReservation;

    /**
     * @var boolean
     */
    protected $IsMailing;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return Contact
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
     * @param  PersonTitle[optional] $title
     * @return Contact
     */
    public function setTitle(PersonTitle $title = null)
    {
        $this->Title = $title;

        return $this;
    }

    /**
     * @return PersonTitle
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param  string[optional] $initials
     * @return Contact
     */
    public function setInitials($initials)
    {
        $this->Initials = $initials;

        return $this;
    }

    /**
     * @return string
     */
    public function getInitials()
    {
        return $this->Initials;
    }

    /**
     * @param  PersonName[optional] $name
     * @return Contact
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
     * @param  PersonFunction[optional] $function
     * @return Contact
     */
    public function setFunction(PersonFunction $function = null)
    {
        $this->Function = $function;

        return $this;
    }

    /**
     * @return PersonFunction
     */
    public function getFunction()
    {
        return $this->Function;
    }

    /**
     * @param  string[optional] $functionComments
     * @return Contact
     */
    public function setFunctionComments($functionComments)
    {
        $this->FunctionComments = $functionComments;

        return $this;
    }

    /**
     * @return string
     */
    public function getFunctionComments()
    {
        return $this->FunctionComments;
    }

    /**
     * @param  Address[optional] $location
     * @return Contact
     */
    public function setLocation(Address $location = null)
    {
        $this->Location = $location;

        return $this;
    }

    /**
     * @return Address
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param  string[optional] $telephone1
     * @return Contact
     */
    public function setTelephone1($telephone1)
    {
        $this->Telephone1 = $telephone1;

        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone1()
    {
        return $this->Telephone1;
    }

    /**
     * @param  string[optional] $telephone2
     * @return Contact
     */
    public function setTelephone2($telephone2)
    {
        $this->Telephone2 = $telephone2;

        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone2()
    {
        return $this->Telephone2;
    }

    /**
     * @param  string[optional] $telephone3
     * @return Contact
     */
    public function setTelephone3($telephone3)
    {
        $this->Telephone3 = $telephone3;

        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone3()
    {
        return $this->Telephone3;
    }

    /**
     * @param  string[optional] $fax
     * @return Contact
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
     * @param  string[optional] $email
     * @return Contact
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
     * @param  string[optional] $comment
     * @return Contact
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
     * @param  string[optional] $registerNumber
     * @return Contact
     */
    public function setRegisterNumber($registerNumber)
    {
        $this->RegisterNumber = $registerNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegisterNumber()
    {
        return $this->RegisterNumber;
    }

    /**
     * @param  boolean[optional] $isGeneral
     * @return Contact
     */
    public function setIsGeneral($isGeneral)
    {
        $this->IsGeneral = $isGeneral;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGeneral()
    {
        return $this->IsGeneral;
    }

    /**
     * @param  boolean[optional] $isInvoice
     * @return Contact
     */
    public function setIsInvoice($isInvoice)
    {
        $this->IsInvoice = $isInvoice;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInvoice()
    {
        return $this->IsInvoice;
    }

    /**
     * @param  boolean[optional] $isReservation
     * @return Contact
     */
    public function setIsReservation($isReservation)
    {
        $this->IsReservation = $isReservation;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReservation()
    {
        return $this->IsReservation;
    }

    /**
     * @param  boolean[optional] $isMailing
     * @return Contact
     */
    public function setIsMailing($isMailing)
    {
        $this->IsMailing = $isMailing;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMailing()
    {
        return $this->IsMailing;
    }
}
