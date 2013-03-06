<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfAudience extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfAudience';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Audience[] $Audience
     */
    protected $Audience = array();

    /**
     * @param  Audience[]      $audience
     * @return ArrayOfAudience
     */
    public function setAudience(array $audience = array())
    {
        $this->Audience = $audience;

        return $this;
    }

    /**
     * @return Audience[]
     */
    public function getAudience()
    {
        return $this->Audience;
    }

}
