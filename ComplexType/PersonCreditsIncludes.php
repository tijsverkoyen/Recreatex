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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $History
     */
    protected $History;

    /**
     * @param  boolean|null          $history
     * @return PersonCreditsIncludes
     */
    public function setHistory($history)
    {
        $this->History = $history;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getHistory()
    {
        return $this->History;
    }

}
