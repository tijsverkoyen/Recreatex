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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Message
     */
    protected $Message;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $LanguageId
     */
    protected $LanguageId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Body
     */
    protected $Body;

    /**
     * @param  SimpleType\guid|null  $id
     * @return LLVMessageTranslation
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string|null           $message
     * @return LLVMessageTranslation
     */
    public function setMessage($message)
    {
        $this->Message = $message;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param  SimpleType\guid|null  $languageId
     * @return LLVMessageTranslation
     */
    public function setLanguageId(SimpleType\guid $languageId = null)
    {
        $this->LanguageId = $languageId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getLanguageId()
    {
        return $this->LanguageId;
    }

    /**
     * @param  string|null           $body
     * @return LLVMessageTranslation
     */
    public function setBody($body)
    {
        $this->Body = $body;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBody()
    {
        return $this->Body;
    }

}
