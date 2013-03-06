<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * ReservationView Domain Object
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ReservationView extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ReservationView';

    /**
     * ReservationView Unique Identifier
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * ReservationView Shortname
     * @var string
     */
    protected $ShortName;

    /**
     * ReservationView Description
     * @var string
     */
    protected $Description;

    /**
     * ReservationView Day interval setting
     * @var integer
     */
    protected $DayInterval;

    /**
     * ReservationView use Recurring colors setting
     * @var boolean
     */
    protected $UseRecurringColors;

    /**
     * ReservationView first color
     * @var Color
     */
    protected $Color1;

    /**
     * ReservationView second color
     * @var Color
     */
    protected $Color2;

    /**
     * ReservationView duration setting
     * @var integer
     */
    protected $Duration;

    /**
     * ReservationView dependent places
     * @var ArrayOfReservationViewPlace
     */
    protected $ReservationViewPlaces;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return ReservationView
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string[optional] $shortName
     * @return ReservationView
     */
    public function setShortName($shortName)
    {
        $this->ShortName = $shortName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->ShortName;
    }

    /**
     * @param  string[optional] $description
     * @return ReservationView
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  integer[optional] $dayInterval
     * @return ReservationView
     */
    public function setDayInterval($dayInterval)
    {
        $this->DayInterval = $dayInterval;

        return $this;
    }

    /**
     * @return integer
     */
    public function getDayInterval()
    {
        return $this->DayInterval;
    }

    /**
     * @param  boolean[optional] $useRecurringColors
     * @return ReservationView
     */
    public function setUseRecurringColors($useRecurringColors)
    {
        $this->UseRecurringColors = $useRecurringColors;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getUseRecurringColors()
    {
        return $this->UseRecurringColors;
    }

    /**
     * @param  Color[optional] $color1
     * @return ReservationView
     */
    public function setColor1(Color $color1 = null)
    {
        $this->Color1 = $color1;

        return $this;
    }

    /**
     * @return Color
     */
    public function getColor1()
    {
        return $this->Color1;
    }

    /**
     * @param  Color[optional] $color2
     * @return ReservationView
     */
    public function setColor2(Color $color2 = null)
    {
        $this->Color2 = $color2;

        return $this;
    }

    /**
     * @return Color
     */
    public function getColor2()
    {
        return $this->Color2;
    }

    /**
     * @param  integer[optional] $duration
     * @return ReservationView
     */
    public function setDuration($duration)
    {
        $this->Duration = $duration;

        return $this;
    }

    /**
     * @return integer
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     * @param  ArrayOfReservationViewPlace[optional] $reservationViewPlaces
     * @return ReservationView
     */
    public function setReservationViewPlaces(ArrayOfReservationViewPlace $reservationViewPlaces = null)
    {
        $this->ReservationViewPlaces = $reservationViewPlaces;

        return $this;
    }

    /**
     * @return ArrayOfReservationViewPlace
     */
    public function getReservationViewPlaces()
    {
        return $this->ReservationViewPlaces;
    }
}
