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

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\guid $Id
     */
    protected $Id;

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\guid $SiteId
     */
    protected $SiteId;

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\guid $CultureEventId
     */
    protected $CultureEventId;

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var integer $ReservedPlaces
     */
    protected $ReservedPlaces;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $TotalPlaces
     */
    protected $TotalPlaces;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $SiteName
     */
    protected $SiteName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $SessionId
     */
    protected $SessionId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $OptionExpirationDate
     */
    protected $OptionExpirationDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $WebCreated
     */
    protected $WebCreated;

    /**
     * @param  SimpleType\guid $id
     * @return SiteAllocation
     */
    public function setId(SimpleType\guid $id)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\guid $siteId
     * @return SiteAllocation
     */
    public function setSiteId(SimpleType\guid $siteId)
    {
        $this->SiteId = $siteId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getSiteId()
    {
        return $this->SiteId;
    }

    /**
     * @param  SimpleType\guid $cultureEventId
     * @return SiteAllocation
     */
    public function setCultureEventId(SimpleType\guid $cultureEventId)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\guid
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
     * @param  integer|null   $totalPlaces
     * @return SiteAllocation
     */
    public function setTotalPlaces($totalPlaces)
    {
        $this->TotalPlaces = $totalPlaces;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getTotalPlaces()
    {
        return $this->TotalPlaces;
    }

    /**
     * @param  string|null    $siteName
     * @return SiteAllocation
     */
    public function setSiteName($siteName)
    {
        $this->SiteName = $siteName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSiteName()
    {
        return $this->SiteName;
    }

    /**
     * @param  SimpleType\guid|null $sessionId
     * @return SiteAllocation
     */
    public function setSessionId(SimpleType\guid $sessionId = null)
    {
        $this->SessionId = $sessionId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSessionId()
    {
        return $this->SessionId;
    }

    /**
     * @param  string|null    $optionExpirationDate
     * @return SiteAllocation
     */
    public function setOptionExpirationDate($optionExpirationDate)
    {
        $this->OptionExpirationDate = $optionExpirationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOptionExpirationDate()
    {
        return $this->OptionExpirationDate;
    }

    /**
     * @param  boolean|null   $webCreated
     * @return SiteAllocation
     */
    public function setWebCreated($webCreated)
    {
        $this->WebCreated = $webCreated;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getWebCreated()
    {
        return $this->WebCreated;
    }

}
