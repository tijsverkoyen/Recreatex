<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RentalReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RentalReservation';

    /**
     * @var SimpleTypeGuid
     */
    protected $ArticleId;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var string
     */
    protected $Until;

    /**
     * @var string
     */
    protected $Delivery;

    /**
     * @var string
     */
    protected $Return;

    /**
     * @var LockTicket
     */
    protected $LockTicket;

    /**
     * @var boolean
     */
    protected $OrderWithoutPayment;

    /**
     * @var float
     */
    protected $RentalPrice;

    /**
     * @var string
     */
    protected $Comments;

    /**
     * @var Person
     */
    protected $Customer;

    /**
     * @param  SimpleType\Guid[optional] $articleId
     * @return RentalReservation
     */
    public function setArticleId(SimpleType\Guid $articleId = null)
    {
        $this->ArticleId = $articleId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getArticleId()
    {
        return $this->ArticleId;
    }

    /**
     * @param  string[optional]  $from
     * @return RentalReservation
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  string[optional]  $until
     * @return RentalReservation
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string
     */
    public function getUntil()
    {
        return $this->Until;
    }

    /**
     * @param  string[optional]  $delivery
     * @return RentalReservation
     */
    public function setDelivery($delivery)
    {
        $this->Delivery = $delivery;

        return $this;
    }

    /**
     * @return string
     */
    public function getDelivery()
    {
        return $this->Delivery;
    }

    /**
     * @param  string[optional]  $return
     * @return RentalReservation
     */
    public function setReturn($return)
    {
        $this->Return = $return;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturn()
    {
        return $this->Return;
    }

    /**
     * @param  LockTicket[optional] $lockTicket
     * @return RentalReservation
     */
    public function setLockTicket(LockTicket $lockTicket = null)
    {
        $this->LockTicket = $lockTicket;

        return $this;
    }

    /**
     * @return LockTicket
     */
    public function getLockTicket()
    {
        return $this->LockTicket;
    }

    /**
     * @param  boolean[optional] $orderWithoutPayment
     * @return RentalReservation
     */
    public function setOrderWithoutPayment($orderWithoutPayment)
    {
        $this->OrderWithoutPayment = $orderWithoutPayment;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getOrderWithoutPayment()
    {
        return $this->OrderWithoutPayment;
    }

    /**
     * @param  float[optional]   $rentalPrice
     * @return RentalReservation
     */
    public function setRentalPrice($rentalPrice)
    {
        $this->RentalPrice = $rentalPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getRentalPrice()
    {
        return $this->RentalPrice;
    }

    /**
     * @param  string[optional]  $comments
     * @return RentalReservation
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param  Person[optional]  $customer
     * @return RentalReservation
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
}
