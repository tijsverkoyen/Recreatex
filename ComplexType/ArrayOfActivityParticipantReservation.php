<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfActivityParticipantReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfActivityParticipantReservation';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ActivityParticipantReservation[] $ActivityParticipantReservation
     */
    protected $ActivityParticipantReservation = array();

    /**
     * @param  ActivityParticipantReservation[]      $activityParticipantReservation
     * @return ArrayOfActivityParticipantReservation
     */
    public function setActivityParticipantReservation(array $activityParticipantReservation = array())
    {
        $this->ActivityParticipantReservation = $activityParticipantReservation;

        return $this;
    }

    /**
     * @return ActivityParticipantReservation[]
     */
    public function getActivityParticipantReservation()
    {
        return $this->ActivityParticipantReservation;
    }

}
