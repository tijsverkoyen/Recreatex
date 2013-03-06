<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PlaceReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PlaceReservation';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ReservationActivityId
     */
    protected $ReservationActivityId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PlaceId
     */
    protected $PlaceId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $StartDate
     */
    protected $StartDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $StartTime
     */
    protected $StartTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EndDate
     */
    protected $EndDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EndTime
     */
    protected $EndTime;

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
     * @var SimpleType\guid|null $SerieId
     */
    protected $SerieId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $SerieNumber
     */
    protected $SerieNumber;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $ReservationNumber
     */
    protected $ReservationNumber;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var LockTicket|null $LockTicket
     */
    protected $LockTicket;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $NumberOfParticipants
     */
    protected $NumberOfParticipants;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfArticleSale|null $ArticleSales
     */
    protected $ArticleSales;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfRentalReservation|null $RentalReservations
     */
    protected $RentalReservations;

    /**
     * @param  SimpleType\guid|null $reservationActivityId
     * @return PlaceReservation
     */
    public function setReservationActivityId(SimpleType\guid $reservationActivityId = null)
    {
        $this->ReservationActivityId = $reservationActivityId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getReservationActivityId()
    {
        return $this->ReservationActivityId;
    }

    /**
     * @param  SimpleType\guid|null $placeId
     * @return PlaceReservation
     */
    public function setPlaceId(SimpleType\guid $placeId = null)
    {
        $this->PlaceId = $placeId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPlaceId()
    {
        return $this->PlaceId;
    }

    /**
     * @param  string|null      $startDate
     * @return PlaceReservation
     */
    public function setStartDate($startDate)
    {
        $this->StartDate = $startDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param  string|null      $startTime
     * @return PlaceReservation
     */
    public function setStartTime($startTime)
    {
        $this->StartTime = $startTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * @param  string|null      $endDate
     * @return PlaceReservation
     */
    public function setEndDate($endDate)
    {
        $this->EndDate = $endDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param  string|null      $endTime
     * @return PlaceReservation
     */
    public function setEndTime($endTime)
    {
        $this->EndTime = $endTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * @param  string|null      $comments
     * @return PlaceReservation
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
     * @param  SimpleType\guid|null $serieId
     * @return PlaceReservation
     */
    public function setSerieId(SimpleType\guid $serieId = null)
    {
        $this->SerieId = $serieId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSerieId()
    {
        return $this->SerieId;
    }

    /**
     * @param  integer|null     $serieNumber
     * @return PlaceReservation
     */
    public function setSerieNumber($serieNumber)
    {
        $this->SerieNumber = $serieNumber;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getSerieNumber()
    {
        return $this->SerieNumber;
    }

    /**
     * @param  integer|null     $reservationNumber
     * @return PlaceReservation
     */
    public function setReservationNumber($reservationNumber)
    {
        $this->ReservationNumber = $reservationNumber;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getReservationNumber()
    {
        return $this->ReservationNumber;
    }

    /**
     * @param  LockTicket|null  $lockTicket
     * @return PlaceReservation
     */
    public function setLockTicket(LockTicket $lockTicket = null)
    {
        $this->LockTicket = $lockTicket;

        return $this;
    }

    /**
     * @return LockTicket|null
     */
    public function getLockTicket()
    {
        return $this->LockTicket;
    }

    /**
     * @param  integer|null     $numberOfParticipants
     * @return PlaceReservation
     */
    public function setNumberOfParticipants($numberOfParticipants)
    {
        $this->NumberOfParticipants = $numberOfParticipants;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumberOfParticipants()
    {
        return $this->NumberOfParticipants;
    }

    /**
     * @param  ArrayOfArticleSale|null $articleSales
     * @return PlaceReservation
     */
    public function setArticleSales(ArrayOfArticleSale $articleSales = null)
    {
        $this->ArticleSales = $articleSales;

        return $this;
    }

    /**
     * @return ArrayOfArticleSale|null
     */
    public function getArticleSales()
    {
        return $this->ArticleSales;
    }

    /**
     * @param  ArrayOfRentalReservation|null $rentalReservations
     * @return PlaceReservation
     */
    public function setRentalReservations(ArrayOfRentalReservation $rentalReservations = null)
    {
        $this->RentalReservations = $rentalReservations;

        return $this;
    }

    /**
     * @return ArrayOfRentalReservation|null
     */
    public function getRentalReservations()
    {
        return $this->RentalReservations;
    }

}
