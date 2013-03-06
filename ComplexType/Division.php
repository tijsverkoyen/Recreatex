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
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**
     * Division Name
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

    /**
     * Division Location
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Address|null $Address
     */
    protected $Address;

    /**
     * Division Phone number
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Phone
     */
    protected $Phone;

    /**
     * Division fax number
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Fax
     */
    protected $Fax;

    /**
     * Division email
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Email
     */
    protected $Email;

    /**
     * Division website Url
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Website
     */
    protected $Website;

    /**
     * Division bankaccount number
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $BankAccount
     */
    protected $BankAccount;

    /**
     * Division Comments
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Comments
     */
    protected $Comments;

    /**
     * Division Credentials
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Credential|null $Credential
     */
    protected $Credential;

    /**
     * @param  SimpleType\guid|null $id
     * @return Division
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
     * @param  string|null $name
     * @return Division
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
     * @param  Address|null $address
     * @return Division
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
     * @param  string|null $phone
     * @return Division
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
     * @param  string|null $fax
     * @return Division
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
     * @return Division
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
     * @param  string|null $website
     * @return Division
     */
    public function setWebsite($website)
    {
        $this->Website = $website;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->Website;
    }

    /**
     * @param  string|null $bankAccount
     * @return Division
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
     * @param  string|null $comments
     * @return Division
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
     * @return Division
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

}
