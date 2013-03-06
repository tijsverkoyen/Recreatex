<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * ReservationViewPlace Domain Object
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ReservationViewPlace extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ReservationViewPlace';

    /**
     * ReservationViewPlace Unique Identifier
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**
     * ReservationViewPlace parent ReservationView Identifier
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ReservationViewID
     */
    protected $ReservationViewID;

    /**
     * ReservationViewPlace dependent place
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Place|null $Place
     */
    protected $Place;

    /**
     * ReservationViewPlace sequence deciding visual order
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Sequence
     */
    protected $Sequence;

    /**
     * @param  SimpleType\guid|null $id
     * @return ReservationViewPlace
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
     * @param  SimpleType\guid|null $reservationViewID
     * @return ReservationViewPlace
     */
    public function setReservationViewID(SimpleType\guid $reservationViewID = null)
    {
        $this->ReservationViewID = $reservationViewID;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getReservationViewID()
    {
        return $this->ReservationViewID;
    }

    /**
     * @param  Place|null           $place
     * @return ReservationViewPlace
     */
    public function setPlace(Place $place = null)
    {
        $this->Place = $place;

        return $this;
    }

    /**
     * @return Place|null
     */
    public function getPlace()
    {
        return $this->Place;
    }

    /**
     * @param  integer|null         $sequence
     * @return ReservationViewPlace
     */
    public function setSequence($sequence)
    {
        $this->Sequence = $sequence;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getSequence()
    {
        return $this->Sequence;
    }

}
