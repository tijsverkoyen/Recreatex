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
     * @var boolean
     */
    protected $InfrastructureInfo;

    /**
     * Include related ReservationActivity info.
     * @var boolean
     */
    protected $ReservationActivityInfo;

    /**
     * Include Places that are cumulated.
     * @var boolean
     */
    protected $Cumulated;

    /**
     * Include Places that are not cumulated.
     * @var boolean
     */
    protected $Uncumulated;

    /**
     * Include Allowed ReservationActivity information.
     * @var boolean
     */
    protected $AllowedReservationActivities;

    /**
     * @param  boolean[optional] $infrastructureInfo
     * @return PlaceIncludes
     */
    public function setInfrastructureInfo($infrastructureInfo)
    {
        $this->InfrastructureInfo = $infrastructureInfo;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getInfrastructureInfo()
    {
        return $this->InfrastructureInfo;
    }

    /**
     * @param  boolean[optional] $reservationActivityInfo
     * @return PlaceIncludes
     */
    public function setReservationActivityInfo($reservationActivityInfo)
    {
        $this->ReservationActivityInfo = $reservationActivityInfo;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getReservationActivityInfo()
    {
        return $this->ReservationActivityInfo;
    }

    /**
     * @param  boolean[optional] $cumulated
     * @return PlaceIncludes
     */
    public function setCumulated($cumulated)
    {
        $this->Cumulated = $cumulated;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getCumulated()
    {
        return $this->Cumulated;
    }

    /**
     * @param  boolean[optional] $uncumulated
     * @return PlaceIncludes
     */
    public function setUncumulated($uncumulated)
    {
        $this->Uncumulated = $uncumulated;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getUncumulated()
    {
        return $this->Uncumulated;
    }

    /**
     * @param  boolean[optional] $allowedReservationActivities
     * @return PlaceIncludes
     */
    public function setAllowedReservationActivities($allowedReservationActivities)
    {
        $this->AllowedReservationActivities = $allowedReservationActivities;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowedReservationActivities()
    {
        return $this->AllowedReservationActivities;
    }
}
