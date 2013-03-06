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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $OptionalReservations
     */
    protected $OptionalReservations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $SingleReservations
     */
    protected $SingleReservations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ReservationsInList
     */
    protected $ReservationsInList;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $SerieReservations
     */
    protected $SerieReservations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $DeletedReservations
     */
    protected $DeletedReservations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $CustomerInfo
     */
    protected $CustomerInfo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PlaceInfo
     */
    protected $PlaceInfo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $InfrastructureInfo
     */
    protected $InfrastructureInfo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ReservationActivityInfo
     */
    protected $ReservationActivityInfo;

    /**
     * @param  boolean|null        $optionalReservations
     * @return ReservationIncludes
     */
    public function setOptionalReservations($optionalReservations)
    {
        $this->OptionalReservations = $optionalReservations;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getOptionalReservations()
    {
        return $this->OptionalReservations;
    }

    /**
     * @param  boolean|null        $singleReservations
     * @return ReservationIncludes
     */
    public function setSingleReservations($singleReservations)
    {
        $this->SingleReservations = $singleReservations;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getSingleReservations()
    {
        return $this->SingleReservations;
    }

    /**
     * @param  boolean|null        $reservationsInList
     * @return ReservationIncludes
     */
    public function setReservationsInList($reservationsInList)
    {
        $this->ReservationsInList = $reservationsInList;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getReservationsInList()
    {
        return $this->ReservationsInList;
    }

    /**
     * @param  boolean|null        $serieReservations
     * @return ReservationIncludes
     */
    public function setSerieReservations($serieReservations)
    {
        $this->SerieReservations = $serieReservations;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getSerieReservations()
    {
        return $this->SerieReservations;
    }

    /**
     * @param  boolean|null        $deletedReservations
     * @return ReservationIncludes
     */
    public function setDeletedReservations($deletedReservations)
    {
        $this->DeletedReservations = $deletedReservations;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getDeletedReservations()
    {
        return $this->DeletedReservations;
    }

    /**
     * @param  boolean|null        $customerInfo
     * @return ReservationIncludes
     */
    public function setCustomerInfo($customerInfo)
    {
        $this->CustomerInfo = $customerInfo;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getCustomerInfo()
    {
        return $this->CustomerInfo;
    }

    /**
     * @param  boolean|null        $placeInfo
     * @return ReservationIncludes
     */
    public function setPlaceInfo($placeInfo)
    {
        $this->PlaceInfo = $placeInfo;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPlaceInfo()
    {
        return $this->PlaceInfo;
    }

    /**
     * @param  boolean|null        $infrastructureInfo
     * @return ReservationIncludes
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
     * @param  boolean|null        $reservationActivityInfo
     * @return ReservationIncludes
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

}
