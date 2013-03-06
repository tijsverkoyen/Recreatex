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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Reason[] $Reason
     */
    protected $Reason = array();

    /**
     * @param  Reason[]      $reason
     * @return ArrayOfReason
     */
    public function setReason(array $reason = array())
    {
        $this->Reason = $reason;

        return $this;
    }

    /**
     * @return Reason[]
     */
    public function getReason()
    {
        return $this->Reason;
    }

}
