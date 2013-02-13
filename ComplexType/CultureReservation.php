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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $ReservationNumber
     */
    protected $ReservationNumber;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ReservationDate
     */
    protected $ReservationDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfCultureReservationSeat|null $ReservationSeats
     */
    protected $ReservationSeats;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PaymentMethodName
     */
    protected $PaymentMethodName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $PaymentMethodId
     */
    protected $PaymentMethodId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var BasketPaymentMethod|null $PaymentMethod
     */
    protected $PaymentMethod;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $CultureEventId
     */
    protected $CultureEventId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CultureEvent|null $CultureEvent
     */
    protected $CultureEvent;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $CustomerId
     */
    protected $CustomerId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Person|null $Customer
     */
    protected $Customer;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Payed
     */
    protected $Payed;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $SalesLineId
     */
    protected $SalesLineId;

    /**
     * @param  SimpleType\Guid|null $id
     * @return CultureReservation
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  integer|null       $reservationNumber
     * @return CultureReservation
     */
    public function setReservationNumber($reservationNumber)
    {
        $this->ReservationNumber = $reservationNumber;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getReservationNumber()
    {
        return $this->ReservationNumber;
    }

    /**
     * @param  string|null        $reservationDate
     * @return CultureReservation
     */
    public function setReservationDate($reservationDate)
    {
        $this->ReservationDate = $reservationDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReservationDate()
    {
        return $this->ReservationDate;
    }

    /**
     * @param  ArrayOfCultureReservationSeat|null $reservationSeats
     * @return CultureReservation
     */
    public function setReservationSeats(ArrayOfCultureReservationSeat $reservationSeats = null)
    {
        $this->ReservationSeats = $reservationSeats;

        return $this;
    }

    /**
     * @return ArrayOfCultureReservationSeat|null
     */
    public function getReservationSeats()
    {
        return $this->ReservationSeats;
    }

    /**
     * @param  string|null        $paymentMethodName
     * @return CultureReservation
     */
    public function setPaymentMethodName($paymentMethodName)
    {
        $this->PaymentMethodName = $paymentMethodName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentMethodName()
    {
        return $this->PaymentMethodName;
    }

    /**
     * @param  SimpleType\Guid|null $paymentMethodId
     * @return CultureReservation
     */
    public function setPaymentMethodId(SimpleType\Guid $paymentMethodId = null)
    {
        $this->PaymentMethodId = $paymentMethodId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getPaymentMethodId()
    {
        return $this->PaymentMethodId;
    }

    /**
     * @param  BasketPaymentMethod|null $paymentMethod
     * @return CultureReservation
     */
    public function setPaymentMethod(BasketPaymentMethod $paymentMethod = null)
    {
        $this->PaymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @return BasketPaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    /**
     * @param  SimpleType\Guid|null $cultureEventId
     * @return CultureReservation
     */
    public function setCultureEventId(SimpleType\Guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  CultureEvent|null  $cultureEvent
     * @return CultureReservation
     */
    public function setCultureEvent(CultureEvent $cultureEvent = null)
    {
        $this->CultureEvent = $cultureEvent;

        return $this;
    }

    /**
     * @return CultureEvent|null
     */
    public function getCultureEvent()
    {
        return $this->CultureEvent;
    }

    /**
     * @param  SimpleType\Guid|null $customerId
     * @return CultureReservation
     */
    public function setCustomerId(SimpleType\Guid $customerId = null)
    {
        $this->CustomerId = $customerId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param  Person|null        $customer
     * @return CultureReservation
     */
    public function setCustomer(Person $customer = null)
    {
        $this->Customer = $customer;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param  boolean|null       $payed
     * @return CultureReservation
     */
    public function setPayed($payed)
    {
        $this->Payed = $payed;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPayed()
    {
        return $this->Payed;
    }

    /**
     * @param  SimpleType\Guid|null $salesLineId
     * @return CultureReservation
     */
    public function setSalesLineId(SimpleType\Guid $salesLineId = null)
    {
        $this->SalesLineId = $salesLineId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getSalesLineId()
    {
        return $this->SalesLineId;
    }
}
