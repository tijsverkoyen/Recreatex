<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Location extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Location';

    /**
     * @var float
     */
    protected $Dx;

    /**
     * @var float
     */
    protected $Dy;

    /**
     * @var float
     */
    protected $X;

    /**
     * @var float
     */
    protected $Y;

    /**
     * @param  float[optional] $dx
     * @return Location
     */
    public function setDx($dx)
    {
        $this->Dx = $dx;

        return $this;
    }

    /**
     * @return float
     */
    public function getDx()
    {
        return $this->Dx;
    }

    /**
     * @param  float[optional] $dy
     * @return Location
     */
    public function setDy($dy)
    {
        $this->Dy = $dy;

        return $this;
    }

    /**
     * @return float
     */
    public function getDy()
    {
        return $this->Dy;
    }

    /**
     * @param  float[optional] $x
     * @return Location
     */
    public function setX($x)
    {
        $this->X = $x;

        return $this;
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->X;
    }

    /**
     * @param  float[optional] $y
     * @return Location
     */
    public function setY($y)
    {
        $this->Y = $y;

        return $this;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->Y;
    }
}
