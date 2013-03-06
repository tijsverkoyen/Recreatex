<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonCreditsIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonCreditsIncludes';

    /**
     * @var boolean
     */
    protected $History;

    /**
     * @param  boolean[optional]     $history
     * @return PersonCreditsIncludes
     */
    public function setHistory($history)
    {
        $this->History = $history;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getHistory()
    {
        return $this->History;
    }
}
