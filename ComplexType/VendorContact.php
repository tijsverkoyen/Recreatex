<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class VendorContact extends ComplexTypeAbstract
{
    const CLASS_NAME = 'VendorContact';

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
     * @var string|null $Name
     */
    protected $Name;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Functions
     */
    protected $Functions;

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
     * @param  SimpleType\guid|null $id
     * @return VendorContact
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
     * @param  string|null   $name
     * @return VendorContact
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
     * @param  string|null   $functions
     * @return VendorContact
     */
    public function setFunctions($functions)
    {
        $this->Functions = $functions;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFunctions()
    {
        return $this->Functions;
    }

    /**
     * @param  string|null   $phone1
     * @return VendorContact
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
     * @param  string|null   $phone2
     * @return VendorContact
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
     * @param  string|null   $phone3
     * @return VendorContact
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
     * @param  string|null   $fax
     * @return VendorContact
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
     * @param  string|null   $email
     * @return VendorContact
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
     * @param  string|null   $comment
     * @return VendorContact
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

}
