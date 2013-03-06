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
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**
     * ReservationView Shortname
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ShortName
     */
    protected $ShortName;

    /**
     * ReservationView Description
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**
     * ReservationView Day interval setting
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $DayInterval
     */
    protected $DayInterval;

    /**
     * ReservationView use Recurring colors setting
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $UseRecurringColors
     */
    protected $UseRecurringColors;

    /**
     * ReservationView first color
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Color|null $Color1
     */
    protected $Color1;

    /**
     * ReservationView second color
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Color|null $Color2
     */
    protected $Color2;

    /**
     * ReservationView duration setting
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Duration
     */
    protected $Duration;

    /**
     * ReservationView dependent places
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfReservationViewPlace|null $ReservationViewPlaces
     */
    protected $ReservationViewPlaces;

    /**
     * @param  SimpleType\guid|null $id
     * @return ReservationView
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string|null     $shortName
     * @return ReservationView
     */
    public function setShortName($shortName)
    {
        $this->ShortName = $shortName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getShortName()
    {
        return $this->ShortName;
    }

    /**
     * @param  string|null     $description
     * @return ReservationView
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  integer|null    $dayInterval
     * @return ReservationView
     */
    public function setDayInterval($dayInterval)
    {
        $this->DayInterval = $dayInterval;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getDayInterval()
    {
        return $this->DayInterval;
    }

    /**
     * @param  boolean|null    $useRecurringColors
     * @return ReservationView
     */
    public function setUseRecurringColors($useRecurringColors)
    {
        $this->UseRecurringColors = $useRecurringColors;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getUseRecurringColors()
    {
        return $this->UseRecurringColors;
    }

    /**
     * @param  Color|null      $color1
     * @return ReservationView
     */
    public function setColor1(Color $color1 = null)
    {
        $this->Color1 = $color1;

        return $this;
    }

    /**
     * @return Color|null
     */
    public function getColor1()
    {
        return $this->Color1;
    }

    /**
     * @param  Color|null      $color2
     * @return ReservationView
     */
    public function setColor2(Color $color2 = null)
    {
        $this->Color2 = $color2;

        return $this;
    }

    /**
     * @return Color|null
     */
    public function getColor2()
    {
        return $this->Color2;
    }

    /**
     * @param  integer|null    $duration
     * @return ReservationView
     */
    public function setDuration($duration)
    {
        $this->Duration = $duration;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     * @param  ArrayOfReservationViewPlace|null $reservationViewPlaces
     * @return ReservationView
     */
    public function setReservationViewPlaces(ArrayOfReservationViewPlace $reservationViewPlaces = null)
    {
        $this->ReservationViewPlaces = $reservationViewPlaces;

        return $this;
    }

    /**
     * @return ArrayOfReservationViewPlace|null
     */
    public function getReservationViewPlaces()
    {
        return $this->ReservationViewPlaces;
    }

}
