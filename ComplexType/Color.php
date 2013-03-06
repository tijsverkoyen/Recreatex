<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Color extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Color';

    /**

     * minOccurs = 1     * @var integer $knownColor
     */
    protected $knownColor;

    /**

     * minOccurs = 1     * @var string $name
     */
    protected $name;

    /**

     * minOccurs = 1     * @var integer $state
     */
    protected $state;

    /**

     * minOccurs = 1     * @var integer $value
     */
    protected $value;

    /**
     * @param  integer $knownColor
     * @return Color
     */
    public function setKnownColor($knownColor)
    {
        $this->knownColor = $knownColor;

        return $this;
    }

    /**
     * @return integer
     */
    public function getKnownColor()
    {
        return $this->knownColor;
    }

    /**
     * @param  string $name
     * @return Color
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  integer $state
     * @return Color
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return integer
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param  integer $value
     * @return Color
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }
}
