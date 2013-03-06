<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfLanguage extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfLanguage';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Language[] $Language
     */
    protected $Language = array();

    /**
     * @param  Language[]      $language
     * @return ArrayOfLanguage
     */
    public function setLanguage(array $language = array())
    {
        $this->Language = $language;

        return $this;
    }

    /**
     * @return Language[]
     */
    public function getLanguage()
    {
        return $this->Language;
    }

}
