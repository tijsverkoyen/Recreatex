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
     * @param  integer|null                     $participantCount
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
     * @param  SimpleType\Guid|null             $priceGroupId
     * @return ExpositionPeriodReservationEntry
     */
    public function setPriceGroupId(SimpleType\Guid $priceGroupId = null)
    {
        $this->PriceGroupId = $priceGroupId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getPriceGroupId()
    {
        return $this->PriceGroupId;
    }
}
