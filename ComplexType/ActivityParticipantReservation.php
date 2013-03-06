<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ActivityParticipantReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ActivityParticipantReservation';

    /**
     * @var string
     */
    protected $Comment;

    /**
     * @var ArrayOfActivityPartReservation
     */
    protected $ParticipantActivityDays;

    /**
     * @var SimpleTypeGuid
     */
    protected $ParticipantId;

    /**
     * @var SimpleTypeGuid
     */
    protected $PriceGroupId;

    /**
     * @param  string[optional]               $comment
     * @return ActivityParticipantReservation
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param  ArrayOfActivityPartReservation[optional] $participantActivityDays
     * @return ActivityParticipantReservation
     */
    public function setParticipantActivityDays(ArrayOfActivityPartReservation $participantActivityDays = null)
    {
        $this->ParticipantActivityDays = $participantActivityDays;

        return $this;
    }

    /**
     * @return ArrayOfActivityPartReservation
     */
    public function getParticipantActivityDays()
    {
        return $this->ParticipantActivityDays;
    }

    /**
     * @param  SimpleType\guid[optional]      $participantId
     * @return ActivityParticipantReservation
     */
    public function setParticipantId(SimpleType\guid $participantId = null)
    {
        $this->ParticipantId = $participantId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getParticipantId()
    {
        return $this->ParticipantId;
    }

    /**
     * @param  SimpleType\guid[optional]      $priceGroupId
     * @return ActivityParticipantReservation
     */
    public function setPriceGroupId(SimpleType\guid $priceGroupId = null)
    {
        $this->PriceGroupId = $priceGroupId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getPriceGroupId()
    {
        return $this->PriceGroupId;
    }
}
