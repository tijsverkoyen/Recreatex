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

     * maxOccurs = unbounded     * @var array
     */
    protected $Language = array();

    /**
     * @param  array           $language
     * @return ArrayOfLanguage
     */
    public function setLanguage(array $language = array())
    {
        $this->Language = $language;

        return $this;
    }

    /**
     * @return array
     */
    public function getLanguage()
    {
        return $this->Language;
    }
}
