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

     * maxOccurs = unbounded     * @var array
     */
    protected $LLVMessageTranslation = array();

    /**
     * @param  array                        $lLVMessageTranslation
     * @return ArrayOfLLVMessageTranslation
     */
    public function setLLVMessageTranslation(array $lLVMessageTranslation = array())
    {
        $this->LLVMessageTranslation = $lLVMessageTranslation;

        return $this;
    }

    /**
     * @return array
     */
    public function getLLVMessageTranslation()
    {
        return $this->LLVMessageTranslation;
    }
}
