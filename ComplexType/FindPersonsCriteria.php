<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class FindPersonsCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'FindPersonsCriteria';

    /**
     * @var SimpleType\Guid
     */
    protected $ActivationId;

    /**
     * @var string
     */
    protected $Email;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var PersonIncludes
     */
    protected $Includes;

    /**
     * @var boolean
     */
    protected $IsBlocked;

    /**
     * @var string
     */
    protected $NationalNumber;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var SimpleType\Guid
     */
    protected $ResetPasswordId;

    /**
     * @var string
     */
    protected $UserName;

    /**
     * @param  SimpleType\Guid[optional] $activationId
     * @return FindPersonsCriteria
     */
    public function setActivationId(SimpleType\Guid $activationId = null)
    {
        $this->ActivationId = $activationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getActivationId()
    {
        return $this->ActivationId;
    }

    /**
     * @param  string[optional]    $email
     * @return FindPersonsCriteria
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
     * @param  SimpleType\Guid[optional] $id
     * @return FindPersonsCriteria
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
     * @param  PersonIncludes[optional] $includes
     * @return FindPersonsCriteria
     */
    public function setIncludes(PersonIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return PersonIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  boolean[optional]   $isBlocked
     * @return FindPersonsCriteria
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
     * @param  string[optional]    $nationalNumber
     * @return FindPersonsCriteria
     */
    public function setNationalNumber($nationalNumber)
    {
        $this->NationalNumber = $nationalNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getNationalNumber()
    {
        return $this->NationalNumber;
    }

    /**
     * @param  PagingCriteria[optional] $paging
     * @return FindPersonsCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param  SimpleType\Guid[optional] $resetPasswordId
     * @return FindPersonsCriteria
     */
    public function setResetPasswordId(SimpleType\Guid $resetPasswordId = null)
    {
        $this->ResetPasswordId = $resetPasswordId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getResetPasswordId()
    {
        return $this->ResetPasswordId;
    }

    /**
     * @param  string[optional]    $userName
     * @return FindPersonsCriteria
     */
    public function setUserName($userName)
    {
        $this->UserName = $userName;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }
}
