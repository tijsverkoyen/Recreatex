<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfChildCareCentreEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfChildCareCentreEntry';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ChildCareCentreEntry[] $ChildCareCentreEntry
     */
    protected $ChildCareCentreEntry = array();

    /**
     * @param  ChildCareCentreEntry[]      $childCareCentreEntry
     * @return ArrayOfChildCareCentreEntry
     */
    public function setChildCareCentreEntry(array $childCareCentreEntry = array())
    {
        $this->ChildCareCentreEntry = $childCareCentreEntry;

        return $this;
    }

    /**
     * @return ChildCareCentreEntry[]
     */
    public function getChildCareCentreEntry()
    {
        return $this->ChildCareCentreEntry;
    }

}
