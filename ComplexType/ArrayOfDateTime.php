<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfDateTime extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfdateTime';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var string[] $dateTime
     */
    protected $dateTime = array();

    /**
     * @param  string[]        $dateTime
     * @return ArrayOfdateTime
     */
    public function setDateTime(array $dateTime = array())
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }
}
