<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * How many participants per price group will register for this expostion period 
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExpositionPeriodReservationEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpositionPeriodReservationEntry';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $ParticipantCount
     */
    protected $ParticipantCount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PriceGroupId
     */
    protected $PriceGroupId;


    /**
     * @param integer|null $participantCount
     * @return ExpositionPeriodReservationEntry
     */
    public function setParticipantCount($participantCount)
    {
        $this->ParticipantCount = $participantCount;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getParticipantCount()
    {
        return $this->ParticipantCount;
    }

    /**
     * @param SimpleType\guid|null $priceGroupId
     * @return ExpositionPeriodReservationEntry
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

