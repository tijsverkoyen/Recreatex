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
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * ReservationViewPlace parent ReservationView Identifier
     * @var SimpleTypeGuid
     */
    protected $ReservationViewID;

    /**
     * ReservationViewPlace dependent place
     * @var Place
     */
    protected $Place;

    /**
     * ReservationViewPlace sequence deciding visual order
     * @var integer
     */
    protected $Sequence;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return ReservationViewPlace
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\Guid[optional] $reservationViewID
     * @return ReservationViewPlace
     */
    public function setReservationViewID(SimpleType\Guid $reservationViewID = null)
    {
        $this->ReservationViewID = $reservationViewID;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getReservationViewID()
    {
        return $this->ReservationViewID;
    }

    /**
     * @param  Place[optional]      $place
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
     * @param  integer[optional]    $sequence
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
