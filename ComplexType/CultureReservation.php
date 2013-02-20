<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureReservation';

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var integer
     */
    protected $ReservationNumber;

    /**
     * @var string
     */
    protected $ReservationDate;

    /**
     * @var ArrayOfCultureReservationSeat
     */
    protected $ReservationSeats;

    /**
     * @var string
     */
    protected $PaymentMethodName;

    /**
     * @var SimpleType\Guid
     */
    protected $PaymentMethodId;

    /**
     * @var BasketPaymentMethod
     */
    protected $PaymentMethod;

    /**
     * @var SimpleType\Guid
     */
    protected $CultureEventId;

    /**
     * @var CultureEvent
     */
    protected $CultureEvent;

    /**
     * @var SimpleType\Guid
     */
    protected $CustomerId;

    /**
     * @var Person
     */
    protected $Customer;

    /**
     * @var boolean
     */
    protected $Payed;

    /**
     * @var SimpleType\Guid
     */
    protected $SalesLineId;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return CultureReservation
     */
    public function setId(SimpleType\Guid $id = null)
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
     * @param  integer[optional]  $reservationNumber
     * @return CultureReservation
     */
    public function setReservationNumber($reservationNumber)
    {
        $this->ReservationNumber = $reservationNumber;

        return $this;
    }

    /**
     * @return integer
     */
    public function getReservationNumber()
    {
        return $this->ReservationNumber;
    }

    /**
     * @param  string[optional]   $reservationDate
     * @return CultureReservation
     */
    public function setReservationDate($reservationDate)
    {
        $this->ReservationDate = $reservationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getReservationDate()
    {
        return $this->ReservationDate;
    }

    /**
     * @param  ArrayOfCultureReservationSeat[optional] $reservationSeats
     * @return CultureReservation
     */
    public function setReservationSeats(ArrayOfCultureReservationSeat $reservationSeats = null)
    {
        $this->ReservationSeats = $reservationSeats;

        return $this;
    }

    /**
     * @return ArrayOfCultureReservationSeat
     */
    public function getReservationSeats()
    {
        return $this->ReservationSeats;
    }

    /**
     * @param  string[optional]   $paymentMethodName
     * @return CultureReservation
     */
    public function setPaymentMethodName($paymentMethodName)
    {
        $this->PaymentMethodName = $paymentMethodName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodName()
    {
        return $this->PaymentMethodName;
    }

    /**
     * @param  SimpleType\Guid[optional] $paymentMethodId
     * @return CultureReservation
     */
    public function setPaymentMethodId(SimpleType\Guid $paymentMethodId = null)
    {
        $this->PaymentMethodId = $paymentMethodId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPaymentMethodId()
    {
        return $this->PaymentMethodId;
    }

    /**
     * @param  BasketPaymentMethod[optional] $paymentMethod
     * @return CultureReservation
     */
    public function setPaymentMethod(BasketPaymentMethod $paymentMethod = null)
    {
        $this->PaymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @return BasketPaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    /**
     * @param  SimpleType\Guid[optional] $cultureEventId
     * @return CultureReservation
     */
    public function setCultureEventId(SimpleType\Guid $cultureEventId = null)
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
     * @param  CultureEvent[optional] $cultureEvent
     * @return CultureReservation
     */
    public function setCultureEvent(CultureEvent $cultureEvent = null)
    {
        $this->CultureEvent = $cultureEvent;

        return $this;
    }

    /**
     * @return CultureEvent
     */
    public function getCultureEvent()
    {
        return $this->CultureEvent;
    }

    /**
     * @param  SimpleType\Guid[optional] $customerId
     * @return CultureReservation
     */
    public function setCustomerId(SimpleType\Guid $customerId = null)
    {
        $this->CustomerId = $customerId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param  Person[optional]   $customer
     * @return CultureReservation
     */
    public function setCustomer(Person $customer = null)
    {
        $this->Customer = $customer;

        return $this;
    }

    /**
     * @return Person
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param  boolean[optional]  $payed
     * @return CultureReservation
     */
    public function setPayed($payed)
    {
        $this->Payed = $payed;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPayed()
    {
        return $this->Payed;
    }

    /**
     * @param  SimpleType\Guid[optional] $salesLineId
     * @return CultureReservation
     */
    public function setSalesLineId(SimpleType\Guid $salesLineId = null)
    {
        $this->SalesLineId = $salesLineId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getSalesLineId()
    {
        return $this->SalesLineId;
    }
}
