<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfChildCareCentrePresence extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfChildCareCentrePresence';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $ChildCareCentrePresence = array();

    /**
     * @param  array                          $childCareCentrePresence
     * @return ArrayOfChildCareCentrePresence
     */
    public function setChildCareCentrePresence(array $childCareCentrePresence = array())
    {
        $this->ChildCareCentrePresence = $childCareCentrePresence;

        return $this;
    }

    /**
     * @return array
     */
    public function getChildCareCentrePresence()
    {
        return $this->ChildCareCentrePresence;
    }
}
