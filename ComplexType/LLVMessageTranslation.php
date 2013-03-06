<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class LLVMessageTranslation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'LLVMessageTranslation';

    /**

     * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * @var string
     */
    protected $Message;

    /**

     * @var SimpleTypeGuid
     */
    protected $LanguageId;

    /**

     * @var string
     */
    protected $Body;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return LLVMessageTranslation
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
     * @param  string[optional]      $message
     * @return LLVMessageTranslation
     */
    public function setMessage($message)
    {
        $this->Message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param  SimpleType\Guid[optional] $languageId
     * @return LLVMessageTranslation
     */
    public function setLanguageId(SimpleType\Guid $languageId = null)
    {
        $this->LanguageId = $languageId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getLanguageId()
    {
        return $this->LanguageId;
    }

    /**
     * @param  string[optional]      $body
     * @return LLVMessageTranslation
     */
    public function setBody($body)
    {
        $this->Body = $body;

        return $this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->Body;
    }
}
