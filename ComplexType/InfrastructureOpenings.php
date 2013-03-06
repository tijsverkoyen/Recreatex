<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class InfrastructureOpenings extends ComplexTypeAbstract
{
    const CLASS_NAME = 'InfrastructureOpenings';

    /**
     * @var Color
     */
    protected $OpeningHourColor;

    /**
     * @var Color
     */
    protected $ClosingHourColor;

    /**
     * @var Color
     */
    protected $ClosingDayColor;

    /**
     * @var ArrayOfInfrastructureOpeningHours
     */
    protected $InfrastructureOpeningHours;

    /**
     * @param  Color[optional]        $openingHourColor
     * @return InfrastructureOpenings
     */
    public function setOpeningHourColor(Color $openingHourColor = null)
    {
        $this->OpeningHourColor = $openingHourColor;

        return $this;
    }

    /**
     * @return Color
     */
    public function getOpeningHourColor()
    {
        return $this->OpeningHourColor;
    }

    /**
     * @param  Color[optional]        $closingHourColor
     * @return InfrastructureOpenings
     */
    public function setClosingHourColor(Color $closingHourColor = null)
    {
        $this->ClosingHourColor = $closingHourColor;

        return $this;
    }

    /**
     * @return Color
     */
    public function getClosingHourColor()
    {
        return $this->ClosingHourColor;
    }

    /**
     * @param  Color[optional]        $closingDayColor
     * @return InfrastructureOpenings
     */
    public function setClosingDayColor(Color $closingDayColor = null)
    {
        $this->ClosingDayColor = $closingDayColor;

        return $this;
    }

    /**
     * @return Color
     */
    public function getClosingDayColor()
    {
        return $this->ClosingDayColor;
    }

    /**
     * @param  ArrayOfInfrastructureOpeningHours[optional] $infrastructureOpeningHours
     * @return InfrastructureOpenings
     */
    public function setInfrastructureOpeningHours(ArrayOfInfrastructureOpeningHours $infrastructureOpeningHours = null)
    {
        $this->InfrastructureOpeningHours = $infrastructureOpeningHours;

        return $this;
    }

    /**
     * @return ArrayOfInfrastructureOpeningHours
     */
    public function getInfrastructureOpeningHours()
    {
        return $this->InfrastructureOpeningHours;
    }
}
