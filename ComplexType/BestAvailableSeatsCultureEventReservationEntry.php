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
     * @var integer
     */
    protected $ParticipantCount;

    /**
     * @var SimpleType\Guid
     */
    protected $SeatBlockId;

    /**
     * @var SimpleType\Guid
     */
    protected $SeatRowId;

    /**
     * @var SimpleType\Guid
     */
    protected $SeatRangeId;

    /**
     * @param  integer                                        $participantCount
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
     * @param  SimpleType\Guid|null                           $seatBlockId
     * @return BestAvailableSeatsCultureEventReservationEntry
     */
    public function setSeatBlockId(SimpleType\Guid $seatBlockId = null)
    {
        $this->SeatBlockId = $seatBlockId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getSeatBlockId()
    {
        return $this->SeatBlockId;
    }

    /**
     * @param  SimpleType\Guid|null                           $seatRowId
     * @return BestAvailableSeatsCultureEventReservationEntry
     */
    public function setSeatRowId(SimpleType\Guid $seatRowId = null)
    {
        $this->SeatRowId = $seatRowId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getSeatRowId()
    {
        return $this->SeatRowId;
    }

    /**
     * @param  SimpleType\Guid|null                           $seatRangeId
     * @return BestAvailableSeatsCultureEventReservationEntry
     */
    public function setSeatRangeId(SimpleType\Guid $seatRangeId = null)
    {
        $this->SeatRangeId = $seatRangeId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getSeatRangeId()
    {
        return $this->SeatRangeId;
    }
}
