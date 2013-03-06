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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ChildCareCentrePresence[] $ChildCareCentrePresence
     */
    protected $ChildCareCentrePresence = array();

    /**
     * @param  ChildCareCentrePresence[]      $childCareCentrePresence
     * @return ArrayOfChildCareCentrePresence
     */
    public function setChildCareCentrePresence(array $childCareCentrePresence = array())
    {
        $this->ChildCareCentrePresence = $childCareCentrePresence;

        return $this;
    }

    /**
     * @return ChildCareCentrePresence[]
     */
    public function getChildCareCentrePresence()
    {
        return $this->ChildCareCentrePresence;
    }

}
