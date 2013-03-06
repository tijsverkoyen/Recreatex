<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SiteAllocation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SiteAllocation';

    /**

     * minOccurs = 1     * @var SimpleType\Guid $Id
     */
    protected $Id;

    /**

     * minOccurs = 1     * @var SimpleType\Guid $SiteId
     */
    protected $SiteId;

    /**

     * minOccurs = 1     * @var SimpleType\Guid $CultureEventId
     */
    protected $CultureEventId;

    /**

     * minOccurs = 1     * @var integer $ReservedPlaces
     */
    protected $ReservedPlaces;

    /**
     * @var integer
     */
    protected $TotalPlaces;

    /**
     * @var string
     */
    protected $SiteName;

    /**
     * @var SimpleTypeGuid
     */
    protected $SessionId;

    /**
     * @var string
     */
    protected $OptionExpirationDate;

    /**
     * @var boolean
     */
    protected $WebCreated;

    /**
     * @param  SimpleType\Guid $id
     * @return SiteAllocation
     */
    public function setId(SimpleType\Guid $id)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\Guid $siteId
     * @return SiteAllocation
     */
    public function setSiteId(SimpleType\Guid $siteId)
    {
        $this->SiteId = $siteId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getSiteId()
    {
        return $this->SiteId;
    }

    /**
     * @param  SimpleType\Guid $cultureEventId
     * @return SiteAllocation
     */
    public function setCultureEventId(SimpleType\Guid $cultureEventId)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  integer        $reservedPlaces
     * @return SiteAllocation
     */
    public function setReservedPlaces($reservedPlaces)
    {
        $this->ReservedPlaces = $reservedPlaces;

        return $this;
    }

    /**
     * @return integer
     */
    public function getReservedPlaces()
    {
        return $this->ReservedPlaces;
    }

    /**
     * @param  integer[optional] $totalPlaces
     * @return SiteAllocation
     */
    public function setTotalPlaces($totalPlaces)
    {
        $this->TotalPlaces = $totalPlaces;

        return $this;
    }

    /**
     * @return integer
     */
    public function getTotalPlaces()
    {
        return $this->TotalPlaces;
    }

    /**
     * @param  string[optional] $siteName
     * @return SiteAllocation
     */
    public function setSiteName($siteName)
    {
        $this->SiteName = $siteName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->SiteName;
    }

    /**
     * @param  SimpleType\Guid[optional] $sessionId
     * @return SiteAllocation
     */
    public function setSessionId(SimpleType\Guid $sessionId = null)
    {
        $this->SessionId = $sessionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getSessionId()
    {
        return $this->SessionId;
    }

    /**
     * @param  string[optional] $optionExpirationDate
     * @return SiteAllocation
     */
    public function setOptionExpirationDate($optionExpirationDate)
    {
        $this->OptionExpirationDate = $optionExpirationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getOptionExpirationDate()
    {
        return $this->OptionExpirationDate;
    }

    /**
     * @param  boolean[optional] $webCreated
     * @return SiteAllocation
     */
    public function setWebCreated($webCreated)
    {
        $this->WebCreated = $webCreated;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getWebCreated()
    {
        return $this->WebCreated;
    }
}
