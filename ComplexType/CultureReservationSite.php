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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ReservationId
     */
    protected $ReservationId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $CultureEventId
     */
    protected $CultureEventId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CultureEvent|null $CultureEvent
     */
    protected $CultureEvent;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $NumberOfPlaces
     */
    protected $NumberOfPlaces;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CultureSite|null $CultureSite
     */
    protected $CultureSite;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfCultureReservationSitePlace|null $ReservationSitePlaces
     */
    protected $ReservationSitePlaces;

    /**
     * @param  SimpleType\guid|null   $id
     * @return CultureReservationSite
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
     * @param  SimpleType\guid|null   $reservationId
     * @return CultureReservationSite
     */
    public function setReservationId(SimpleType\guid $reservationId = null)
    {
        $this->ReservationId = $reservationId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getReservationId()
    {
        return $this->ReservationId;
    }

    /**
     * @param  SimpleType\guid|null   $cultureEventId
     * @return CultureReservationSite
     */
    public function setCultureEventId(SimpleType\guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  CultureEvent|null      $cultureEvent
     * @return CultureReservationSite
     */
    public function setCultureEvent(CultureEvent $cultureEvent = null)
    {
        $this->CultureEvent = $cultureEvent;

        return $this;
    }

    /**
     * @return CultureEvent|null
     */
    public function getCultureEvent()
    {
        return $this->CultureEvent;
    }

    /**
     * @param  integer|null           $numberOfPlaces
     * @return CultureReservationSite
     */
    public function setNumberOfPlaces($numberOfPlaces)
    {
        $this->NumberOfPlaces = $numberOfPlaces;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumberOfPlaces()
    {
        return $this->NumberOfPlaces;
    }

    /**
     * @param  CultureSite|null       $cultureSite
     * @return CultureReservationSite
     */
    public function setCultureSite(CultureSite $cultureSite = null)
    {
        $this->CultureSite = $cultureSite;

        return $this;
    }

    /**
     * @return CultureSite|null
     */
    public function getCultureSite()
    {
        return $this->CultureSite;
    }

    /**
     * @param  ArrayOfCultureReservationSitePlace|null $reservationSitePlaces
     * @return CultureReservationSite
     */
    public function setReservationSitePlaces(ArrayOfCultureReservationSitePlace $reservationSitePlaces = null)
    {
        $this->ReservationSitePlaces = $reservationSitePlaces;

        return $this;
    }

    /**
     * @return ArrayOfCultureReservationSitePlace|null
     */
    public function getReservationSitePlaces()
    {
        return $this->ReservationSitePlaces;
    }

}
