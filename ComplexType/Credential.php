<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Credential extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Credential';

    /**
     * @var string
     */
    protected $Password;

    /**
     * @var string
     */
    protected $Username;

    /**
     * @param string[optional] $password
     *  Credential
     */
    public function setPassword($password)
    {
        $this->Password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param  string[optional] $username
     * @return Credential
     */
    public function setUsername($username)
    {
        $this->Username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->Username;
    }
}
