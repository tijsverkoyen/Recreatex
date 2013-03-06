<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfEntry';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $Entry = array();

    /**
     * @param  array        $entry
     * @return ArrayOfEntry
     */
    public function setEntry(array $entry = array())
    {
        $this->Entry = $entry;

        return $this;
    }

    /**
     * @return array
     */
    public function getEntry()
    {
        return $this->Entry;
    }
}
