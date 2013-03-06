<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RequestAuthenticationTokenResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RequestAuthenticationTokenResult';

    /**
     * @var AuthenticationResult
     */
    protected $AuthenticationResult;

    /**
     * @var SimpleTypeGuid
     */
    protected $Token;

    /**
     * @param  AuthenticationResult[optional]   $authenticationResult
     * @return RequestAuthenticationTokenResult
     */
    public function setAuthenticationResult(AuthenticationResult $authenticationResult = null)
    {
        $this->AuthenticationResult = $authenticationResult;

        return $this;
    }

    /**
     * @return AuthenticationResult
     */
    public function getAuthenticationResult()
    {
        return $this->AuthenticationResult;
    }

    /**
     * @param  SimpleType\Guid[optional]        $token
     * @return RequestAuthenticationTokenResult
     */
    public function setToken(SimpleType\Guid $token = null)
    {
        $this->Token = $token;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getToken()
    {
        return $this->Token;
    }
}
