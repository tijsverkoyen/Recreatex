<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ForgotPasswordResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ForgotPasswordResult';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EmailAddress
     */
    protected $EmailAddress;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Password
     */
    protected $Password;

    /**
     * @param  string|null          $emailAddress
     * @return ForgotPasswordResult
     */
    public function setEmailAddress($emailAddress)
    {
        $this->EmailAddress = $emailAddress;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }

    /**
     * @param  string|null          $password
     * @return ForgotPasswordResult
     */
    public function setPassword($password)
    {
        $this->Password = $password;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }

}
