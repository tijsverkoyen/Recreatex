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

     * maxOccurs = unbounded     * @var array
     */
    protected $SwimmingLevel = array();

    /**
     * @param  array                $swimmingLevel
     * @return ArrayOfSwimmingLevel
     */
    public function setSwimmingLevel(array $swimmingLevel = array())
    {
        $this->SwimmingLevel = $swimmingLevel;

        return $this;
    }

    /**
     * @return array
     */
    public function getSwimmingLevel()
    {
        return $this->SwimmingLevel;
    }
}
