<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfChildCareCentrePresenceHeader extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfChildCareCentrePresenceHeader';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ChildCareCentrePresenceHeader[] $ChildCareCentrePresenceHeader
     */
    protected $ChildCareCentrePresenceHeader = array();

    /**
     * @param  ChildCareCentrePresenceHeader[]      $childCareCentrePresenceHeader
     * @return ArrayOfChildCareCentrePresenceHeader
     */
    public function setChildCareCentrePresenceHeader(array $childCareCentrePresenceHeader = array())
    {
        $this->ChildCareCentrePresenceHeader = $childCareCentrePresenceHeader;

        return $this;
    }

    /**
     * @return ChildCareCentrePresenceHeader[]
     */
    public function getChildCareCentrePresenceHeader()
    {
        return $this->ChildCareCentrePresenceHeader;
    }

}
