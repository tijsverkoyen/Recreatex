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
     * @var array
     */
    protected $AbsentReason = array();

    /**
     * @param  array               $absentReason
     * @return ArrayOfAbsentReason
     */
    public function setAbsentReason(array $absentReason = array())
    {
        $this->AbsentReason = $absentReason;

        return $this;
    }

    /**
     * @return array
     */
    public function getAbsentReason()
    {
        if (!is_array($this->AbsentReason)) {
            return array($this->AbsentReason);
        }

        return $this->AbsentReason;
    }
}
