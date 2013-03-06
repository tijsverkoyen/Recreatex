<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfLLVMessageTranslation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfLLVMessageTranslation';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var LLVMessageTranslation[] $LLVMessageTranslation
     */
    protected $LLVMessageTranslation = array();

    /**
     * @param  LLVMessageTranslation[]      $lLVMessageTranslation
     * @return ArrayOfLLVMessageTranslation
     */
    public function setLLVMessageTranslation(array $lLVMessageTranslation = array())
    {
        $this->LLVMessageTranslation = $lLVMessageTranslation;

        return $this;
    }

    /**
     * @return LLVMessageTranslation[]
     */
    public function getLLVMessageTranslation()
    {
        return $this->LLVMessageTranslation;
    }

}
