<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * How many participants per price group will register for this culture event 
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class BestAvailableSeatsCultureEventReservationEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'BestAvailableSeatsCultureEventReservationEntry';

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var integer $ParticipantCount
     */
    protected $ParticipantCount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $SeatBlockId
     */
    protected $SeatBlockId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $SeatRowId
     */
    protected $SeatRowId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $SeatRangeId
     */
    protected $SeatRangeId;


    /**
     * @param integer $participantCount
     * @return BestAvailableSeatsCultureEventReservationEntry
     */
    public function setParticipantCount($participantCount)
    {
        $this->ParticipantCount = $participantCount;

        return $this;
    }

    /**
     * @return integer
     */
    public function getParticipantCount()
    {
        return $this->ParticipantCount;
    }

    /**
     * @param SimpleType\guid|null $seatBlockId
     * @return BestAvailableSeatsCultureEventReservationEntry
     */
    public function setSeatBlockId(SimpleType\guid $seatBlockId = null)
    {
        $this->SeatBlockId = $seatBlockId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSeatBlockId()
    {
        return $this->SeatBlockId;
    }

    /**
     * @param SimpleType\guid|null $seatRowId
     * @return BestAvailableSeatsCultureEventReservationEntry
     */
    public function setSeatRowId(SimpleType\guid $seatRowId = null)
    {
        $this->SeatRowId = $seatRowId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSeatRowId()
    {
        return $this->SeatRowId;
    }

    /**
     * @param SimpleType\guid|null $seatRangeId
     * @return BestAvailableSeatsCultureEventReservationEntry
     */
    public function setSeatRangeId(SimpleType\guid $seatRangeId = null)
    {
        $this->SeatRangeId = $seatRangeId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSeatRangeId()
    {
        return $this->SeatRangeId;
    }


}

