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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Dx
     */
    protected $Dx;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Dy
     */
    protected $Dy;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $X
     */
    protected $X;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Y
     */
    protected $Y;

    /**
     * @param  float|null $dx
     * @return Location
     */
    public function setDx($dx)
    {
        $this->Dx = $dx;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getDx()
    {
        return $this->Dx;
    }

    /**
     * @param  float|null $dy
     * @return Location
     */
    public function setDy($dy)
    {
        $this->Dy = $dy;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getDy()
    {
        return $this->Dy;
    }

    /**
     * @param  float|null $x
     * @return Location
     */
    public function setX($x)
    {
        $this->X = $x;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getX()
    {
        return $this->X;
    }

    /**
     * @param  float|null $y
     * @return Location
     */
    public function setY($y)
    {
        $this->Y = $y;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getY()
    {
        return $this->Y;
    }
}
