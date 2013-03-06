<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ReservationIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ReservationIncludes';

    /**
     * @var boolean
     */
    protected $OptionalReservations;

    /**
     * @var boolean
     */
    protected $SingleReservations;

    /**
     * @var boolean
     */
    protected $ReservationsInList;

    /**
     * @var boolean
     */
    protected $SerieReservations;

    /**
     * @var boolean
     */
    protected $DeletedReservations;

    /**
     * @var boolean
     */
    protected $CustomerInfo;

    /**
     * @var boolean
     */
    protected $PlaceInfo;

    /**
     * @var boolean
     */
    protected $InfrastructureInfo;

    /**
     * @var boolean
     */
    protected $ReservationActivityInfo;

    /**
     * @param  boolean[optional]   $optionalReservations
     * @return ReservationIncludes
     */
    public function setOptionalReservations($optionalReservations)
    {
        $this->OptionalReservations = $optionalReservations;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getOptionalReservations()
    {
        return $this->OptionalReservations;
    }

    /**
     * @param  boolean[optional]   $singleReservations
     * @return ReservationIncludes
     */
    public function setSingleReservations($singleReservations)
    {
        $this->SingleReservations = $singleReservations;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getSingleReservations()
    {
        return $this->SingleReservations;
    }

    /**
     * @param  boolean[optional]   $reservationsInList
     * @return ReservationIncludes
     */
    public function setReservationsInList($reservationsInList)
    {
        $this->ReservationsInList = $reservationsInList;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getReservationsInList()
    {
        return $this->ReservationsInList;
    }

    /**
     * @param  boolean[optional]   $serieReservations
     * @return ReservationIncludes
     */
    public function setSerieReservations($serieReservations)
    {
        $this->SerieReservations = $serieReservations;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getSerieReservations()
    {
        return $this->SerieReservations;
    }

    /**
     * @param  boolean[optional]   $deletedReservations
     * @return ReservationIncludes
     */
    public function setDeletedReservations($deletedReservations)
    {
        $this->DeletedReservations = $deletedReservations;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDeletedReservations()
    {
        return $this->DeletedReservations;
    }

    /**
     * @param  boolean[optional]   $customerInfo
     * @return ReservationIncludes
     */
    public function setCustomerInfo($customerInfo)
    {
        $this->CustomerInfo = $customerInfo;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getCustomerInfo()
    {
        return $this->CustomerInfo;
    }

    /**
     * @param  boolean[optional]   $placeInfo
     * @return ReservationIncludes
     */
    public function setPlaceInfo($placeInfo)
    {
        $this->PlaceInfo = $placeInfo;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPlaceInfo()
    {
        return $this->PlaceInfo;
    }

    /**
     * @param  boolean[optional]   $infrastructureInfo
     * @return ReservationIncludes
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
     * @param  boolean[optional]   $reservationActivityInfo
     * @return ReservationIncludes
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
}
