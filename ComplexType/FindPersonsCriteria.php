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
     * @param  SimpleType\Guid|null $activationId
     * @return FindPersonsCriteria
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
     * @param  string|null         $email
     * @return FindPersonsCriteria
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
     * @param  SimpleType\Guid|null $id
     * @return FindPersonsCriteria
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
     * @param  PersonIncludes|null $includes
     * @return FindPersonsCriteria
     */
    public function setIncludes(PersonIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return PersonIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  boolean|null        $isBlocked
     * @return FindPersonsCriteria
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
     * @param  string|null         $nationalNumber
     * @return FindPersonsCriteria
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
     * @param  PagingCriteria|null $paging
     * @return FindPersonsCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria|null
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param  SimpleType\Guid|null $resetPasswordId
     * @return FindPersonsCriteria
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
     * @param  string|null         $userName
     * @return FindPersonsCriteria
     */
    public function setUserName($userName)
    {
        $this->UserName = $userName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
}
