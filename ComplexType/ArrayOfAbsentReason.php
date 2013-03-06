<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfAbsentReason extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfAbsentReason';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var AbsentReason[] $AbsentReason
     */
    protected $AbsentReason = array();

    /**
     * @param  AbsentReason[]      $absentReason
     * @return ArrayOfAbsentReason
     */
    public function setAbsentReason(array $absentReason = array())
    {
        $this->AbsentReason = $absentReason;

        return $this;
    }

    /**
     * @return AbsentReason[]
     */
    public function getAbsentReason()
    {
        return $this->AbsentReason;
    }

}
