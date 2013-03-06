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
     * @var SimpleTypeGuid
     */
    protected $ReservationActivityId;

    /**
     * @var SimpleTypeGuid
     */
    protected $PlaceId;

    /**
     * @var string
     */
    protected $StartDate;

    /**
     * @var string
     */
    protected $StartTime;

    /**
     * @var string
     */
    protected $EndDate;

    /**
     * @var string
     */
    protected $EndTime;

    /**
     * @var string
     */
    protected $Comments;

    /**
     * @var SimpleTypeGuid
     */
    protected $SerieId;

    /**
     * @var integer
     */
    protected $SerieNumber;

    /**
     * @var integer
     */
    protected $ReservationNumber;

    /**
     * @var LockTicket
     */
    protected $LockTicket;

    /**
     * @var integer
     */
    protected $NumberOfParticipants;

    /**
     * @var ArrayOfArticleSale
     */
    protected $ArticleSales;

    /**
     * @var ArrayOfRentalReservation
     */
    protected $RentalReservations;

    /**
     * @param  SimpleType\Guid[optional] $reservationActivityId
     * @return PlaceReservation
     */
    public function setReservationActivityId(SimpleType\Guid $reservationActivityId = null)
    {
        $this->ReservationActivityId = $reservationActivityId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getReservationActivityId()
    {
        return $this->ReservationActivityId;
    }

    /**
     * @param  SimpleType\Guid[optional] $placeId
     * @return PlaceReservation
     */
    public function setPlaceId(SimpleType\Guid $placeId = null)
    {
        $this->PlaceId = $placeId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPlaceId()
    {
        return $this->PlaceId;
    }

    /**
     * @param  string[optional] $startDate
     * @return PlaceReservation
     */
    public function setStartDate($startDate)
    {
        $this->StartDate = $startDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param  string[optional] $startTime
     * @return PlaceReservation
     */
    public function setStartTime($startTime)
    {
        $this->StartTime = $startTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * @param  string[optional] $endDate
     * @return PlaceReservation
     */
    public function setEndDate($endDate)
    {
        $this->EndDate = $endDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param  string[optional] $endTime
     * @return PlaceReservation
     */
    public function setEndTime($endTime)
    {
        $this->EndTime = $endTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * @param  string[optional] $comments
     * @return PlaceReservation
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
     * @param  SimpleType\Guid[optional] $serieId
     * @return PlaceReservation
     */
    public function setSerieId(SimpleType\Guid $serieId = null)
    {
        $this->SerieId = $serieId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getSerieId()
    {
        return $this->SerieId;
    }

    /**
     * @param  integer[optional] $serieNumber
     * @return PlaceReservation
     */
    public function setSerieNumber($serieNumber)
    {
        $this->SerieNumber = $serieNumber;

        return $this;
    }

    /**
     * @return integer
     */
    public function getSerieNumber()
    {
        return $this->SerieNumber;
    }

    /**
     * @param  integer[optional] $reservationNumber
     * @return PlaceReservation
     */
    public function setReservationNumber($reservationNumber)
    {
        $this->ReservationNumber = $reservationNumber;

        return $this;
    }

    /**
     * @return integer
     */
    public function getReservationNumber()
    {
        return $this->ReservationNumber;
    }

    /**
     * @param  LockTicket[optional] $lockTicket
     * @return PlaceReservation
     */
    public function setLockTicket(LockTicket $lockTicket = null)
    {
        $this->LockTicket = $lockTicket;

        return $this;
    }

    /**
     * @return LockTicket
     */
    public function getLockTicket()
    {
        return $this->LockTicket;
    }

    /**
     * @param  integer[optional] $numberOfParticipants
     * @return PlaceReservation
     */
    public function setNumberOfParticipants($numberOfParticipants)
    {
        $this->NumberOfParticipants = $numberOfParticipants;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberOfParticipants()
    {
        return $this->NumberOfParticipants;
    }

    /**
     * @param  ArrayOfArticleSale[optional] $articleSales
     * @return PlaceReservation
     */
    public function setArticleSales(ArrayOfArticleSale $articleSales = null)
    {
        $this->ArticleSales = $articleSales;

        return $this;
    }

    /**
     * @return ArrayOfArticleSale
     */
    public function getArticleSales()
    {
        return $this->ArticleSales;
    }

    /**
     * @param  ArrayOfRentalReservation[optional] $rentalReservations
     * @return PlaceReservation
     */
    public function setRentalReservations(ArrayOfRentalReservation $rentalReservations = null)
    {
        $this->RentalReservations = $rentalReservations;

        return $this;
    }

    /**
     * @return ArrayOfRentalReservation
     */
    public function getRentalReservations()
    {
        return $this->RentalReservations;
    }
}
