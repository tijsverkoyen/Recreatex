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
     * @var array
     */
    protected $ActivityParticipantReservation = array();

    /**
     * @param  array                                 $activityParticipantReservation
     * @return ArrayOfActivityParticipantReservation
     */
    public function setActivityParticipantReservation(array $activityParticipantReservation = array())
    {
        $this->ActivityParticipantReservation = $activityParticipantReservation;

        return $this;
    }

    /**
     * @return array
     */
    public function getActivityParticipantReservation()
    {
        if (!is_array($this->ActivityParticipantReservation)) {
            return array($this->ActivityParticipantReservation);
        }

        return $this->ActivityParticipantReservation;
    }
}
