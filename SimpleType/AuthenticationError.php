<?php

namespace TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class AuthenticationError extends SimpleTypeAbstract
{
    const NONE = 'None';
    const UNKNOWNUSER = 'UnknownUser';
    const INVALIDCREDENTIAL = 'InvalidCredential';
    const BLOCKEDUSER = 'BlockedUser';
    const INVALIDPARAMETERS = 'InvalidParameters';
    const USERNAMENOTUNIQUE = 'UsernameNotUnique';
    const USERNAMEEXISTS = 'UserNameExists';
    const HASUSERNAME = 'HasUserName';
    const INVALIDTOKEN = 'InvalidToken';
    const INVALIDTOKENKEY = 'InvalidTokenKey';
    const INVALIDTOKENTIME = 'InvalidTokenTime';
}
