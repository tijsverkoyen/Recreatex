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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Comment
     */
    protected $Comment;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfActivityPartReservation|null $ParticipantActivityDays
     */
    protected $ParticipantActivityDays;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ParticipantId
     */
    protected $ParticipantId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PriceGroupId
     */
    protected $PriceGroupId;

    /**
     * @param  string|null                    $comment
     * @return ActivityParticipantReservation
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param  ArrayOfActivityPartReservation|null $participantActivityDays
     * @return ActivityParticipantReservation
     */
    public function setParticipantActivityDays(ArrayOfActivityPartReservation $participantActivityDays = null)
    {
        $this->ParticipantActivityDays = $participantActivityDays;

        return $this;
    }

    /**
     * @return ArrayOfActivityPartReservation|null
     */
    public function getParticipantActivityDays()
    {
        return $this->ParticipantActivityDays;
    }

    /**
     * @param  SimpleType\guid|null           $participantId
     * @return ActivityParticipantReservation
     */
    public function setParticipantId(SimpleType\guid $participantId = null)
    {
        $this->ParticipantId = $participantId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getParticipantId()
    {
        return $this->ParticipantId;
    }

    /**
     * @param  SimpleType\guid|null           $priceGroupId
     * @return ActivityParticipantReservation
     */
    public function setPriceGroupId(SimpleType\guid $priceGroupId = null)
    {
        $this->PriceGroupId = $priceGroupId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPriceGroupId()
    {
        return $this->PriceGroupId;
    }

}
