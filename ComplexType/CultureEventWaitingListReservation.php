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
     * @var string|null $Comments
     */
    protected $Comments;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ReservationDate
     */
    protected $ReservationDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $SitePlaceQuantity
     */
    protected $SitePlaceQuantity;

    /**
     * @param  SimpleType\guid|null               $cultureEventId
     * @return CultureEventWaitingListReservation
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
     * @param  string|null                        $comments
     * @return CultureEventWaitingListReservation
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param  string|null                        $reservationDate
     * @return CultureEventWaitingListReservation
     */
    public function setReservationDate($reservationDate)
    {
        $this->ReservationDate = $reservationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReservationDate()
    {
        return $this->ReservationDate;
    }

    /**
     * @param  integer|null                       $sitePlaceQuantity
     * @return CultureEventWaitingListReservation
     */
    public function setSitePlaceQuantity($sitePlaceQuantity)
    {
        $this->SitePlaceQuantity = $sitePlaceQuantity;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getSitePlaceQuantity()
    {
        return $this->SitePlaceQuantity;
    }

}
