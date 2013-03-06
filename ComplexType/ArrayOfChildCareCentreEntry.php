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

     * maxOccurs = unbounded     * @var array
     */
    protected $ChildCareCentreEntry = array();

    /**
     * @param  array                       $childCareCentreEntry
     * @return ArrayOfChildCareCentreEntry
     */
    public function setChildCareCentreEntry(array $childCareCentreEntry = array())
    {
        $this->ChildCareCentreEntry = $childCareCentreEntry;

        return $this;
    }

    /**
     * @return array
     */
    public function getChildCareCentreEntry()
    {
        if (!is_array($this->ChildCareCentreEntry)) {
            return array($this->ChildCareCentreEntry);
        }

        return $this->ChildCareCentreEntry;
    }
}
