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
     * @var integer
     */
    protected $ParticipantCount;

    /**
     * @var SimpleType\Guid
     */
    protected $PriceGroupId;

    /**
     * @param  integer[optional]                $participantCount
     * @return ExpositionPeriodReservationEntry
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
     * @param  SimpleType\Guid[optional]        $priceGroupId
     * @return ExpositionPeriodReservationEntry
     */
    public function setPriceGroupId(SimpleType\Guid $priceGroupId = null)
    {
        $this->PriceGroupId = $priceGroupId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPriceGroupId()
    {
        return $this->PriceGroupId;
    }
}
