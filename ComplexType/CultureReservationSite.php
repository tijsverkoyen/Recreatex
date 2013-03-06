<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureReservationSite extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureReservationSite';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $ReservationId;

    /**
     * @var SimpleTypeGuid
     */
    protected $CultureEventId;

    /**
     * @var CultureEvent
     */
    protected $CultureEvent;

    /**
     * @var integer
     */
    protected $NumberOfPlaces;

    /**
     * @var CultureSite
     */
    protected $CultureSite;

    /**
     * @var ArrayOfCultureReservationSitePlace
     */
    protected $ReservationSitePlaces;

    /**
     * @param  SimpleType\guid[optional] $id
     * @return CultureReservationSite
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\guid[optional] $reservationId
     * @return CultureReservationSite
     */
    public function setReservationId(SimpleType\guid $reservationId = null)
    {
        $this->ReservationId = $reservationId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getReservationId()
    {
        return $this->ReservationId;
    }

    /**
     * @param  SimpleType\guid[optional] $cultureEventId
     * @return CultureReservationSite
     */
    public function setCultureEventId(SimpleType\guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  CultureEvent[optional] $cultureEvent
     * @return CultureReservationSite
     */
    public function setCultureEvent(CultureEvent $cultureEvent = null)
    {
        $this->CultureEvent = $cultureEvent;

        return $this;
    }

    /**
     * @return CultureEvent
     */
    public function getCultureEvent()
    {
        return $this->CultureEvent;
    }

    /**
     * @param  integer[optional]      $numberOfPlaces
     * @return CultureReservationSite
     */
    public function setNumberOfPlaces($numberOfPlaces)
    {
        $this->NumberOfPlaces = $numberOfPlaces;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberOfPlaces()
    {
        return $this->NumberOfPlaces;
    }

    /**
     * @param  CultureSite[optional]  $cultureSite
     * @return CultureReservationSite
     */
    public function setCultureSite(CultureSite $cultureSite = null)
    {
        $this->CultureSite = $cultureSite;

        return $this;
    }

    /**
     * @return CultureSite
     */
    public function getCultureSite()
    {
        return $this->CultureSite;
    }

    /**
     * @param  ArrayOfCultureReservationSitePlace[optional] $reservationSitePlaces
     * @return CultureReservationSite
     */
    public function setReservationSitePlaces(ArrayOfCultureReservationSitePlace $reservationSitePlaces = null)
    {
        $this->ReservationSitePlaces = $reservationSitePlaces;

        return $this;
    }

    /**
     * @return ArrayOfCultureReservationSitePlace
     */
    public function getReservationSitePlaces()
    {
        return $this->ReservationSitePlaces;
    }
}
