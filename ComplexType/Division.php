<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * Division Domain Object
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Division extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Division';

    /**
     * Division Unique Identifier
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * Division Name
     * @var string
     */
    protected $Name;

    /**
     * Division Location
     * @var Address
     */
    protected $Address;

    /**
     * Division Phone number
     * @var string
     */
    protected $Phone;

    /**
     * Division fax number
     * @var string
     */
    protected $Fax;

    /**
     * Division email
     * @var string
     */
    protected $Email;

    /**
     * Division website Url
     * @var string
     */
    protected $Website;

    /**
     * Division bankaccount number
     * @var string
     */
    protected $BankAccount;

    /**
     * Division Comments
     * @var string
     */
    protected $Comments;

    /**
     * Division Credentials
     * @var Credential
     */
    protected $Credential;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return Division
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
     * @param  string[optional] $name
     * @return Division
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
     * @param  Address[optional] $address
     * @return Division
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
     * @param  string[optional] $phone
     * @return Division
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
     * @param  string[optional] $fax
     * @return Division
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
     * @return Division
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
     * @param  string[optional] $website
     * @return Division
     */
    public function setWebsite($website)
    {
        $this->Website = $website;

        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->Website;
    }

    /**
     * @param  string[optional] $bankAccount
     * @return Division
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
     * @param  string[optional] $comments
     * @return Division
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
     * @return Division
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
}
