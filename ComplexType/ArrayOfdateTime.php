<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfdateTime extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfdateTime';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $dateTime = array();

    /**
     * @param  array           $dateTime
     * @return ArrayOfdateTime
     */
    public function setDateTime(array $dateTime = array())
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * @return array
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }
}
