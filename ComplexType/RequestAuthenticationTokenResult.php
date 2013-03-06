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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var AuthenticationResult|null $AuthenticationResult
     */
    protected $AuthenticationResult;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Token
     */
    protected $Token;

    /**
     * @param  AuthenticationResult|null        $authenticationResult
     * @return RequestAuthenticationTokenResult
     */
    public function setAuthenticationResult(AuthenticationResult $authenticationResult = null)
    {
        $this->AuthenticationResult = $authenticationResult;

        return $this;
    }

    /**
     * @return AuthenticationResult|null
     */
    public function getAuthenticationResult()
    {
        return $this->AuthenticationResult;
    }

    /**
     * @param  SimpleType\guid|null             $token
     * @return RequestAuthenticationTokenResult
     */
    public function setToken(SimpleType\guid $token = null)
    {
        $this->Token = $token;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getToken()
    {
        return $this->Token;
    }

}
