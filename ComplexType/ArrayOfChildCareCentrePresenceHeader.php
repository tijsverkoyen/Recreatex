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

     * maxOccurs = unbounded     * @var array
     */
    protected $ChildCareCentrePresenceHeader = array();

    /**
     * @param  array                                $childCareCentrePresenceHeader
     * @return ArrayOfChildCareCentrePresenceHeader
     */
    public function setChildCareCentrePresenceHeader(array $childCareCentrePresenceHeader = array())
    {
        $this->ChildCareCentrePresenceHeader = $childCareCentrePresenceHeader;

        return $this;
    }

    /**
     * @return array
     */
    public function getChildCareCentrePresenceHeader()
    {
        return $this->ChildCareCentrePresenceHeader;
    }
}
