<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * How many participants per price group will register in a culturesite for this culture event
 *
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SiteCultureEventReservationEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SiteCultureEventReservationEntry';

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
     * @var SimpleType\guid|null $SiteId
     */
    protected $SiteId;

    /**
     * @param  integer                          $participantCount
     * @return SiteCultureEventReservationEntry
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
     * @param  SimpleType\guid|null             $siteId
     * @return SiteCultureEventReservationEntry
     */
    public function setSiteId(SimpleType\guid $siteId = null)
    {
        $this->SiteId = $siteId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSiteId()
    {
        return $this->SiteId;
    }

}
