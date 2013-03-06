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
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var string
     */
    protected $Functions;

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
     * @param  SimpleType\Guid[optional] $id
     * @return VendorContact
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
     * @return VendorContact
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
     * @param  string[optional] $functions
     * @return VendorContact
     */
    public function setFunctions($functions)
    {
        $this->Functions = $functions;

        return $this;
    }

    /**
     * @return string
     */
    public function getFunctions()
    {
        return $this->Functions;
    }

    /**
     * @param  string[optional] $phone1
     * @return VendorContact
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
     * @return VendorContact
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
     * @return VendorContact
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
     * @param  string[optional] $fax
     * @return VendorContact
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
     * @return VendorContact
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
     * @return VendorContact
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
}
