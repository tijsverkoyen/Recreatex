<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfSwimmingLevel extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfSwimmingLevel';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SwimmingLevel[] $SwimmingLevel
     */
    protected $SwimmingLevel = array();

    /**
     * @param  SwimmingLevel[]      $swimmingLevel
     * @return ArrayOfSwimmingLevel
     */
    public function setSwimmingLevel(array $swimmingLevel = array())
    {
        $this->SwimmingLevel = $swimmingLevel;

        return $this;
    }

    /**
     * @return SwimmingLevel[]
     */
    public function getSwimmingLevel()
    {
        return $this->SwimmingLevel;
    }

}
