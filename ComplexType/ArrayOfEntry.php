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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Entry[] $Entry
     */
    protected $Entry = array();

    /**
     * @param  Entry[]      $entry
     * @return ArrayOfEntry
     */
    public function setEntry(array $entry = array())
    {
        $this->Entry = $entry;

        return $this;
    }

    /**
     * @return Entry[]
     */
    public function getEntry()
    {
        return $this->Entry;
    }

}
