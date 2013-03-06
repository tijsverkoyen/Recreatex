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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Color|null $OpeningHourColor
     */
    protected $OpeningHourColor;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Color|null $ClosingHourColor
     */
    protected $ClosingHourColor;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Color|null $ClosingDayColor
     */
    protected $ClosingDayColor;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfInfrastructureOpeningHours|null $InfrastructureOpeningHours
     */
    protected $InfrastructureOpeningHours;

    /**
     * @param  Color|null             $openingHourColor
     * @return InfrastructureOpenings
     */
    public function setOpeningHourColor(Color $openingHourColor = null)
    {
        $this->OpeningHourColor = $openingHourColor;

        return $this;
    }

    /**
     * @return Color|null
     */
    public function getOpeningHourColor()
    {
        return $this->OpeningHourColor;
    }

    /**
     * @param  Color|null             $closingHourColor
     * @return InfrastructureOpenings
     */
    public function setClosingHourColor(Color $closingHourColor = null)
    {
        $this->ClosingHourColor = $closingHourColor;

        return $this;
    }

    /**
     * @return Color|null
     */
    public function getClosingHourColor()
    {
        return $this->ClosingHourColor;
    }

    /**
     * @param  Color|null             $closingDayColor
     * @return InfrastructureOpenings
     */
    public function setClosingDayColor(Color $closingDayColor = null)
    {
        $this->ClosingDayColor = $closingDayColor;

        return $this;
    }

    /**
     * @return Color|null
     */
    public function getClosingDayColor()
    {
        return $this->ClosingDayColor;
    }

    /**
     * @param  ArrayOfInfrastructureOpeningHours|null $infrastructureOpeningHours
     * @return InfrastructureOpenings
     */
    public function setInfrastructureOpeningHours(ArrayOfInfrastructureOpeningHours $infrastructureOpeningHours = null)
    {
        $this->InfrastructureOpeningHours = $infrastructureOpeningHours;

        return $this;
    }

    /**
     * @return ArrayOfInfrastructureOpeningHours|null
     */
    public function getInfrastructureOpeningHours()
    {
        return $this->InfrastructureOpeningHours;
    }

}
