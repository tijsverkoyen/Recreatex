<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 * The includes that will be applied to the search query
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PlaceIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PlaceIncludes';

    /**
     * Include related Infrastructure info.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $InfrastructureInfo
     */
    protected $InfrastructureInfo;

    /**
     * Include related ReservationActivity info.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ReservationActivityInfo
     */
    protected $ReservationActivityInfo;

    /**
     * Include Places that are cumulated.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Cumulated
     */
    protected $Cumulated;

    /**
     * Include Places that are not cumulated.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Uncumulated
     */
    protected $Uncumulated;

    /**
     * Include Allowed ReservationActivity information.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $AllowedReservationActivities
     */
    protected $AllowedReservationActivities;

    /**
     * @param  boolean|null  $infrastructureInfo
     * @return PlaceIncludes
     */
    public function setInfrastructureInfo($infrastructureInfo)
    {
        $this->InfrastructureInfo = $infrastructureInfo;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getInfrastructureInfo()
    {
        return $this->InfrastructureInfo;
    }

    /**
     * @param  boolean|null  $reservationActivityInfo
     * @return PlaceIncludes
     */
    public function setReservationActivityInfo($reservationActivityInfo)
    {
        $this->ReservationActivityInfo = $reservationActivityInfo;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getReservationActivityInfo()
    {
        return $this->ReservationActivityInfo;
    }

    /**
     * @param  boolean|null  $cumulated
     * @return PlaceIncludes
     */
    public function setCumulated($cumulated)
    {
        $this->Cumulated = $cumulated;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getCumulated()
    {
        return $this->Cumulated;
    }

    /**
     * @param  boolean|null  $uncumulated
     * @return PlaceIncludes
     */
    public function setUncumulated($uncumulated)
    {
        $this->Uncumulated = $uncumulated;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getUncumulated()
    {
        return $this->Uncumulated;
    }

    /**
     * @param  boolean|null  $allowedReservationActivities
     * @return PlaceIncludes
     */
    public function setAllowedReservationActivities($allowedReservationActivities)
    {
        $this->AllowedReservationActivities = $allowedReservationActivities;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getAllowedReservationActivities()
    {
        return $this->AllowedReservationActivities;
    }

}
