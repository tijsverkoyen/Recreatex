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
     * @param  string|null $password
     * @return Credential
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

    /**
     * @param  string|null $username
     * @return Credential
     */
    public function setUsername($username)
    {
        $this->Username = $username;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUsername()
    {
        return $this->Username;
    }
}
