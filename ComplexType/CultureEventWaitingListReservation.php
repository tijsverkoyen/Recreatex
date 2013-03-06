<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureEventWaitingListReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureEventWaitingListReservation';

    /**
     * @var SimpleTypeGuid
     */
    protected $CultureEventId;

    /**
     * @var string
     */
    protected $Comments;

    /**
     * @var string
     */
    protected $ReservationDate;

    /**
     * @var integer
     */
    protected $SitePlaceQuantity;

    /**
     * @param  SimpleType\Guid[optional]          $cultureEventId
     * @return CultureEventWaitingListReservation
     */
    public function setCultureEventId(SimpleType\Guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  string[optional]                   $comments
     * @return CultureEventWaitingListReservation
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param  string[optional]                   $reservationDate
     * @return CultureEventWaitingListReservation
     */
    public function setReservationDate($reservationDate)
    {
        $this->ReservationDate = $reservationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getReservationDate()
    {
        return $this->ReservationDate;
    }

    /**
     * @param  integer[optional]                  $sitePlaceQuantity
     * @return CultureEventWaitingListReservation
     */
    public function setSitePlaceQuantity($sitePlaceQuantity)
    {
        $this->SitePlaceQuantity = $sitePlaceQuantity;

        return $this;
    }

    /**
     * @return integer
     */
    public function getSitePlaceQuantity()
    {
        return $this->SitePlaceQuantity;
    }
}
