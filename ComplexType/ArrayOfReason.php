<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfReason extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfReason';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $Reason = array();

    /**
     * @param  array         $reason
     * @return ArrayOfReason
     */
    public function setReason(array $reason = array())
    {
        $this->Reason = $reason;

        return $this;
    }

    /**
     * @return array
     */
    public function getReason()
    {
        return $this->Reason;
    }
}
